@extends('layouts.admin')
@section('title', 'Update Event')
@section('content')
 <form action="{{ route('admin.events.edit.update', ['id' => $event->id]) }}" class="mx-auto flex max-w-4xl flex-col gap-4 p-5 font-sans" enctype="multipart/form-data" method="post">
    @csrf
    @method('PUT')

    <div class="text-2xl font-bold text-center mb-5">UPDATE PARTY TICKET</div>

    @if (session('error') && session('error')->any())
        <div class="p-2 bg-red-100 text-red-700 rounded mb-4">{{ session('error') }}</div>
    @endif

    @if (session()->has('success'))
        <div class="p-2 bg-green-100 text-green-700 rounded mb-4">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="relative">
            <input type="text" placeholder="Add Event Title" name="title" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="{{ $event->title }}" />
            <img class="absolute right-3 top-3 w-4" src="{{ asset('image/title.svg') }}" alt="title icon">
            @error('title')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
            <span class="text-xs text-gray-500 mt-1">Provide the title of the event.</span>
        </div>

        <div class="relative">
            <input type="date" name="date" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="{{ $event->date }}" />
            <span class="text-xs text-gray-500">Pick Event Date</span>
            @error('date')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
            <span class="text-xs text-gray-500 mt-1">Select the date of the event.</span>
        </div>

        <div class="relative">
            <input type="text" placeholder="Add Detailed Event Venue Address" name="location" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="{{ $event->location }}" />
            <img class="absolute right-3 top-3 w-4" src="{{ asset('image/location.svg') }}" alt="location icon">
            @error('location')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
            <span class="text-xs text-gray-500 mt-1">Provide the full address of the venue.</span>
        </div>

        <div class="relative">
            <input type="time" name="time" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="{{ $event->time }}" />
            <span class="text-xs text-gray-500">Pick Event Time</span>
            @error('time')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
            <span class="text-xs text-gray-500 mt-1">Specify the time the event starts.</span>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div class="relative">
            <textarea placeholder="Event Description" name="description" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500">{{ trim($event->description) }}</textarea>
            <span class="text-xs text-gray-500">Provide Detailed Event Description</span>
            @error('description')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
            <span class="text-xs text-gray-500 mt-1">Include details about the event, such as activities and features.</span>
        </div>

        <div class="flex flex-col gap-4">
            

            <div class="relative">
            <input type="url" placeholder="Provide Map Link" name="map_link" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="{{ $event->map_link }}" />
            <img class="absolute right-3 top-3 w-4" src="{{ asset('image/map-pin.svg') }}" alt="map icon">
            @error('map_link')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
            <span class="text-xs text-gray-500 mt-1">Provide a link to the event's location on the map.</span>
        </div>

           
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <div>
            <div class="relative">
                <input type="number" placeholder="Enter Regular Ticket Price" name="regular_ticket_price" min="0" step="0.01" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="{{ $event->regular_ticket_price }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/price.svg') }}" alt="price icon">
                @error('regular_ticket_price')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
                <span class="text-xs text-gray-500 mt-1">Specify the price for regular tickets.</span>
            </div>

            <div class="relative">
                <input type="number" placeholder="Enter VIP Ticket Price" name="vip_ticket_price" min="0" step="0.01" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="{{ $event->vip_ticket_price }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/price.svg') }}" alt="price icon">
                @error('vip_ticket_price')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
                <span class="text-xs text-gray-500 mt-1">Specify the price for VIP tickets.</span>
            </div>
            
            <div class="relative">
                    <input type="number" placeholder="Enter VVIP Ticket Price" name="vvip_ticket_price" min="0" step="0.01" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="{{ $event->vvip_ticket_price }}" />
                    <img class="absolute right-3 top-3 w-4" src="{{ asset('image/price.svg') }}" alt="price icon">
                    @error('vvip_ticket_price')
                        <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                    @enderror
                    <span class="text-xs text-gray-500 mt-1">Specify the price for VVIP tickets.</span>
            </div>
        </div>

        <div class="relative">
            <div class="flex justify-start mb-2 h-32 md:h-64 w-full">
                <img class="object-contain h-full" src="{{ asset('./image/events/' . basename($event->hero_image)) }}" alt="Event Flier">
            </div>
            <input type="file" name="hero_image" class="w-full rounded-md border border-blue-300 bg-white text-sm text-gray-400 transition focus:border-red-500 focus:ring-red-500" accept="image/*" />
            @error('hero_image')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
            <span class="text-xs text-gray-500 mt-1">Upload Party Ticket Flier</span>
        </div>
    </div>

    <button type="submit" class="mt-4 w-full rounded border border-white bg-red-600 px-6 py-2.5 text-sm text-white transition hover:bg-red-500">
        Update Party Ticket
    </button>
</form>
@endsection
