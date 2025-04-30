@extends('layouts.app')
@section('title', 'Event Meta Data')

@section('hero')
    <div style="background: url('./image/eventhero.png')"
        class="w-full relative top-[0] bg-black md:h-[20vh] h-[17.5vh]   flex justify-center">
        {{-- hero content --}}
    </div>
@endsection

@section('content')
    <main x-data="{checkoutModal: false}" >
        <div class=" my-3  w-[85%] md:w-[80%] mx-auto">
            <a class="text-black" href="javascript:void(0)">
                <i class="fa-solid fa-arrow-left-long ">
                    Back
                </i>
            </a>
        </div>

        <section class="my-3 w-[85%] md:w-[80%] mx-auto">
            <div class="flex gap-2 md:gap-3 md:flex-row flex-col ">
                <div class="w-full md:w-1/3 ">
                    <div class="flex flex-col gap-1 ">
                        <div class="relative h-fit rounded-md">
                            <img class="object-cover h-full" src="{{ asset('image/imgdefault.png') }}" alt="lorem ipsum">
                            <a href="javascript:void(0)"
                                class="absolute bg-red-700  hover:bg-red-800  focus:bg-red-600 w-[50px] flex justify-center shadow-sm shadow-gray-600 items-center rounded-full px-1 py-3 bottom-0 right-1 ">
                                <img class="h-[15px] object-contain" src="{{ asset('image/icons/clipboard.svg') }}"
                                    alt="lorem ipsum">
                            </a>
                        </div>
                        <button
                            class="w-full bg-red-700 rounded-md hover:bg-red-800 text-white focus:bg-red-600 text-center py-3 capitalize hidden md:block" @click="checkoutModal = true">Add
                            to cart</button>
                    </div>
                </div>

                <div class="w-full md:w-2/3 bg-white rounded-md p-2  shadow shadow-gray-300">
                    <div class="flex gap-2 flex-col">
                        <h2 class="tracking-wide font-[800] text-lg md:text-2xl border-b border-gray-300 uppercase">900Ticket Grand
                            Reveal</h2>

                        <div class="flex flex-col gap-1 border-b border-gray-300 py-2">
                            <p class="flex gap-2 text-sm font-thin items-center">
                                <img src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                <span>December 06 2024</span>
                            </p>
                            <p class="flex gap-2 text-sm font-thin items-center">
                                <img src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                                <span>00:00 (WAT)</span>
                            </p>
                            <p class="flex gap-2 text-sm font-thin items-center">
                                <img src="{{ asset('image/location.svg') }}" alt="lorem ipsum">
                                <span class="capitalize">36 o2 arena street, Ikeja, lagos state.</span>
                            </p>
                            <p class="flex gap-2 text-sm font-thin items-center">
                                <img class="w-[20px]" src="{{ asset('image/price-tag.svg') }}" alt="lorem ipsum">
                                <span class="capitalize">N 0.00</span> <span class="text-[7px] font-[200]">Regular</span>
                            </p>
                            <p class="flex gap-2 text-sm font-thin items-center">
                                <img src="{{ asset('image/map-pin.svg') }}" alt="lorem ipsum">
                                <a href="javascript:void(0)" class="capitalize">http://localhost:8000/home</a>
                            </p>
                        </div>
                        <div class="">
                            <h2 class="tracking-wide font-[700] text-base flex gap-2 items-center">Event Description
                            </h2>
                            <p class="text-sm font-thin my-1">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quas temporibus explicabo
                                quisquam fugiat minus ut accusamus voluptates, consequuntur blanditiis aut veniam asperiores
                                eos!
                            </p>
                            <button @click="checkoutModal = true"
                                class="w-full bg-red-700 rounded-md hover:bg-red-800 text-white focus:bg-red-600 text-center py-3 capitalize block md:hidden my-1">Add
                                to cart</button>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <section x-transition:enter="transition-transform duration-300 ease-out"
    x-transition:enter-start="transform translate-y-full"
    x-transition:enter-end="transform translate-y-0"
    x-transition:leave="transition-transform duration-300 ease-in"
    x-transition:leave-start="transform translate-y-0"
    x-transition:leave-end="transform translate-y-full"
    x-show="checkoutModal"  @click.outside ="checkoutModal = false"  class="  top-0 z-[999] w-full h-full flex justify-center fixed overflow-y-auto md:overflow-y-hidden py-5">
            <div class="mx-auto md:w-[100%] w-full  md:mt-[132px] relative">
                <form class="bg-white rounded-md shadow-md px-[1rem] py-4 md:px-8" action="">
                <div class="my-4 w-full">
                    <h3 class="font-[700] text-[20px] md:text-left text-center md:text-[25px]"
                        style="text-transform: uppercase  !important">Reserve your ticket now</h3>
                </div>

                {{-- reservation-container --}}
                <div class="flex gap-2 md:gap-4 md:flex-row flex-col">
                    {{-- reservation input section --}}
                    <div class="w-full md:w-1/2 flex flex-col gap-1 md:gap-4">
                        {{-- reservation-row --}}
                        <div class="flex border rounded-lg bg-gray-100 border-gray-200  items-center">
                            <h3 class="text-[#1F242F] font-[700] text-base md:text-2xl w-1/3 md:w-2/3 py-2 px-4">
                                REGULAR
                            </h3>

                            {{-- reservation price input --}}
                            <div
                                class="md:w-1/3 w-2/3 bg-white md:py-2 md:px-4 py-2 px-3 flex justify-center flex-col items-end">
                                <label for="quantity-input"
                                    class="block mb-0 md:mb-2 text-base md:text-lg font-medium text-gray-900 font-mono">
                                    <span>N</span> <span>0.00</span>
                                </label>

                                <div class="relative flex items-center max-w-[8rem] h-[45px] md:h-[50px]">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="quantity-input"
                                        class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg  p-2 md:p-3   h-full focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>

                                    <input type="text" id="quantity-input" data-input-counter
                                        aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border-x-0 border-gray-300  text-center text-gray-900 text-sm h-full focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5"
                                        placeholder="999" required />

                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="quantity-input"
                                        class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-2 md:p-3 h-full  focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>

                            </div>

                        </div>
                        {{-- reservation-row --}}
                        <div class="flex border rounded-lg bg-gray-100 border-gray-200  items-center">
                            <h3 class="text-[#1F242F] font-[700] text-base md:text-2xl w-1/3 md:w-2/3 py-2 px-4">
                                VIP
                            </h3>

                            {{-- reservation price input --}}
                            <div
                                class="md:w-1/3 w-2/3 bg-white md:py-2 md:px-4 py-2 px-3 flex justify-center flex-col items-end">
                                <label for="quantity-input"
                                    class="block mb-0 md:mb-2 text-base md:text-lg font-medium text-gray-900 font-mono">
                                    <span>N</span> <span>0.00</span>
                                </label>

                                <div class="relative flex items-center max-w-[8rem] h-[45px] md:h-[50px]">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="quantity-input"
                                        class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg  p-2 md:p-3   h-full focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>

                                    <input type="text" id="quantity-input" data-input-counter
                                        aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border-x-0 border-gray-300  text-center text-gray-900 text-sm h-full focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5"
                                        placeholder="999" required />

                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="quantity-input"
                                        class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-2 md:p-3 h-full  focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>

                            </div>

                        </div>
                        {{-- reservation-row --}}
                        <div class="flex border rounded-lg bg-gray-100 border-gray-200  items-center">
                            <h3 class="text-[#1F242F] font-[700] text-base md:text-2xl w-1/3 md:w-2/3 py-2 px-4">
                                VVIP
                            </h3>

                            {{-- reservation price input --}}
                            <div
                                class="md:w-1/3 w-2/3 bg-white md:py-2 md:px-4 py-2 px-3 flex justify-center flex-col items-end">
                                <label for="quantity-input"
                                    class="block mb-0 md:mb-2 text-base md:text-lg font-medium text-gray-900 font-mono">
                                    <span>N</span> <span>0.00</span>
                                </label>

                                <div class="relative flex items-center max-w-[8rem] h-[45px] md:h-[50px]">
                                    <button type="button" id="decrement-button"
                                        data-input-counter-decrement="quantity-input"
                                        class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg  p-2 md:p-3   h-full focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>

                                    <input type="text" id="quantity-input" data-input-counter
                                        aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border-x-0 border-gray-300  text-center text-gray-900 text-sm h-full focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5"
                                        placeholder="999" required />

                                    <button type="button" id="increment-button"
                                        data-input-counter-increment="quantity-input"
                                        class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-2 md:p-3 h-full  focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>

                            </div>

                        </div>


                    </div>

                    {{-- reservaton order summar div --}}
                    <div class="w-full md:w-1/2">
                        {{-- reservation order row  --}}
                        <div class="flex flex-col gap-1 md:gap-4">
                            <div class="flex flex-col justify-between">
                                <div class="flex flex-col items-start w-full">
                                    {{-- manifest --}}
                                    <div class="flex items-center gap-2 justify-between w-full">
                                        <div class="flex gap-2 items-center w-2/3">
                                            <h3 class="font-[700]">Regular</h3>
                                            <small class="text-[5px]">
                                                unit:
                                                <span class="text-[10px]">
                                                    1x
                                                </span>
                                            </small>
                                        </div>
                                        <div clqss="w-1/3 text-right">
                                            <h5 class="font-[700]">0.00</h5>
                                        </div>
                                    </div>
                                    {{-- manifest --}}
                                    <div class="flex items-center gap-2 justify-between w-full">
                                        <div class="flex gap-2 items-center w-2/3">
                                            <h3 class="font-[700]">VIP</h3>
                                            <small class="text-[5px]">
                                                unit:
                                                <span class="text-[10px]">
                                                    1x
                                                </span>
                                            </small>
                                        </div>
                                        <div clqss="w-1/3 text-right">
                                            <h5 class="font-[700]">0.00</h5>
                                        </div>
                                    </div>
                                    {{-- manifest --}}
                                    <div class="flex items-center gap-2 justify-between w-full">
                                        <div class="flex gap-2 items-center w-2/3">
                                            <h3 class="font-[700]">VVIP</h3>
                                            <small class="text-[5px]">
                                                unit:
                                                <span class="text-[10px]">
                                                    1x
                                                </span>
                                            </small>
                                        </div>
                                        <div clqss="w-1/3 text-right">
                                            <h5 class="font-[700]">0.00</h5>
                                        </div>
                                    </div>


                                </div>
                                <div class="w-full text-right">
                                    <small class="text-[60%] font-[300] ">NGN</small>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="flex flex-col items-start w-2/3">
                                    <h3 class="font-[700]">Subtotal</h3>
                                </div>
                                <div class="w-1/3 text-right">
                                    <h5 class="font-[700]">0.00</h5>
                                    <small class="text-[60%] font-[300] ">NGN</small>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="flex flex-col items-start w-2/3">
                                    <h3 class="font-[700]">Fees</h3>
                                </div>
                                <div class="w-1/3 text-right">
                                    <h5 class="font-[700]">0.00</h5>
                                    <small class="text-[60%] font-[300] ">NGN</small>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="flex flex-col items-start w-2/3">
                                    <h3 class="font-[700]">Total Price</h3>
                                </div>
                                <div class="w-1/3 text-right">
                                    <h5 class="font-[700]">0.00</h5>
                                    <small class="text-[60%] font-[300] ">NGN</small>
                                </div>
                            </div>




                        </div>
                        <a href="javascript:void(0)" @click="checkoutModal = false" class="text-[#1F242F] font-[700] text-[20px]  flex gap-1 items-center absolute top-0 -mt-2 md:-mt-5 hover:border-gray-500 right-0 border-t border-gray-400  bg-white rounded-full cursor-pointer px-3 py-4 ">

                            <i  class="fa-solid fa-xmark text-lg text-red-700"></i>

                        </a>
                        {{-- reservation button --}}
                        <div class="flex justify-between">

                            <button class="bg-[#cc2121] text-white px-4 py-2 rounded-md">

                                Check Out
                            </button>
                        </div>

                    </div>
                </div>
            </form>
            </div>

        </section>
    </main>
@endsection
