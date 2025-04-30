@extends('layouts.app')
@section('title', 'Here is your E-Ticket')
@section('hero')
    <div class="relative top-[0] flex h-[14vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- <img class="h-full w-full object-cover" src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum"> --}}
        {{-- hero content --}}
    </div>
@endsection
@section('content')
    <div class="mx-4 my-10 rounded-lg border bg-red-800 p-2">
        <div class="flex items-center justify-between">
            <img class="w-[80px] shadow shadow-white" src="{{asset('image/logo_alt.svg')}}" alt="900 logo">

            <div class="text-right text-lg font-bold text-white md:text-base">
                <div id="clock" class="text-md font-mono">
                    <span class="block text-[70%] font-thin">Event Time</span>
                    {{ \Carbon\Carbon::parse($transactionData->event_time )->format('H:i A') }}  </div>
                <div id="date" class="text-md font-mono">
                    <span class="block text-[70%] font-thin">Event Date</span>
                    {{ \Carbon\Carbon::parse($transactionData->event_date )->format('F j, Y') }}
                </div>
            </div>
        </div>
        <div class="mt-8 text-lg font-bold capitalize text-white md:text-base">
            <p>
                <span class="block text-[70%] font-thin">Event Title</span>
                {{ $transactionData->product_name }}
             </p>

            <div class="mt-6">
                <h4 class="text-md">address</h4>
                <p class="text-xs">{{ $transactionData->event_location }}</p>
            </div>
        </div>

        <div class="mt-8 flex items-center justify-between text-lg font-bold capitalize text-white md:text-base">
            <div>
                <h4 class="text-md">guest</h4>
                <p class="text-sm">{{ $user->firstname . ' ' . $user->firstname}}</p>
                <br>
                <h4 class="text-md">Registered Email</h4>
                <p class="text-sm lowercase">{{ $user->email}}</p>
            </div>

            <div class="text-right">
                <h4 class="block text-[70%] font-thin">Tickets Paid For</h4>
                <li class="list-none">
                @if (isset($transactionData->product_quantity[0]) && $transactionData->product_quantity[0] !== 0 && $transactionData->product_quantity[0] !== "")
                    <ul>
                        Regular Ticket:  (unit: {{ $transactionData->product_quantity[0]  }})
                    </ul>
                @endif
                @if (isset($transactionData->product_quantity[1]) && $transactionData->product_quantity[1] !== 0 && $transactionData->product_quantity[1] !== "")
                    <ul>
                        VIP Ticket:  (unit: {{ $transactionData->product_quantity[1]  }})
                    </ul>
                @endif
                @if (isset($transactionData->product_quantity[2]) && $transactionData->product_quantity[2] !== 0 && $transactionData->product_quantity[2] !== "")
                    <ul>
                        VVIP Ticket:  (unit: {{ $transactionData->product_quantity[2]  }})
                    </ul>
                @endif

                <input type="text" id="ticket_passcode" value="{{ $transactionData->ticket_pass_code }}" hidden>


            </li>
            </div>
        </div>
        <div id="qrcode" class="mt-10 flex items-center justify-center"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    <script>


        // Get the ticket passcode from the input field
        const ticketPasscode = document.getElementById("ticket_passcode").value;
        const qrText = "https://example.com?ticket_passcode=" + ticketPasscode;

        console.log(qrText);

        const qrcode = new QRCode(document.getElementById("qrcode"), {
          text: qrText,
          width: 128,
          height: 128,
          colorDark : "#000000",
          colorLight : "#fff",
          correctLevel : QRCode.CorrectLevel.H
        });
    </script>
@endsection