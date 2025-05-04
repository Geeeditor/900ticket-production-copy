@extends('layouts.app')
@section('title', 'Verify Your E-ticket Validity')
@section('hero')
    <div class="relative w-full">
        {{-- hero content --}}

        <div>


            <div class="relative">
                {{-- hero bg --}}
                {{-- <video autoplay muted loop
                            >
                            <source src="{{ asset('image/video.webm') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video> --}}

                <img class="hero-bg absolute left-0 top-0 h-[62.5vh] w-full object-cover md:h-[80vh]"
                    src="{{ asset('image/shortlet.webp') }}" alt="lorem ipsum">




                {{-- hero content --}}
                <div class="relative top-[20vh] z-10 flex w-full flex-col items-center justify-start gap-10 md:top-[30.5vh]">



                    <h2 style="text-shadow: 1px -1px 4px rgba(0,0,0,0.6);" class="text-2xl font-[800] text-white shadow">
                        Find and Verify E-Ticket
                    </h2>

                    <div  class="relative flex w-[70%] items-center rounded-md bg-white">
                     <form method="POST" action="{{ route('validate.e-ticket.result') }}" class="flex w-full justify-between">
                            @csrf
                            <div class="flex w-4/5 items-center gap-2 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M13.1533 13.1255L17 17M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
                                    stroke="#757575" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <input style="outline: none" type="text" class="link-drop w-full p-1" name='transactionRef' placeholder="Provide Ticket Purchase Receipt...">

                            </div>

                            <button type="submit" class="ld-ext-right rounded-md bg-[#cc2121] px-4 py-2 text-white"
                                    onclick="this.classList.toggle('running')">

                                    Search
                                    <div class="ld ld-ring ld-spin"></div>

                                </button>




                        </form>

                        <div
                            class="show-link-drop absolute top-[120%] z-50 hidden w-full rounded-md border-2 bg-white p-2 text-lg capitalize">
                            <p class="mb-2">
                                <a href="#" class="link-click">all</a>
                            </p>
                            <p class="mb-2">
                                <a href="#" class="link-click">lekki phase 1</a>
                            </p>
                            <p class="mb-2">
                                <a href="#" class="link-click">ikoyi</a>
                            </p>
                            <p class="mb-2">
                                <a href="#" class="link-click">ikeja</a>
                            </p>
                            <p class="mb-2">
                                <a href="#" class="link-click">badagry</a>
                            </p>
                            <p class="mb-2">
                                <a href="#" class="link-click">mile 2</a>
                            </p>
                            <p class="mb-2">
                                <a href="#" class="link-click">ammour odofin</a>
                            </p>
                            <p class="mb-2">
                                <a href="#" class="link-click">ajai</a>
                            </p>
                        </div>
                    </div>


                    <div class="mx-auto flex w-[70%] flex-wrap justify-center gap-[1.5rem] md:gap-[2rem]">
                        <div
                            class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-7 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                            <a class="flex flex-col items-center justify-center" href="javascript:void(0)">
                                <img class="w-[35px]" src="{{ asset('image/icons/flight-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Flight
                                </span>
                            </a>
                        </div>
                        <div
                            class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-7 py-5 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                            <a class="flex flex-col items-center justify-center" href="javascript:void(0)">
                                <img class="w-[35px]" src="{{ asset('image/icons/hotel-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Hotel
                                </span>
                            </a>
                        </div>
                        <div
                            class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-6 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                            <a class="flex flex-col items-center justify-center" href="{{ route('event.index') }}">
                                <img class="w-[35px]" src="{{ asset('image/icons/ticket-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Party
                                </span>
                                <span class="inline-block text-center text-sm font-[700]">
                                    Ticket
                                </span>
                            </a>
                        </div>
                        <div
                            class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-5 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                            <a class="flex flex-col items-center justify-center" href="{{ route('shortlet.index') }}">
                                <img class="w-[35px]" src="{{ asset('image/icons/shortlet-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Shortlet
                                </span>
                            </a>
                        </div>

                    </div>





                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
 <section class="mt-[235px] text-center">
    @php
        $ticketData = $ticket ?? null;
    @endphp
    @if (!$ticketData)
    @else
        {{-- {{ dd($ticketData) }} --}}
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
                    <h1 class="font-bold uppercase text-black md:text-2xl">Party Ticket Payment Receipt</h1>
                </div>

                <div class="flex flex-col gap-2">


                    <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">

                        {{-- <p class="flex flex-col text-sm text-gray-500">
                        </p> --}}
                    </div>




                    <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                        @csrf
                        <h2 class="text-lg font-bold text-black">Order Summary</h2>
                        <div class="flex flex-col gap-2">
                            {{-- Beginning of Payment Data --}}
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Product Name</p>

                                <p class="text-sm text-gray-500">{{ $ticketData->product_name }}</p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Payment Receipt</p>

                                <p class="text-sm text-gray-500"> {{ $ticketData->receipt }} </p>
                            </div>
                            @if ($ticketData->status == 'success')
                                <div class="flex flex-col justify-between md:flex-row">
                                    <p class="text-sm text-gray-500">Mode of Payment</p>

                                    <p class="text-sm text-gray-500"> {{ $ticketData->mode_of_payment }} </p>
                                </div>
                            @endif
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Payment Status</p>

                                <p
                                    class="{{ $ticketData->status == 'success' ? 'text-green-800' : 'text-red-600' }}  uppercase font-bold text-sm ">
                                    {{ $ticketData->status }} </p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Product Order Date</p>
                                <p class="text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($ticketData->product_order_date)->format('l, F j, Y') }}
                                </p>
                            </div>
                            @for ($i = 0; $i <= 2; $i++)
                                @if (isset($ticketData->product_quantity[$i]) &&
                                        $ticketData->product_quantity[$i] !== 0 &&
                                        $ticketData->product_quantity[$i] !== '')
                                    <div class="flex flex-col justify-between md:flex-row">
                                        <p class="text-sm text-gray-500">
                                            @if ($i === 0)
                                                Regular Ticket Price
                                            @elseif ($i === 1)
                                                VIP Ticket Price
                                            @elseif ($i === 2)
                                                VVIP Ticket Price
                                            @endif
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            <span>₦ {{ number_format($ticketData->product_price[$i], 2) }}</span>
                                            <span class="text-[0.7rem]">
                                                x {{ $ticketData->product_quantity[$i] }}
                                            </span>
                                        </p>
                                    </div>
                                @endif
                            @endfor

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Ticket Purchase Cost</p>

                                <p class="text-sm text-gray-500">₦
                                    {{ number_format($ticketData->product_total_cost - $ticketData->taxed_fee, 2) }}
                                </p>
                            </div>

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Processing Fee</p>

                                <p class="text-sm text-gray-500">₦ {{ number_format($ticketData->taxed_fee, 2) }}
                                </p>
                            </div>

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Total Price</p>
                                <p class="text-sm text-gray-500">
                                    ₦ {{ number_format($ticketData->product_total_cost, 2) }}
                                </p>
                            </div>

                            <hr>
                            {{-- End of Payment Data --}}

                            {{-- Beginning of Event Data --}}

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Date</p>
                                <p class="text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($ticketData->event_date)->format('l F j, Y') }}
                                </p>
                            </div>

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Time</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($ticketData->event_time)->format('H:iA') }}</p>
                            </div>

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Location</p>
                                <p class="text-sm text-gray-500">{{ $ticketData->event_location }}</p>
                            </div>



                            @if ($ticketData->status == 'success')
                                <div class="flex flex-col justify-between md:flex-row">
                                    <p class="text-sm text-green-500">Ticket Status</p>
                                    <p class="text-sm text-green-700 md:w-[25%] md:text-right">Ticket Valid</p>
                                </div>
                            @elseif ($ticketData->status !== 'success')
                                <div class="flex flex-col justify-between md:flex-row">
                                    <p class="text-sm text-gray-500">Ticket Status</p>
                                    <p class="text-red-700 md:w-[25%] md:text-right">Ticket Invalid</p>
                                </div>
                            @endif




                        </div>
                    </div>




                </div>



        </section>

    </main>
    @endif

 </section>
@endsection