@extends('layouts.app')
@section('title', 'Party Ticket Order Summary')
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
                        <h2 class="text-lg font-bold text-black">Hi {{ $user->firstname }}!</h2>
                        <p class="flex flex-col text-sm text-gray-500">Find below the summary of your payment.
                        </p>
                    </div>




                    <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                        @csrf
                        <h2 class="text-lg font-bold text-black">Order Summary</h2>
                        <div class="flex flex-col gap-2">
                            {{-- Beginning of Payment Data --}}
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Product Name</p>

                                <p class="text-sm text-gray-500">{{ $transactionReceipt->product_name }}</p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Payment Receipt</p>

                                <p class="text-sm text-gray-500"> {{ $transactionReceipt->receipt }} </p>
                            </div>
                            @if ($transactionReceipt->status == 'success')
                                <div class="flex flex-col justify-between md:flex-row">
                                    <p class="text-sm text-gray-500">Mode of Payment</p>

                                    <p class="text-sm text-gray-500"> {{ $transactionReceipt->mode_of_payment }} </p>
                                </div>
                            @endif
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Payment Status</p>

                                <p
                                    class="{{ $transactionReceipt->status == 'success' ? 'text-green-800' : 'text-red-600' }}  uppercase font-bold text-sm ">
                                    {{ $transactionReceipt->status }} </p>
                            </div>
                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Product Order Date</p>
                                <p class="text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($transactionReceipt->product_order_date)->format('l, F j, Y') }}
                                </p>
                            </div>
                            @for ($i = 0; $i <= 2; $i++)
                                @if (isset($transactionReceipt->product_quantity[$i]) &&
                                        $transactionReceipt->product_quantity[$i] !== 0 &&
                                        $transactionReceipt->product_quantity[$i] !== '')
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
                                            <span>₦ {{ number_format($transactionReceipt->product_price[$i], 2) }}</span>
                                            <span class="text-[0.7rem]">
                                                x {{ $transactionReceipt->product_quantity[$i] }}
                                            </span>
                                        </p>
                                    </div>
                                @endif
                            @endfor

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Ticket Purchase Cost</p>

                                <p class="text-sm text-gray-500">₦
                                    {{ number_format($transactionReceipt->product_total_cost - $transactionReceipt->taxed_fee, 2) }}
                                </p>
                            </div>

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Processing Fee</p>

                                <p class="text-sm text-gray-500">₦ {{ number_format($transactionReceipt->taxed_fee, 2) }}
                                </p>
                            </div>

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Total Price</p>
                                <p class="text-sm text-gray-500">
                                    ₦ {{ number_format($transactionReceipt->product_total_cost, 2) }}
                                </p>
                            </div>

                            <hr>
                            {{-- End of Payment Data --}}

                            {{-- Beginning of Event Data --}}

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Date</p>
                                <p class="text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($transactionReceipt->event_date)->format('l F j, Y') }}
                                </p>
                            </div>

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Time</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($transactionReceipt->event_time)->format('H:iA') }}</p>
                            </div>

                            <div class="flex flex-col justify-between md:flex-row">
                                <p class="text-sm text-gray-500">Event Location</p>
                                <p class="text-sm text-gray-500">{{ $transactionReceipt->event_location }}</p>
                            </div>



                            @if ($transactionReceipt->status == 'success')
                                <div class="flex flex-col justify-between md:flex-row">
                                    <p class="text-sm text-gray-500">Ticket Passcode</p>
                                    <p class="text-sm text-gray-500">{{ $transactionReceipt->ticket_pass_code }}</p>
                                </div>
                            @elseif ($transactionReceipt->status !== 'success')
                                <div class="flex flex-col justify-between md:flex-row">
                                    <p class="text-sm text-gray-500">Ticket Passcode</p>
                                    <p class="w-1/4 text-[60%] text-red-700 md:text-end">We couldn't generate ticket
                                        passcode due to a failure in processing your payment, please contact support to
                                        resolve this issue if you where debited.</p>
                                </div>
                            @endif



                            <div class="flex w-full justify-end">

                                <a href="{{ route('payment.download', [
                                    'id' => $transactionReceipt->id,
                                ]) }}">
                                <button type="submit" class="ld-ext-right rounded-md bg-[#cc2121] px-4 py-2 text-white"
                                    onclick="this.classList.toggle('running')">

                                    View E-Ticket
                                    <div class="ld ld-ring ld-spin"></div>

                                </button>
                                </a>




                            </div>
                        </div>
                    </div>




                </div>



        </section>

    </main>
@endsection
