<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Checkout extends Controller
{
    //


    public function getPartyTicketOrder(Request $request) {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect()->back()->with('warning', 'Oops! You need to create an account or login to complete checkout.');
        } elseif (auth()->user()->usertype === 'admin') {
            return redirect()->back('admin.index')->with('error', 'You are not allowed to access this page.');
        }

        $data = $request->validate([
            'event_reference' => 'required',
            'regular_unit' => 'required|integer',
            'vip_unit' => 'required|integer',
            'vvip_unit' => 'required|integer',
        ]);


            // Clear previous session values
        $request->session()->forget([
            'event_reference',
            'regular_unit',
            'vip_unit',
            'vvip_unit',
        ]);

        $data['event_reference'] = $request->event_reference;
        $data['regular_unit'] = $data['regular_unit'] == 0 ? null : $data['regular_unit'];
        $data['vip_unit'] = $data['vip_unit'] == 0 ? null : $data['vip_unit'];
        $data['vvip_unit'] = $data['vvip_unit'] == 0 ? null : $data['vvip_unit'];

               if(is_null($data['regular_unit']) && is_null($data['vip_unit']) && is_null($data['vvip_unit'])) {
                return redirect()->back()->with('warning', 'You don`t have any ticket selected :)');
            }


        $event = Event::where('event_reference', $data['event_reference'])->first();

        $request->session()->put('event_reference', $data['event_reference']);
        $request->session()->put('regular_unit', $data['regular_unit']);
        $request->session()->put('vip_unit', $data['vip_unit']);
        $request->session()->put('vvip_unit', $data['vvip_unit']);

        return redirect()->route('checkout.index', [
            'event' => $event,
            'event_reference' => $data['event_reference'],
            'regular_unit' => $data['regular_unit'],
            'vip_unit' => $data['vip_unit'],
            'vvip_unit' => $data['vvip_unit'],
        ]);


        // dd($data);

    }

    public function checkoutPartyTicket(Event $event, Request $request)
    {

        $event_reference = $request->session()->get('event_reference');
        $regular_unit = $request->session()->get('regular_unit');
        $vip_unit = $request->session()->get('vip_unit');
        $vvip_unit = $request->session()->get('vvip_unit');


        if (!$event_reference) {
            return redirect()->route('event.index')->with('error', 'We couldn\'t find the event details.');
        }

        $event = Event::where('event_reference', $event_reference)->first();
        $user = auth()->user();


        return view('pages.events.checkout', [
            'user' => $user,
            'event' => $event,
            'event_reference' => $event_reference,
            'regular_unit' => $regular_unit,
            'vip_unit' => $vip_unit,
            'vvip_unit' => $vvip_unit,
        ]);
    }


}
