<?php

use App\Models\Event;
use App\Http\Controllers\Checkout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicLogin;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DynamicRegister;
use App\Http\Controllers\Shortletlisting;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController\HomeController;
use App\Http\Controllers\AdminController\EventController;
use App\Http\Controllers\Transactions\TransactionHistory;
use App\Http\Controllers\Transactions\Payments\PartyTicketPayments;
// use App\Http\Controllers\Transactions\PartyTicketPayments\PartyTicketPaymentController;

// Route::any('/', function () {
//     return redirect()->route('index');
// });

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/', function () {
        return redirect()->route('index');
    });




Route::get('/home' , function () {
    return view('home');
})->name('home');

Route::post('/event/item', [CartController::class, 'storePartyTicket'])->name('event.addtocart');



Route::fallback(function() {
    return view('fallback');
});

Route::get('/shortlet', [Shortletlisting::class, 'index'])->name('shortlet.index');

Route::get('/private-policy', function () {
    return 'Privacy Policy';
})->name('index.privacy-policy');

Route::get('/terms-and-conditions', function () {
    return 'Terms and Conditions';
})->name('index.terms-and-conditions');

Route::post('/login/product/checkout', [DynamicLogin::class, 'store'])->name('modal.checkout.login');

//Dynamic Register Route
Route::post('/register/product/checkout', [DynamicRegister::class, 'store'])
    ->name('modal.checkout.register.store');

//Dynamic Otp Verification Route
Route::get('/register/otp/product/checkout', [DynamicRegister::class, 'registerVerifyOtp'])
    ->name('modal.checkout.register.otp');

Route::post('/register/otp/product/checkout', [DynamicRegister::class, 'registerVerifyOtpStore'])
    ->name('modal.checkout.register.otp.store');

Route::post('/register/resend-otp/product/checkout', [DynamicRegister::class, 'resendOtp'])
    ->name('modal.checkout.register.otp.resend');








Route::get('/welcome', function () {

    $events = Event::latest()->paginate(3);

    if (Auth::check() && Auth::user()->usertype == 'user') {
            return redirect()->route('dashboard')->with(['regsuccess'=> 'Welcome to 900ticket', 'firstname' => Auth::user()->firstname, 'lastname' => Auth::user()->lastname]);
        }

    elseif (Auth::check() && Auth::user()->usertype == 'admin') {

        return redirect()->route('admin.index')->with(['regsuccess'=> 'Welcome to 900ticket', 'firstname' => Auth::user()->firstname, 'lastname' => Auth::user()->lastname]);

    }

    else {
       return view('welcome', ['events' => $events]);
    }
}
    )->name('index');


// User Routes
  Route::post('/product/checkout', [Checkout::class, 'getPartyTicketOrder'])->name('checkout.getOrder');

   Route::delete('/party-ticket-cart/delete/{id}', [CartController::class, 'destroy'])->name('party-ticket.cart.delete');

   Route::delete('/cart/delete', [CartController::class, 'emptyCart'])->name('cart.empty');

    Route::middleware('user')->group(function () {
    Route::get('/product/checkout/{event}', [Checkout::class, 'checkoutPartyTicket'])->name('checkout.index');



    Route::get('/dashboard', function () {
        $events = Event::latest()->paginate(3);
        return view('dashboard', ['events' => $events]);
    })->name('dashboard');

    Route::post('/payment', [PartyTicketPayments::class, 'pay'])->name('payment.pay');

    Route::get('/payment/callback', [PartyTicketPayments::class, 'callback'])->name('payment.callback');

    Route::get('/payment/summary/{id}', [TransactionHistory::class, 'paymentSummary'])->name('payment.summary');

    // Route::get('/download/party-ticket/{id}', [TransactionHistory::class, 'downloadPartyTicket'])->name('payment.download');

    Route::get('/download/party-ticket/{id}', [TransactionHistory::class, 'downloadPartyTicket'])->name('payment.download');

    Route::get('/transactions', [TransactionHistory::class, 'index'])->name('index.transaction');


});

Route::middleware(['admin','web'])->group(function() {

    Route::get('/admin', [HomeController::class, 'dashboard'])->name('admin.index');

    Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.create.event');

    Route::post('/admin/events/create/store', [EventController::class, 'store'])->name('admin.create.store');

    Route::get('/admin/events', [EventController::class, 'view'])->name('admin.events');

    Route::get('/admin/events/edit', [EventController::class, 'editEventList'])->name('admin.events.list.edit');

    Route::get('/admin/events/view/{id}', [EventController::class, 'show'])->name('admin.event.view');

    Route::get('/admin/events/edit/{id}', [EventController::class, 'edit'])->name('admin.events.edit');

    Route::put('/admin/events/update/{id}', [EventController::class, 'update'])->name('admin.events.edit.update');

    Route::get('/admin/manage-users', [HomeController::class, 'userList'])->name('admin.users');

    Route::delete('/admin/events/delete/{id}', [EventController::class, 'destroy'])->name('admin.events.delete');

});



/* Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard'); */



// Route::get('/events/latest', [EventsController::class, 'showEvents'])->name('events.index');

// Route::get('/events/latest', [EventsController::class, 'showEvents'])->name('events.index');

Route::get('/event', function () {
    $latestEvents = Event::latest()->take(18)->paginate(3); // Get the latest 18 posts as a collection
    $featuredEvents = Event::where('category', 'featured')->latest()->paginate(3); // Get featured events with pagination
    $allEvents = Event::paginate(3); // Paginate all events

    return view('pages.events.index', compact('latestEvents', 'featuredEvents', 'allEvents'));

    // dd($latestEvents, $featuredEvents, $allEvents);
})->name('event.index');

Route::get('/event/item/{event}', function (Event $event) {

    if (!$event) {
        return redirect()->back()->with('error', 'Party ticket not found.');
    }
    // dd($event);
    return view('pages.events.metadata', ['event' => $event]);
})->name('event.metadata');

// Route::get('/event', function () {
//     return view('pages\events\');
// })->name('event.index');



// Route::get('/events/view/{id}', [EventsController::class, 'viewEvents'])->name('events.view');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
