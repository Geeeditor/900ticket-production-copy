<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    Schema::defaultStringLength(191);

    View::composer('layouts.app', function ($view) {
        $user = Auth::user();
        $totalItemsCount = 0;
        $firstname = '';
        $lastname = '';

        if ($user) {
            $cart = $user->cart()->with('partyTicketCart', 'shortletCart', 'flightBookingCart', 'hotelBookingCart')->first();
            $firstname = $user->firstname;
            $lastname = $user->lastname;

            if ($cart) {
                $totalItemsCount = $cart->partyTicketCart->count() +
                                   $cart->shortletCart->count() +
                                   $cart->flightBookingCart->count() +
                                   $cart->hotelBookingCart->count();
            }
        }

        $view->with([
            'totalItemsCount' => $totalItemsCount,
            'firstname' => $firstname,
            'lastname' => $lastname,
        ]);
    });
}
}
