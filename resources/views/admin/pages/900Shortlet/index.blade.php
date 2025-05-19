@extends('layouts.admin')
@section('title', 'View Created Shortlet Listing')
@section('content')
    <section>
        <div class="event-hero font-[600] md:mb-10">VIEW CREATED PARTY TICKETS</div>

        @if (session()->has('success'))
            <div class="mb-4 rounded bg-green-100 p-2 text-green-700">
                {{ session('success') }}
            </div>
        @endif


        <div class="flex max-w-full flex-wrap">
            @forelse ($events as $event)
                <div class="w-full p-2 md:w-1/2">

                    <div class="flex flex-col rounded-xl bg-white text-gray-700 shadow-md">
                        <div
                            class="bg-blue-gray-500 shadow-blue-gray-500/40 h-40 overflow-hidden rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg">
                            <img class="h-full w-full object-cover"
                                src="{{ asset('./image/events/' . basename($event->hero_image)) }}" alt="lorem ipsum">
                        </div>
                        <div class="p-6">
                            <h5 class="text-blue-gray-900 text-xl font-semibold">
                                {{ $event->title }}
                            </h5>
                            <p class="text-base font-light leading-relaxed">
                                {{ $event->description }}
                            </p>
                        </div>
                        <div class="-mt-4 w-fit p-6 pt-0">

                            <div
                                class="flex divide-x overflow-hidden rounded-lg border bg-white rtl:flex-row-reverse dark:divide-gray-700 dark:border-gray-700 dark:bg-gray-900">
                                <button
                                    class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:px-6 dark:text-gray-300 dark:hover:bg-gray-800">
                                    <a href="{{ route('admin.event.view', $event->id) }}">
                                        <span class="mdi mdi-open-in-new"></span>
                                    </a>

                                </button>

                                <button
                                    class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:px-6 dark:text-gray-300 dark:hover:bg-gray-800">
                                    <a href="{{ route('admin.events.edit', ['id' => $event]) }}">
                                        <span class="mdi mdi-file-edit"></span>

                                    </a>
                                </button>

                                <form
                                    class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:px-6 dark:text-gray-300 dark:hover:bg-gray-800"
                                    action="{{ route('admin.events.delete', ['id' => $event]) }}" method="post">
                                    <button type="submit">

                                        <span class="mdi mdi-delete-empty-outline"></span>
                                        <input class="btn btn-default" type="submit" value="Delete" />
                                        @method('delete')
                                        @csrf

                                        {{-- <a href="{{route('admin.events.delete', ['id'=>$event])}}"> --}}


                                        {{-- </a> --}}
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>




                </div>
            @empty
                <div>
                    <div class="flex flex-col items-center justify-center gap-0">
                        <img src="{{ asset('image/error.svg') }}" alt="lorem ipsum">
                        Sorry no events created
                        <div class="text-[13px] font-[300]">
                            <a href="{{ route('admin.create.event') }}">Create an event</a>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>










    </section>
@endsection
