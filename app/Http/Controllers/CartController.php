<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\PartyTicketCart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect()->back()->with('warning', 'Oops! You need to create an account or login to continue.');
        } elseif (auth()->user()->usertype === 'admin') {
            return redirect()->back('admin.index')->with('error', 'You are not allowed to access this page.');
        }

    $user = Auth::user();
    $tax = 0.02; // 5% tax

    // Retrieve the user's cart with related items
    $carts = $user->cart()
        ->with('partyTicketCart', 'shortletCart', 'flightBookingCart', 'hotelBookingCart')
        ->get();

    $cartItems = [];

    if ($carts->isNotEmpty()) {
        foreach ($carts as $cartItem) {
            // Access each cart type and store them in the array
            $cartItems['partyTicketCart'] = $cartItem->partyTicketCart;
            $cartItems['shortletCart'] = $cartItem->shortletCart;
            $cartItems['flightBookingCart'] = $cartItem->flightBookingCart;
            $cartItems['hotelBookingCart'] = $cartItem->hotelBookingCart;


        }
    }

    return view('cart', compact('cartItems', 'tax'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePartyTicket(Request $request, Cart $cart) {
        if (!Auth::check()) {
            return redirect()->back()->with('warning', 'Oops! You need to create an account to continue.');
            } elseif (Auth::user()->usertype === 'user') {
            $data = $request->validate([
                'event_reference' => ['required', 'max:225'],
                'regular_unit' => ['required', 'integer', 'max:224'],
                'vip_unit' => ['required', 'integer', 'max:224'],
                'vvip_unit' => ['required', 'integer', 'max:224'],
            ]);

            $data['regular_unit'] = $data['regular_unit'] == 0 ? null : $data['regular_unit'];
            $data['vip_unit'] = $data['vip_unit'] == 0 ? null : $data['vip_unit'];
            $data['vvip_unit'] = $data['vvip_unit'] == 0 ? null : $data['vvip_unit'];

            $user = Auth::user();
            $cart = $user->cart;

            if (!$cart) {
                $cart = new Cart();
                $user->cart()->save($cart);
            }

            if(is_null($data['regular_unit']) && is_null($data['vip_unit']) && is_null($data['vvip_unit'])) {
                return redirect()->back()->with('warning', 'You must have atleast one of the ticket variation.');
            }


            $partyTicketCart = new PartyTicketCart([
                'event_reference' => $data['event_reference'],
                'regular_unit' => $data['regular_unit'],
                'vip_unit' => $data['vip_unit'],
                'vvip_unit' => $data['vvip_unit'],
                'expired_at' => Carbon::now()->addMinute(120)
            ]);

            $cart->partyTicketCart()->save($partyTicketCart);

            return redirect()->back()->with('success', 'Nice! You successfully added this ticket to your cart, remember to check out to secure your space.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart, $id)
    {
         if (Auth::user()) {
            $event = PartyTicketCart::findOrFail($id);
            $event->delete();
            return redirect()->back()->with('success', 'Cart deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Oops! You do not have permission to delete events');
        }
    }

    public function emptyCart(Cart $cart, Request $request)
    {
        $user = Auth::user();
        $cart = $user->cart;

        if ($cart) {
            $cart->partyTicketCart()->delete();
            return redirect()->back()->with('success', 'Cart emptied successfully');
        } else {
            return redirect()->back()->with('error', 'No cart found to empty');
        }
    }
}
