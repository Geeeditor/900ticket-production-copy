@extends('layouts.admin')
@section('title', 'Create a Party Ticket')

@section('content')

    <form method="post" action="{{ route('admin.create.store') }}" class="mx-auto flex max-w-4xl flex-col gap-4 p-5 font-sans"
        enctype="multipart/form-data">
        @csrf
        <div class="text-2xl font-bold text-center mb-5">
            CREATE A PARTY TICKET
        </div>

        @if (session()->has('success'))
            <div class="p-2 bg-green-100 text-green-700 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative">
                <input type="text" placeholder="Add Party Ticket Title" name="title"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('title') }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/title.svg') }}" alt="title icon">
                <span class="text-xs text-gray-500">Add a catchy title for your event (required)</span>
                @error('title')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="date" name="date"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('date') }}" />
                <span class="text-xs text-gray-500">What day is this event scheduled for? (required)</span>
                @error('date')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="text" placeholder="Add Event Venue " name="location"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('location') }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/location.svg') }}" alt="location icon">
                <span class="text-xs text-gray-500">Where is this event holding? (required)</span>
                
                @error('location')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="time" name="time"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('time') }}" />
                <span class="text-xs text-gray-500">What time does this event start? (required)</span>
                @error('time')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative">
                <textarea placeholder="Add Event Description" name="description"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500">{{ old('description') }}</textarea>
                <span class="text-xs text-gray-500">Provide Detailed Event Description Include details about the event, such as activities and features. (required)</span>
                @error('description')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="url" placeholder="Provide Map Link" name="map_link"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('map_link') }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/map-pin.svg') }}" alt="map icon">
                <span class="text-xs text-gray-500">Provide a link to the event's location on the map (required)</span>
                @error('map_link')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative">
                <input type="number" placeholder="Regular Ticket Price" name="regular_ticket_price" min="0"
                    step="0.01"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('regular_ticket_price') }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/price.svg') }}" alt="price icon">
                <span>
                    <span class="text-xs text-gray-500">Regular Ticket Price</span>
                    <span class="text-xs text-gray-500"> (required)</span>
                </span>
                @error('regular_ticket_price')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="number" placeholder="VIP Ticket Price" name="vip_ticket_price" min="0" step="0.01"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('vip_ticket_price') !== null ? old('vip_ticket_price') : 0 }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/price.svg') }}" alt="price icon">
                <span>
                    <span class="text-xs text-gray-500">VIP Ticket Price</span>
                    <span class="text-xs text-gray-500"> (optional)</span>
                </span>
                @error('vip_ticket_price')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="number" placeholder="VVIP Ticket Price" name="vvip_ticket_price" min="0" step="0.01"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('vvip_ticket_price') !== null ? old('vvip_ticket_price') : 0 }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/price.svg') }}" alt="price icon">
                <span>
                    <span class="text-xs text-gray-500">VVIP Ticket Price</span>
                    <span class="text-xs text-gray-500"> (optional)</span>
                </span>
                @error('vvip_ticket_price')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input
                    class="border-input flex w-full rounded-md border border-blue-300 bg-white text-sm text-gray-400 file:border-0 file:bg-red-800 file:text-sm file:font-medium file:text-white"
                    name="hero_image" type="file" id="picture" />
                <span class="text-xs text-gray-500">Upload Party Ticket Flier</span>
                @error('hero_image')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="relative">
            <input id="passcode_input" type="text" placeholder="Ticket Passcode" name="ticket_passcode"
                class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                value="{{ old('ticket_passcode') }}" readonly />
            <img class="absolute right-3 top-3 w-4" src="{{ asset('image/location.svg') }}" alt="passcode icon">
            <span>
                <span class="text-xs text-gray-500">Use the generate button to get a ticket passcode</span>
                <span class="text-xs text-gray-500"> (required)</span>
            </span>
            @error('ticket_passcode')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex flex-col items-center justify-center gap-4 md:flex-row">
            <button type="button" id="generate-passcode"
                class=" w-full md:w-1/2 rounded border border-white bg-blue-600 px-6 py-2.5 text-sm text-white transition hover:bg-blue-500">Generate
                Ticket Passcode</button>

            <button type="submit"
                class=" w-full md:w-1/2 rounded border border-white bg-red-600 px-6 py-2.5 text-sm text-white transition hover:bg-red-500">Create
                Party Ticket</button>
        </div>
    </form>

    <script>
        var ticketPasscode = document.getElementById("passcode_input");
        var generateButton = document.getElementById("generate-passcode");

        generateButton.addEventListener("click", function() {
            var generatedPasscode = generatePasscode();
            ticketPasscode.value = generatedPasscode;
        });

        function generatePasscode() {
            var length = 8,
                charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
                retVal = "";
            for (var i = 0, n = charset.length; i < length; ++i) {
                retVal += charset.charAt(Math.floor(Math.random() * n));
            }
            return retVal;
        }
    </script>
@endsection
