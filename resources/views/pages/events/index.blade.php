@extends('layouts.app')

@section('title', 'Find Trendy Events')

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

                <img class="hero-bg absolute left-0 top-0 h-[62.5vh] w-full object-cover md:h-[70vh]"
                    src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum">


                {{-- hero content --}}
                <div class="relative top-[22.5vh] z-10 flex w-full flex-col items-center justify-start gap-10">
                    <div class="group relative flex w-[70%] items-center">
                        <svg class="absolute left-4 h-4 w-4 fill-black" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                        <input placeholder="Look up the trendiest event..." type="search"
                            class="line-height[28px] h-10 w-full rounded-lg border-2 border-transparent bg-[#ffffff] pl-10 text-[#04030f] shadow shadow-gray-400 transition duration-300 ease-in-out focus:border-red-200 focus:outline-none" />
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
                            <a class="flex flex-col items-center justify-center" href="javascript:void(0)">
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
                            <a class="flex flex-col items-center justify-center" href="javascript:void(0)">
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
    <main class="mt-[235px]">
        <section class="mx-auto my-3 w-[85%] md:w-[80%]">
            <div>
                <div>
                    <div class="flex justify-between">
                        <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">LATEST Events</h2>

                        <span>

                            {{ $latestEvents->links('vendor.pagination.simple-tailwind') }}
                        </span>
                    </div>

                    {{-- Popular Places Flex --}}
                    <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-3">
                        @forelse ($latestEvents as $latestEvent)
                            <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">



                                <div
                                    class="bg-blue-gray-500 shadow-blue-gray-500/40 h-40 overflow-hidden rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg">
                                    @if ($latestEvent->hero_image !== null && $latestEvent->hero_image !== '')
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('image/events/' . basename($latestEvent->hero_image)) }}"
                                            alt="lorem ipsum">
                                    @else
                                        <img class="h-full w-full object-cover" src="{{ asset('image/imgdefault.png') }}"
                                            alt="lorem ipsum">
                                    @endif

                                </div>
                                <div class="px-2 py-2">
                                    <div class="flex w-full flex-row items-center gap-1">

                                        <div class="w-[80%]">
                                            <h4 class="text-base font-[800]">{{ $latestEvent->title }} </h4>

                                        </div>

                                        <div
                                            class="copy-link flex h-[70%] w-[20%] items-center justify-center rounded-full bg-red-700 p-2">
                                            <a class="copy-link" href="{{ route('event.metadata', $latestEvent->id) }}">

                                                <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                                    alt="lorem ipsum">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="text-sm">
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                            <span>{{ \Carbon\Carbon::parse($latestEvent->date)->format('l, F j, Y') }}</span>
                                        </p>
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                                            <span>{{ \Carbon\Carbon::parse($latestEvent->time)->format('H:i A') }}</span>WAT
                                        </p>
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/location.svg') }}"
                                                alt="lorem ipsum">
                                            <span>{{ $latestEvent->location }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="px-2 py-1">
                                    <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                        <div class="w-[55%]">
                                            <h4 class="text-sm">
                                                Base Ticket Fee
                                            </h4>
                                            <p class="text-base">
                                                <span class="currency">
                                                    ₦
                                                </span>
                                                @if ($latestEvent->regular_ticket_price == null)
                                                    <span>0.00</span>
                                                @else
                                                    <span>{{ number_format($latestEvent->regular_ticket_price, 2) }}

                                                    </span>
                                                @endif
                                            </p>
                                        </div>

                                        <div class="w-[45%] items-center justify-end text-sm md:flex">
                                            <a href="{{ route('event.metadata', $latestEvent->id) }}"
                                                class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                                Get Ticket
                                                <i class="fa-solid fa-arrow-right text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                         @empty
                            <div class="col-span-4 py-5 md:py-10">
                                <div class="flex flex-col items-center justify-center gap-0">
                                    <img src="{{ asset('image/error.svg') }}" alt="lorem ipsum">
                                    <span class="text-1xl py-1 font-bold capitalize md:text-2xl">
                                        Sorry no Party Ticket Available For This Category
                                    </span>
                                    <div class="font-thin">
                                        <span>
                                            Stay tuned..
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforelse



                    </div>

                </div>
            </div>
        </section>

        <section class="mx-auto my-3 w-[85%] md:w-[80%]">
            <div>
                <div>
                    <div class="flex justify-between">
                        <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">All Events</h2>

                        <span>
                            {{ $allEvents->links('vendor.pagination.simple-tailwind') }}
                        </span>
                    </div>

                    {{-- Popular Places Flex --}}
                    <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-3">
                        @forelse ($allEvents as $allEvent)
                            <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                                <div class="w-full">
                                    <div
                                    class="bg-blue-gray-500 shadow-blue-gray-500/40 h-40 overflow-hidden rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg">
                                    @if ($allEvent->hero_image !== null && $allEvent->hero_image !== '')
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('image/events/' . basename($allEvent->hero_image)) }}"
                                            alt="lorem ipsum">
                                    @else
                                        <img class="h-full w-full object-cover" src="{{ asset('image/imgdefault.png') }}"
                                            alt="lorem ipsum">
                                    @endif

                                </div>
                                </div>
                                <div class="px-2 py-2">
                                    <div class="flex w-full flex-row items-center gap-1">

                                        <div class="w-[80%]">
                                            <h4 class="text-base font-[800]">{{ $allEvent->title }} </h4>

                                        </div>

                                        <div
                                            class="flex h-[70%] w-[20%] items-center justify-center rounded-full bg-red-700 p-2">
                                            <a class="copy-link" href="{{ route('event.metadata', $allEvent->id) }}">

                                                <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                                    alt="lorem ipsum">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="text-sm">
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                            <span>{{ \Carbon\Carbon::parse($allEvent->date)->format('l, F j, Y') }}</span>
                                        </p>
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/clock.svg') }}"
                                                alt="lorem ipsum">
                                            <span>{{ \Carbon\Carbon::parse($allEvent->time)->format('H:i A') }}</span>WAT
                                        </p>
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/location.svg') }}"
                                                alt="lorem ipsum">
                                            <span>{{ $allEvent->location }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="px-2 py-1">
                                    <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                        <div class="w-[55%]">
                                            <h4 class="text-sm">
                                                Base Ticket Fee
                                            </h4>
                                            <p class="text-base">
                                                <span class="currency">
                                                    ₦
                                                </span>
                                                @if ($allEvent->regular_ticket_price == null)
                                                    <span>0.00</span>
                                                @else
                                                    <span>{{ number_format($allEvent->regular_ticket_price, 2) }}

                                                    </span>
                                                @endif
                                            </p>
                                        </div>

                                        <div class="w-[45%] items-center justify-end text-sm md:flex">
                                            <a href="{{ route('event.metadata', $allEvent->id) }}"
                                                class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                                Get Ticket
                                                <i class="fa-solid fa-arrow-right text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @empty
                            <div class="col-span-4 py-5 md:py-10">
                                <div class="flex flex-col items-center justify-center gap-0">
                                    <img src="{{ asset('image/error.svg') }}" alt="lorem ipsum">
                                    <span class="text-1xl py-1 font-bold capitalize md:text-2xl">
                                        Sorry no Party Ticket Available For This Category
                                    </span>
                                    <div class="font-thin">
                                        <span>
                                            Stay tuned..
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforelse



                    </div>

                </div>
            </div>
        </section>

        <section class="mx-auto my-3 w-[85%] md:w-[80%]">
            <div>
                <div>
                    <div class="flex justify-between">
                        <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Featured Events</h2>

                        <span>
                            {{ $featuredEvents->links('vendor.pagination.simple-tailwind') }}
                        </span>
                    </div>

                    {{-- Popular Places Flex --}}
                    <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-3">
                        @forelse ($featuredEvents as $featuredEvent)
                            <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                                <div class="w-full">
                                    @if ($featuredEvent->hero_image !== null && $featuredEvent->hero_image !== '')
                                        <img class="h-full rounded-b-md object-cover"
                                            src="{{ asset('image/events/' . basename($featuredEvent->hero_image)) }}"
                                            alt="lorem ipsum">
                                    @else
                                        <img class="h-full rounded-b-md object-contain"
                                            src="{{ asset('image/imgdefault.png') }}" alt="lorem ipsum">
                                    @endif

                                </div>
                                <div class="px-2 py-2">
                                    <div class="flex w-full flex-row items-center gap-1">

                                        <div class="w-[80%]">
                                            <h4 class="text-base font-[800]">{{ $featuredEvent->title }} </h4>

                                        </div>

                                        <div
                                            class="flex h-[70%] w-[20%] items-center justify-center rounded-full bg-red-700 p-2">
                                            <a href="javascript:void(0)">

                                                <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                                    alt="lorem ipsum">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="text-sm">
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                            <span>{{ \Carbon\Carbon::parse($featuredEvent->date)->format('l, F j, Y') }}</span>
                                        </p>
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/clock.svg') }}"
                                                alt="lorem ipsum">
                                            <span>{{ \Carbon\Carbon::parse($featuredEvent->time)->format('H:i A') }}</span>WAT
                                        </p>
                                        <p class="flex items-center gap-1 font-thin">
                                            <img class="w-[15px]" src="{{ asset('image/location.svg') }}"
                                                alt="lorem ipsum">
                                            <span>{{ $featuredEvent->location }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="px-2 py-1">
                                    <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                        <div class="w-[55%]">
                                            <h4 class="text-sm">
                                                Base Ticket Fee
                                            </h4>
                                            <p class="text-base">
                                                <span class="currency">
                                                    ₦
                                                </span>
                                                @if ($featuredEvent->regular_ticket_price == null)
                                                    <span>0.00</span>
                                                @else
                                                    <span>{{ $featuredEvent->regular_ticket_price }}

                                                    </span>
                                                @endif
                                            </p>
                                        </div>

                                        <div class="w-[45%] items-center justify-end text-sm md:flex">
                                            <a href="{{ route('event.metadata', $featuredEvent->id) }}"
                                                class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                                Get Ticket
                                                <i class="fa-solid fa-arrow-right text-white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @empty
                            <div class="col-span-4 py-5 md:py-10">
                                <div class="flex flex-col items-center justify-center gap-0">
                                    <img src="{{ asset('image/error.svg') }}" alt="lorem ipsum">
                                    <span class="text-1xl py-1 font-bold capitalize md:text-2xl">
                                        Sorry no Party Ticket Available For This Category
                                    </span>
                                    <div class="font-thin">
                                        <span>
                                            Stay tuned..
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforelse



                    </div>

                </div>
            </div>
        </section>



        <section class="bg-red-700">
            <div class="py-4 md:py-8">
                <div class="mx-auto max-w-6xl text-center">
                    <h2 class="mb-6 text-3xl font-bold text-white md:text-5xl">Join Our Exclusive Newsletter</h2>
                    <p class="text-sm text-gray-300 md:text-xl">Get your favourite artist ticket sales notifications from
                        the comfort of your inbox. </p>

                    <div
                        class="mt-14 flex flex-col items-center justify-center rounded-lg bg-white p-8 shadow-lg md:flex-row">
                        <input type="email" placeholder="Enter your email"
                            class="w-full border-b-2 border-red-700 bg-transparent px-4 py-3 text-base text-[#2e0249] placeholder-red-700 placeholder-opacity-70 focus:outline-none md:w-96" />
                        <button
                            class="rounded bg-red-700 px-6 py-3 font-medium text-white hover:scale-105 hover:transform hover:bg-red-500 hover:shadow-md focus:outline-none max-md:mt-6 md:ml-4">
                            Join Now!
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
