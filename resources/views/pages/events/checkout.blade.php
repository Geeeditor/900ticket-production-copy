@extends('layouts.app')
@section('title', 'Checkout')
@section('hero')
    <div class="relative top-[0] flex h-[14vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- <img class="h-full w-full object-cover" src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum"> --}}
        {{-- hero content --}}


    </div>

    {{-- @if (session('success')){

     } @elseif('error') {

     }  --}}


@endsection

@section('content')
    @php
        $title = $event->title;
        $date = $event->date;
        $time = $event->time;
        $location = $event->location;
        $event_reference = $event->event_reference;
        $event_id = $event->id;
        $regular_ticket_price = $event->regular_ticket_price;
        $vip_ticket_price = $event->vip_ticket_price;
        $vvip_ticket_price = $event->vvip_ticket_price;
        $regular_ticket_quantity = $regular_unit;
        $vip_ticket_quantity = $vip_unit;
        $vvip_ticket_quantity = $vvip_unit;
        $tax = 0.05; // 5% tax
        $total_order_value =
            $regular_ticket_price * $regular_ticket_quantity +
            $vip_ticket_price * $vip_ticket_quantity +
            $vvip_ticket_price * $vvip_ticket_quantity;
        $taxed_total_order = $total_order_value * $tax;

        $total_quantity = $regular_ticket_quantity + $vip_ticket_quantity + $vvip_ticket_quantity;
        $total_price = $taxed_total_order + $total_order_value;
    @endphp

    <main>
        <div class="mx-auto my-3 w-[85%] md:w-[80%]">
            <a class="text-black" href="{{ url()->previous() }}">
                <i class="fa-solid fa-arrow-left-long">
                    Back
                </i>
            </a>
        </div>

        <section class="mx-auto w-[85%] md:w-[80%]">
            <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                <div>
                    <h1 class="font-bold uppercase text-black md:text-2xl">Checkout Your order</h1>
                </div>

                <div class="flex flex-col gap-2">

                    @auth
                        <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                            <h2 class="text-lg font-bold text-black">Hi {{ $user->firstname }}!</h2>
                            <p class="flex flex-col text-sm text-gray-500">Below is your order summary
                            </p>
                        </div>
                    @endauth

                    <form method="POST" action="{{ route('payment.pay') }}"   class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                        @csrf
                        <h2 class="text-lg font-bold text-black">Order Summary</h2>
                        <div  class="flex flex-col gap-2">
                            {{-- Hidden Fields --}}
                            <input type="email" name="email" value="{{ $user->email }}" hidden>
                            <input type="number" name="user_id" value="{{ $user->id }}" hidden>
                            <input type="text" name="first_name" value="{{ $user->firstname }}" hidden>
                            <input type="text" name="last_name" value="{{ $user->lastname }}" hidden>

                            <input type="text" name="phone" value="{{ $user->phone }}" hidden>
                            <input type="text" name="product_reference" value="{{ $event_reference }}" hidden>
                            <input type="text" name="product_name" value="{{ $title }}" hidden>
                            {{-- Regular Ticket Order Quote --}}
                            <input type="number" name="product_price[]" value="{{ $regular_ticket_price }}" hidden>
                            <input type="number" name="product_quantity[]" value="{{ $regular_ticket_quantity }}" hidden>
                            {{-- VIP Ticket Order Quote --}}
                            <input type="number" name="product_price[]" value="{{ $vip_ticket_price }}" hidden>
                            <input type="number" name="product_quantity[]" value="{{ $vip_ticket_quantity }}" hidden>
                            {{-- VVIP Ticket Order Quote --}}
                            <input type="number" name="product_price[]" value="{{ $vvip_ticket_price }}" hidden>
                            <input type="number" name="product_quantity[]" value="{{ $vvip_ticket_quantity }}" hidden>
                            {{-- Taxed Total Order --}}
                            <input type="number" name="taxed_order" value="{{ $taxed_total_order }}" hidden>
                            {{--  Order Value --}}
                            <input type="number" name="product_purchase_cost" value="{{ $total_order_value }}" hidden>
                            {{-- Total Quantity --}}
                            <input type="number" name="product_total_quantity" value="{{ $total_quantity }}" hidden>
                            {{-- Total Order Value with Tax --}}
                            <input type="number" name="product_total_cost" value="{{ ($total_price) }}" hidden>
                            {{-- Payment Date --}}
                            <input type="text" name="product_order_date" value="{{ \Carbon\Carbon::now() }}" hidden>

                            <input type="text" name="event_date" value="{{ $event->date }} " hidden>

                            <input type="text" name="event_location" value="{{ $event->location }} " hidden>

                            <input type="text" name="event_time" value="{{ $event->time }} " hidden>










                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Name</p>
                                {{-- <input type="text" name="" value="{{ $event_id }}" hidden> --}}
                                <p class="text-sm text-gray-500">{{ $title }}</p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Date</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($date)->format('l, F j, Y') }}
                                </p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Reference</p>
                                <p class="text-sm text-gray-500">{{ $event_reference }}</p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Time</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($time)->format('H:iA') }}</p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Regular Ticket Price</p>
                                <p class="text-sm text-gray-500">
                                    <span>
                                        ₦{{ number_format($regular_ticket_price) == 0 ? '0' : number_format($regular_ticket_price) }}
                                    </span>
                                    <span class="text-[0.7rem]">

                                        x
                                        {{ $regular_ticket_quantity == 0 ? '0' : $regular_ticket_quantity }}
                                    </span>
                                </p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">VIP Ticket Price</p>
                                <p class="text-sm text-gray-500">
                                    <span>
                                        ₦{{ number_format($vip_ticket_price) == 0 ? '0' : number_format($vip_ticket_price) }}
                                    </span>
                                    <span class="text-[0.7rem]">

                                        x
                                        {{ $vip_ticket_quantity == 0 ? '0' : $vip_ticket_quantity }}
                                    </span>
                                </p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">VVIP Ticket Price</p>
                                <p class="text-sm text-gray-500">
                                    <span>
                                        ₦{{ number_format($vvip_ticket_price) == 0 ? '0' : number_format($vvip_ticket_price) }}
                                    </span>
                                    <span class="text-[0.7rem]">

                                        x
                                        {{ $vvip_ticket_quantity == 0 ? '0' : $vvip_ticket_quantity }}
                                    </span>
                                </p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Fee</p>
                                <p class="text-sm text-gray-500">
                                    <span>
                                        {{ $tax }}%
                                    </span>

                                </p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Total Price</p>
                                <p class="text-sm text-gray-500">
                                    ₦{{ number_format($total_price, 2) }}
                                </p>
                            </div>
                            <div class="flex w-full justify-end">

                                    <button type="submit"
                                        class="ld-ext-right rounded-md bg-[#cc2121] px-4 py-2 text-white"
                                        onclick="this.classList.toggle('running')">

                                        Pay Now
                                        <div class="ld ld-ring ld-spin"></div>

                                    </button>




                            </div>
                        </div>
                    </form>




                </div>



        </section>

    </main>
@endsection
