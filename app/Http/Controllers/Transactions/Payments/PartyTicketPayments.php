<?php

namespace App\Http\Controllers\Transactions\Payments;

use Log;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\PartyTicketTransaction;
use Illuminate\Support\Facades\Redirect;
use App\Mail\PartyTicketPaymentConfirmation;
use Unicodeveloper\Paystack\Paystack as Paystack;

class PartyTicketPayments extends Controller
{
    //
    public function pay(Request $request) {
        // Validate the input data
        $data = $request->validate([
            'email' => 'required|email',
            'user_id' => 'required|numeric',
            'phone' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'product_reference' => 'required|string',
            'product_name' => 'required|string',
            'product_price' => 'required|array',
            'product_quantity' => 'required|array',
            'taxed_order' => 'required|numeric',
            'product_purchase_cost' => 'required|numeric',
            'product_total_quantity' => 'required|numeric',
            'product_total_cost' => 'required|numeric',
            'product_order_date' => 'required|date',
            'event_date' => 'required|string',
            'event_time' => 'required|string',
            'event_location' => 'required'
        ]);

        // Generate a unique order ID
        $orderID = $data['product_reference'] ;


        // Prepare the payment data
        $paymentData = [
            'email' => $data['email'],
            'amount' => (int) round($data['product_total_cost'] * 100), // Paystack requires amount in kobo
            'callback_url' => route('payment.callback'),
            'metadata' => [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone' => $data['phone'],
                'product_reference' => $orderID,
                'product_name' => $data['product_name'],
                'product_price' => $data['product_price'],
                'product_quantity' => $data['product_quantity'],
                'taxed_order' => $data['taxed_order'],
                'product_purchase_cost' => $data['product_purchase_cost'],
                'product_total_quantity' => $data['product_total_quantity'],
                'product_total_cost' => $data['product_total_cost'],
                'product_order_date' => $data['product_order_date'],
                'event_date' => $data['event_date'],
                'event_time' => $data['event_time'],
                'event_location' => $data['event_location'],
            ],
        ];

        try {
            // Initialize Paystack
            $paystack = new Paystack();
            $response = $paystack->getAuthorizationUrl($paymentData)->redirectNow();

            // Uncomment the line below to send the confirmation email before redirecting
            // Mail::to($data['email'])->send(new PaymentConfirmation($data['first_name'], $data['last_name'], $orderID, $data['product_total_cost']));

            return $response;
        } catch (\Exception $e) {
            // Handle the exception
            return redirect()->back()->with('error', $e->getMessage());
            // return redirect()->back()->with('error', 'An error occurred while processing your payment. Please try again later.');
        }
    }

