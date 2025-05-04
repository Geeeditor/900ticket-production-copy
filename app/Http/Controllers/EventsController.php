<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use App\Http\Controllers\Controller;
use App\Models\PartyTicketTransaction;

class EventsController extends Controller
{
    //
    public function showEvents(Event $event) {
        $events = Event::latest()->get();
        return view('pages.events.index', ['events' => $events]);
    }

    public function viewEvents(Event $event, $id) {
        $events = Event::find($id);


        return view('pages.events.event', ['events' => $events]);


    }

    public function searchTicket() {
        return view('verify.eticket.find');
    }

    public function resultTicket(Request $request, PartyTicketTransaction $partyTicketTransaction) {
        $data = $request->validate([
            'transactionRef' => 'required'
        ]);

        $ticket = PartyTicketTransaction::where('receipt', $data['transactionRef'])->first();

        return view('verify.eticket.find', ['ticket' => $ticket]);
    }

    public function qrTicket(Request $request) {
        $receipt = $request->query('receipt');

        if ($receipt) {
            $ticket = PartyTicketTransaction::where('receipt', $receipt)->first();
        } else {
            // Handle the case when the 'receipt' parameter is not provided
            $ticket = null;
        }

        return view('verify.eticket.find', ['ticket' => $ticket]);
    }
}
