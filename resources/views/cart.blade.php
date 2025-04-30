@extends('layouts.app')
@section('title', 'Your Cart')
@section('hero')
    <div class="relative top-[0] flex h-[14vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- hero content --}}
    </div>
@endsection

@section('content')
    <section class="bg-white">
        <div class="mx-auto max-w-5xl p-4 max-lg:max-w-2xl">

            <div class="flex flex-col gap-4 md:flex-row">
                <div class="flex w-full flex-col gap-2 md:w-2/3">
                    {{-- Cart Items --}}

                    {{-- Party Ticket Cart --}}
                    @if (!empty($cartItems) && count($cartItems) > 0)
                        <div>
                            <h1 class="text-xl font-semibold text-slate-900">Party Ticket Cart</h1>

                            @if (!empty($cartItems['partyTicketCart']) && count($cartItems['partyTicketCart']) > 0)
                                @foreach ($cartItems['partyTicketCart'] as $ticket)
                                    <div class="flex gap-4 rounded-md border bg-white px-4 py-6 shadow">
                                        @php
                                            $event = \App\Models\Event::where(
                                                'event_reference',
                                                $ticket->event_reference,
                                            )->first();
                                        @endphp
                                        <div
                                            class="flex w-full gap-6 rounded-md bg-white px-1 shadow max-sm:flex-col sm:gap-4">
                                            <div class="hidden md:block md:max-w-[30%]">
                                                <img src="{{ asset('image/events/' . basename($event->hero_image)) }}"
                                                    class="w-full object-contain" />
                                            </div>
                                            <div class="flex w-full flex-col gap-2">
                                                <h2
                                                    class="border-b border-gray-300 text-lg font-[800] uppercase tracking-wide md:text-2xl">
                                                    {{ $event->title }}
                                                </h2>
                                                <div class="flex flex-col gap-1 border-b border-gray-300">
                                                    <p class="flex items-center gap-2 text-sm font-thin">
                                                        <img src="{{ asset('image/date.svg') }}" alt="date">
                                                        <span>{{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }}</span>
                                                    </p>
                                                    <p class="flex items-center gap-2 text-sm font-thin">
                                                        <img src="{{ asset('image/clock.svg') }}" alt="time">
                                                        <span>{{ \Carbon\Carbon::parse($event->time)->format('H:iA') }}
                                                            WAT</span>
                                                    </p>
                                                    <p class="flex items-center gap-2 text-sm font-thin">
                                                        <img src="{{ asset('image/location.svg') }}" alt="location">
                                                        <span class="capitalize">{{ $event->location }}</span>
                                                    </p>
                                                    <div x-data="{ otherPrices: false }">
                                                        <div class="flex justify-between gap-2 pb-1 md:gap-3">
                                                            @if ($ticket->regular_unit !== null)
                                                                <div class="flex items-center gap-2 text-sm font-thin">
                                                                    <img class="w-[20px]"
                                                                        src="{{ asset('image/price-tag.svg') }}"
                                                                        alt="price">
                                                                    <span class="text-[10px] capitalize">N
                                                                        {{ number_format($event->regular_ticket_price, 2) }}
                                                                        x {{ $ticket->regular_unit ?? 0 }}</span>
                                                                    <span class="text-[7px] font-[200]">Regular</span>
                                                                </div>
                                                            @endif
                                                            <i @click="otherPrices = !otherPrices"
                                                                :class='{ "rotate-90": otherPrices }'
                                                                class="fa-solid fa-chevron-down text-black"></i>
                                                        </div>
                                                        <div x-transition x-show="otherPrices"
                                                            class="mt-1 flex flex-col gap-1">
                                                            @if ($ticket->vip_unit !== null)
                                                                <div class="flex items-center gap-2 text-sm font-thin">
                                                                    <img class="w-[20px]"
                                                                        src="{{ asset('image/price-tag.svg') }}"
                                                                        alt="price">
                                                                    <span class="text-[10px] capitalize">N
                                                                        {{ number_format($event->vip_ticket_price, 2) }} x
                                                                        {{ $ticket->vip_unit ?? 0 }}</span>
                                                                    <span class="text-[7px] font-[200]">VIP</span>
                                                                </div>
                                                            @endif
                                                            @if ($ticket->vvip_unit !== null)
                                                                <div class="flex items-center gap-2 text-sm font-thin">
                                                                    <img class="w-[20px]"
                                                                        src="{{ asset('image/price-tag.svg') }}"
                                                                        alt="price">
                                                                    <span class="text-[10px] capitalize">N
                                                                        {{ number_format($event->vvip_ticket_price, 2) }} x
                                                                        {{ $ticket->vvip_unit ?? 0 }}</span>
                                                                    <span class="text-[7px] font-[200]">VVIP</span>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <h2 class="flex items-center gap-2 text-base font-[700] tracking-wide">
                                                        Payment Summary</h2>
                                                    <div class="text-[12.5px] font-thin">
                                                        <p>
                                                            Subtotal:
                                                            @php
                                                                $subTotalPrice =
                                                                    $event->regular_ticket_price *
                                                                        $ticket->regular_unit +
                                                                    $event->vip_ticket_price * $ticket->vip_unit +
                                                                    $event->vvip_ticket_price * $ticket->vvip_unit;
                                                                $fee = $subTotalPrice * $tax;
                                                                $totalPrice = $subTotalPrice + $fee;
                                                            @endphp
                                                            <span class="font-[500]">N
                                                                {{ number_format($subTotalPrice, 2) }}</span>
                                                        </p>
                                                        <p>Fee: <span class="font-[500]">N
                                                                {{ number_format($fee, 2) }}</span></p>
                                                        <p>Total: <span class="font-[500]">N
                                                                {{ number_format($totalPrice, 2) }}</span></p>
                                                    </div>
                                                    <div>
                                                        <form
                                                            class="my-1 block w-full rounded-md bg-red-700 px-2 py-3 text-start capitalize text-white hover:bg-red-800 focus:bg-red-600"
                                                            action="{{ route('checkout.getOrder') }}" method="post">
                                                            @csrf
                                                            <input type="text" name="event_reference"
                                                                value="{{ trim($ticket->event_reference) }}" hidden>
                                                            <input type="text" name="regular_unit"
                                                                value="{{ $ticket->regular_unit ?? 0 }}" hidden>
                                                            <input type="text" name="vip_unit"
                                                                value="{{ $ticket->vip_unit ?? 0 }}" hidden>
                                                            <input type="text" name="vvip_unit"
                                                                value="{{ $ticket->vvip_unit ?? 0 }}" hidden>
                                                            <button type="submit">Pay Now</button>
                                                        </form>
                                                        <form
                                                            class="my-1 block w-full rounded-md bg-red-700 px-2 py-3 text-start capitalize text-white hover:bg-red-800 focus:bg-red-600"
                                                            action="{{ route('party-ticket.cart.delete', $ticket->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button>Delete from Cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>You do not have any party ticket items in your cart</p>
                            @endif
                        </div>
                        {{-- End of Party Ticket Cart --}}

                        {{-- Shortlet Cart --}}
                        <div>
                            <h1 class="text-xl font-semibold text-slate-900">Shortlet Cart</h1>
                            @if (!empty($cartItems['shortletCart']) && count($cartItems['shortletCart']) > 0)
                                @foreach ($cartItems['shortletCart'] as $shortlet)
                                    {{-- Shortlet item rendering here --}}
                                @endforeach
                            @else
                                <p>You do not have any shortlet items in your cart</p>
                            @endif
                        </div>

                        {{-- Flight Booking Cart --}}
                        <div>
                            <h1 class="text-xl font-semibold text-slate-900">Flight Booking Cart</h1>
                            @if (!empty($cartItems['flightBookingCart']) && count($cartItems['flightBookingCart']) > 0)
                                @foreach ($cartItems['flightBookingCart'] as $flight)
                                    {{-- Flight item rendering here --}}
                                @endforeach
                            @else
                                <p>You do not have any flight booking items in your cart</p>
                            @endif
                        </div>

                        {{-- Hotel Booking Cart --}}
                        <div>
                            <h1 class="text-xl font-semibold text-slate-900">Hotel Booking Cart</h1>
                            @if (!empty($cartItems['hotelBookingCart']) && count($cartItems['hotelBookingCart']) > 0)
                                @foreach ($cartItems['hotelBookingCart'] as $hotel)
                                    {{-- Hotel item rendering here --}}
                                @endforeach
                            @else
                                <p>You do not have any hotel booking items in your cart</p>
                            @endif
                        </div>
                    @else
                        <p>You do not have cart items</p>
                    @endif
                </div>

                <div class="mt-4 flex w-full flex-col gap-2 md:w-1/3">
                    <a href="{{ route('index') }}"
                        class="rounded-md border border-gray-700 px-4 py-2 text-center text-sm font-semibold text-black hover:bg-gray-200">
                        Continue Shopping
                    </a>

                    <form
                        class="rounded-md bg-red-700 px-4 py-2 text-center text-sm font-semibold text-white hover:bg-red-800 focus:bg-red-600"
                        action="{{ route('cart.empty') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            Clear All Cart Items
                        </button>
                    </form>


                </div>
            </div>

        </div>
    </section>
@endsection