    public function callback(Request $request, Event $event, TransactionHistory $transactionHistory) {
        try {
                   // Initialize Paystack
            $paystack = new Paystack();

            // Verify the payment
            $response = $paystack->getPaymentData();

            // Log the full response for debugging
            \Log::info('Paystack Response: ', $response);

            // Check if the payment was successful
            // if ($response['status']) {

          // The payment is successful
            $data = $response['data'];
            $email = $data['customer']['email'];
            $mode_of_payment = $data['authorization'][ 'channel'];
            $first_name = $data['metadata']['first_name'];
            $last_name = $data['metadata']['last_name'];
            $date = $data['metadata']['event_date'];
            $receipt = $data['metadata']['product_reference'] . '/' . $data['reference'];
            $metadata = $data['metadata'];
            $product_name = $metadata['product_name'];
            $product_price = $metadata['product_price'];
            $product_quantity = $metadata['product_quantity'];
            $product_total_quantity = $metadata['product_total_quantity'];
            $product_total_cost = $metadata['product_total_cost'];
            $taxed_order = $data['metadata']['taxed_order'];
            $event_time = $data['metadata']['event_time'];
            $event_location = $data['metadata']['event_location'];
            // $status = 'Fail';
            $status = $data['status'];
            $product_order_date = $metadata['product_order_date'];
            $ticket_passcode = Event::where('event_reference', $data['metadata']['product_reference'])->first()->ticket_passcode;
            $generated_ticket_passcode = $status == 'success' ? $data['metadata']['product_reference'] . '/' . $data['reference'] . '/' . $ticket_passcode : null;

            // dd($generated_ticket_passcode);



            // Payment Categories
            /* Hotel
            Shortlet
            Partyticket
            Flight */


            if (Str::contains($receipt, 'event')) {
                $category = 'Partyticket';
            } elseif (Str::contains($receipt, 'hotel')) {
                $category = 'Hotel';
            } elseif (Str::contains($receipt, 'shortlet')) {
                $category = 'Shortlet';
            } elseif (Str::contains($receipt, 'flight')) {
                $category = 'Flight';
            } else {
                $category = 'Unknown';
            }

            // $user = Auth::user();



           $user = Auth::user();

// Check if the user already has a transaction history
$transactionHistory = $user->transactionHistory;
// $transactionHistory = $user->transactionHistory()->firstOrCreate([]);

 if (!$transactionHistory) {
    // If no transaction history exists, create a new one
    $transactionHistory = new TransactionHistory();
    $user->transactionHistory()->save($transactionHistory);
}

// Create a new PartyTicketTransaction instance with the required data

$existingPartyTicketTransaction = PartyTicketTransaction::where('receipt', $receipt)->first();

if ($existingPartyTicketTransaction) {
    // dd('if');
    $partyTicketTransaction = PartyTicketTransaction::updateOrCreate(
        ['receipt' => $receipt],
        [
            'product_reference' => $data['metadata']['product_reference'],
            'product_name' => $data['metadata']['product_name'],
            'product_price' => $data['metadata']['product_price'],
            'product_price' => $data['metadata']['product_price'],
            'event_date' => $data['metadata']['event_date'],
            'event_time' => $data['metadata']['event_time'],
            'event_location' => $data['metadata']['event_location'],
            'taxed_fee' => $taxed_order,
            'product_purchase_cost' => $data['metadata']['product_purchase_cost'],
            'product_total_quantity' => $data['metadata']['product_total_quantity'],
            'product_total_cost' => $data['metadata']['product_total_cost'],
            'status' => $status,
            'mode_of_payment' => $mode_of_payment,
            'receipt' => $receipt,
            'ticket_pass_code' => $generated_ticket_passcode,
            'category' => $category,
            'product_order_date' => $data['metadata']['product_order_date'],
        ]
    );
} else {
    // dd('else');
    $partyTicketTransaction = new PartyTicketTransaction([
        'product_reference' => $data['metadata']['product_reference'],
        'product_name' => $data['metadata']['product_name'],
        'product_price' => $data['metadata']['product_price'],
        'product_quantity' => $data['metadata']['product_quantity'],
        'event_location' => $data['metadata']['event_location'],
        'event_date' => $data['metadata']['event_date'],
        'event_time' => $data['metadata']['event_time'],
        'taxed_fee' => $taxed_order,
        'product_purchase_cost' => $data['metadata']['product_purchase_cost'],
        'product_total_quantity' => $data['metadata']['product_total_quantity'],
        'product_total_cost' => $data['metadata']['product_total_cost'],
        'status' => $status,
        'mode_of_payment' => $mode_of_payment,
        'receipt' => $receipt,
        'ticket_pass_code' => $generated_ticket_passcode,
        'category' => $category,
        'product_order_date' => $data['metadata']['product_order_date'],
    ]);

    $transactionHistory->partyTicketTransaction()->save($partyTicketTransaction);

}




            Mail::to($email)->send(new PartyTicketPaymentConfirmation($email, $receipt, $mode_of_payment, $product_name, $product_price, $product_quantity, $product_total_quantity, $product_total_cost, $category, $product_order_date, $first_name, $last_name, $status ));

            // dd('Saved');

            $partyTicketTransaction = PartyTicketTransaction::latest()->first();




            // // Payment was successful
            return redirect()->route('payment.summary', ['id' => $partyTicketTransaction->id])->with('success', 'Payment successful!');


        } catch (\Exception $e) {
            // Handle the exception

            // return redirect()->back()->with('error', 'An error occurred while processing your payment. Please try again later.');

            return  $e->getMessage();
        }
    }
}
