@extends('layouts.admin')
@section('title', '')
@section('content')
    <section>
        <div class="flex md:gap-3">
            <div class="w-full md:w-[30%]">
                <div class="max-h-[250px] w-full">
                    <img class="max-h-[250px] object-contain" src="{{ asset('image/events/' . basename($event->hero_image)) }}" alt="lorem ipsum">
                </div>

                <div class="flex flex-col gap-1 py-4">


                    <p class="flex gap-2 text-[14px]">
                        <img src="{{ asset('image/date.svg') }}" alt="lorem ipsum"> {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}
                    </p>
                    <p class="flex gap-2 text-[14px]">
                        <img src="{{ asset('image/clock.svg') }}" alt="lorem ipsum"> 12:20
                    </p>
                    <p class="flex gap-2 text-[14px]">
                        <img src="{{ asset('image/map-pin.svg') }}" alt="lorem ipsum"> {{$event->location}}
                    </p>
                    <a class="flex gap-2 text-[14px]" href="{{ $event->map_link }}">
                        <img src="{{ asset('image/link.svg') }}" alt="lorem ipsum">
                        {{ $event->map_link }}
                    </a>
                </div>
            </div>

            <div class="w-full md:w-[70%]">
                <h1 class="mb-2 text-[23px] font-[700] uppercase">
                    {{$event->title}}
                </h1>
                <p>
                    {!! nl2br(e($event->description)) !!}
                </p>
                <div class="mt-4 flex w-full flex-wrap gap-2">
                    <span class="w-[30%] rounded bg-[#f0f1f2] px-4 py-2 text-center font-[600] text-black">
                        Category: {{$event->category}}
                    </span>
                    <span class="w-[30%] rounded bg-[#f0f1f2] px-4 py-2 text-center font-[600] text-black">
                        Regular Ticket Price : {{$event->regular_ticket_price}}
                    </span>
                    <span class="w-[30%] rounded bg-[#f0f1f2] px-4 py-2 text-center font-[600] text-black">
                        VIP Ticket Price  : {{$event->vip_ticket_price}}
                    </span>
                    <span class="w-[30%] rounded bg-[#f0f1f2] px-4 py-2 text-center font-[600] text-black">
                        VVIP Ticket Price : {{$event->vvip_ticket_price}}
                    </span>

                </div>
            </div>
        </div>
    </section>
@endsection
