<?php

namespace App\Http\Controllers\Transactions;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PartyTicketTransaction;

class TransactionHistory extends Controller
{
    //
     public function index(Request $request, TransactionHistory $transactionHistory) {
    // Check if the user is authenticated
    if (!auth()->check()) {
        return redirect()->back()->with('warning', 'Oops! You need to create an account or login to continue.');
    } elseif (auth()->user()->usertype === 'admin') {
        return redirect()->back()->with('error', 'You are not allowed to access this page.');
    }

    // Retrieve the authenticated user
    $user = Auth::user();

    // Retrieve the transaction history for the user
   /*  $transactions = $user->transactionHistory() // Call the method directly
        ->with('partyTicketTransaction', 'shortletTransaction', 'flightBookingTransaction', 'hotelBookingTransaction')
        ->get(); */
    $transactions = $user->transactionHistory() // Call the method directly
        ->with('partyTicketTransaction')
        ->get();

    $transactionItems = [];

    if ($transactions->isNotEmpty()) {
        foreach ($transactions as $transactionItem) {
            // Access each transaction type and store them in the array
            $transactionItems['partyTicketTransaction'] = $transactionItem->partyTicketTransaction;
            $transactionItems['shortletTransaction'] = $transactionItem->shortletTransaction;
            $transactionItems['flightBookingTransaction'] = $transactionItem->flightBookingTransaction;
            $transactionItems['hotelBookingTransaction'] = $transactionItem->hotelBookingTransaction;
        }
    }
    // dd($transactionItems); // Debugging output

    // dd($transactions); // Debugging output

    return view('transactions', compact('transactionItems'));
}

    public function paymentSummary(Request $request, PartyTicketTransaction $partyTicketTransaction, $id)
    {
        // Retrieve the transaction history for the user
        $user = Auth::user();

        $transactionReceipt = $partyTicketTransaction->find($id);


        // dd($transactionReceipt);
        if ($transactionReceipt == null) {
            return redirect()->back()->with('error', 'Transaction not found.');
        }

        return view('pages.events.vieworder', [
            'transactionReceipt' => $transactionReceipt,
            'user' => $user,
        ]);
    }


    public function downloadPartyTicket (Event $event, PartyTicketTransaction $partyTicketTransaction, $id) {
        // Retrieve the transaction history for the user
        $user = Auth::user();
        $transactionData = $partyTicketTransaction->find(1);
        // dd($transactionData);
        if ($transactionData == null) {
            return redirect()->back()->with('error', 'Transaction not found.');
        }

        // Generate the PDF using a library like Dompdf or Snappy
        // $pdf = PDF::loadView('path.to.your.pdf.view', compact('transactionData'));
        // return $pdf->download('transaction_receipt.pdf');

        // $ticketPassCode = $transactionData->ticket_passcode;

        // Qr Code Generator

        return view('pages.events.e-ticket', [
            'transactionData' => $transactionData,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request data


        // Store the transaction in the database
        // return response()->json(['message' => 'Transaction stored successfully']);
    }
}
