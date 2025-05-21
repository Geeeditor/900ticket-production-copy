@extends('layouts.admin')
@section('title', 'View Created Shortlet Listing')
@section('content')
    <section>
        <div class="event-hero font-[600] md:mb-10">
            VIEW CREATED SHORTLET LISTINGS
        </div>

        @if (session()->has('success'))
            <div class="mb-4 rounded bg-green-100 p-2 text-green-700">
                {{ session('success') }}
            </div>
        @endif


        <div class="flex max-w-full flex-wrap">
            @forelse ($shortlet as $shortlet)
            <div class="mt-2 w-full gap-2 rounded-md border border-black bg-white shadow shadow-gray-500 md:w-1/2">
                @php
                    $image = json_decode($shortlet->images); // This returns the array
                    $firstImage = $image[0]; // Select the first item
                @endphp

                <div>
                    {{-- {{dd($firstImage)}} --}}
                    <div class="mb-2 h-[140px] w-full rounded-md">
                    <img class="h-full w-full object-cover" src="{{ $image !== [] ? asset('image/shortlet/' . $firstImage) : asset('image/Rectangle 92.png')}}"
                        alt="random pic"></div>

                    <div
                        class="mt-[-4px] p-2">

                        <div class="mb-1 flex items-center justify-between">
                            <p>{{$shortlet->apartment_title}}</p>
                            <span class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                    viewBox="0 0 16 15" fill="none">
                                    <path
                                        d="M14.7995 2.05609C14.3616 1.56795 13.8117 1.17538 13.1893 0.906634C12.5669 0.637892 11.8875 0.499676 11.2002 0.501943C10.0241 0.469135 8.87908 0.852853 8.00074 1.57415C7.1224 0.852853 5.9774 0.469135 4.80133 0.501943C4.11397 0.499676 3.43462 0.637892 2.81223 0.906634C2.18983 1.17538 1.63987 1.56795 1.20198 2.05609C0.439723 2.90796 -0.357732 4.45031 0.170972 6.96391C1.01482 10.9779 7.34246 14.2719 7.60961 14.4067C7.7287 14.4679 7.86279 14.5 7.99914 14.5C8.13549 14.5 8.26958 14.4679 8.38867 14.4067C8.65742 14.2689 14.9851 10.9749 15.8273 6.96391C16.3592 4.45031 15.5618 2.90796 14.7995 2.05609ZM14.2604 6.68389C13.6637 9.52173 9.3269 12.1613 8.00074 12.9115C6.13228 11.8725 2.28819 9.26381 1.74508 6.68389C1.33476 4.73402 1.89626 3.60139 2.44016 2.99417C2.72779 2.67444 3.08866 2.41731 3.49689 2.24123C3.90512 2.06516 4.35058 1.9745 4.80133 1.97576C5.28275 1.9425 5.76532 2.02474 6.20198 2.21445C6.63863 2.40417 7.01448 2.6949 7.29287 3.05829C7.36152 3.17467 7.46279 3.27196 7.58614 3.34002C7.70948 3.40808 7.85038 3.44442 7.99415 3.44524C8.13792 3.44607 8.27929 3.41136 8.40355 3.34473C8.52781 3.27809 8.63039 3.18198 8.70061 3.06639C8.97847 2.70017 9.35511 2.40699 9.79343 2.21574C10.2317 2.02449 10.7166 1.94178 11.2002 1.97576C11.6518 1.97374 12.0984 2.06403 12.5077 2.24013C12.9169 2.41623 13.2787 2.67376 13.5669 2.99417C14.1092 3.60139 14.6707 4.73402 14.2604 6.68389Z"
                                        fill="#DB0101" />
                                </svg>
                                <small>735</small>
                            </span>
                        </div>

                        <p class="mb-1 mt-[-5px] text-sm">{{$shortlet->address}}</p>

                        <span class="mb-1 flex items-center gap-2 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13"
                                viewBox="0 0 12 13" fill="none">
                                <path
                                    d="M6 5.65217C5.40666 5.65217 4.82664 5.48643 4.33329 5.17589C3.83994 4.86536 3.45542 4.42398 3.22836 3.90758C3.0013 3.39118 2.94189 2.82295 3.05764 2.27475C3.1734 1.72654 3.45912 1.22298 3.87868 0.827743C4.29824 0.432508 4.83279 0.163349 5.41473 0.0543037C5.99667 -0.0547414 6.59987 0.0012245 7.14805 0.215124C7.69623 0.429024 8.16477 0.791251 8.49441 1.256C8.82405 1.72075 9 2.26714 9 2.82609C9 3.57561 8.68393 4.29444 8.12132 4.82443C7.55871 5.35443 6.79565 5.65217 6 5.65217ZM6 1.13044C5.64399 1.13044 5.29598 1.22988 4.99997 1.4162C4.70397 1.60253 4.47325 1.86735 4.33702 2.17719C4.20078 2.48703 4.16513 2.82797 4.23459 3.15689C4.30404 3.48582 4.47547 3.78795 4.72721 4.02509C4.97894 4.26224 5.29967 4.42373 5.64884 4.48916C5.998 4.55459 6.35992 4.52101 6.68883 4.39267C7.01774 4.26433 7.29886 4.04699 7.49665 3.76814C7.69443 3.48929 7.8 3.16146 7.8 2.82609C7.8 2.37637 7.61036 1.94508 7.27279 1.62708C6.93523 1.30908 6.47739 1.13044 6 1.13044Z"
                                    fill="black" />
                                <path
                                    d="M11.4 13H0.6C0.44087 13 0.288258 12.9404 0.175736 12.8345C0.0632141 12.7285 0 12.5847 0 12.4348V10.7391C0 9.53989 0.505713 8.38977 1.40589 7.54178C2.30606 6.69379 3.52696 6.21739 4.8 6.21739H7.2C8.47304 6.21739 9.69394 6.69379 10.5941 7.54178C11.4943 8.38977 12 9.53989 12 10.7391V12.4348C12 12.5847 11.9368 12.7285 11.8243 12.8345C11.7117 12.9404 11.5591 13 11.4 13ZM1.2 11.8696H10.8V10.7391C10.8 9.8397 10.4207 8.97711 9.74559 8.34112C9.07045 7.70512 8.15478 7.34783 7.2 7.34783H4.8C3.84522 7.34783 2.92955 7.70512 2.25442 8.34112C1.57928 8.97711 1.2 9.8397 1.2 10.7391V11.8696Z"
                                    fill="black" />
                            </svg>
                            <p class="text-xs">{{$shortlet->max_guest}} guests - {{$shortlet->bedrooms}} bedrooms </p>
                        </span>

                        <div class="mb-1 flex items-center justify-between">
                            <span class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <path d="M14 4L8 10L5.5 7.5" stroke="black" stroke-width="2"
                                        stroke-miterlimit="10" />
                                    <path
                                        d="M13.35 6.75C13.45 7.15 13.5 7.55 13.5 8C13.5 11.05 11.05 13.5 8 13.5C4.95 13.5 2.5 11.05 2.5 8C2.5 4.95 4.95 2.5 8 2.5C9.5 2.5 10.85 3.1 11.8 4.05L12.5 3.35C11.35 2.2 9.75 1.5 8 1.5C4.4 1.5 1.5 4.4 1.5 8C1.5 11.6 4.4 14.5 8 14.5C11.6 14.5 14.5 11.6 14.5 8C14.5 7.3 14.4 6.6 14.15 5.95L13.35 6.75Z"
                                        fill="black" />
                                </svg>
                                <p class="text-xs">Wifi, 24/7 power, Netflix, 24/7 security</p>
                            </span>
                            <p class="text-xs text-gray-400"><small class="text-sm text-green-500">₦
                                {{ number_format($shortlet->apartment_price, 2)}}</small> per night</p>
                        </div>

                    </div>

                    <div class="w-fit pb-1">

                        <div
                            class="flex divide-x overflow-hidden rounded-lg border bg-white rtl:flex-row-reverse dark:divide-gray-700 dark:border-gray-700 dark:bg-gray-900">
                            <button
                                class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:px-6 dark:text-gray-300 dark:hover:bg-gray-800">
                                <a href="">
                                    <span class="mdi mdi-open-in-new"></span>
                                </a>

                            </button>

                            <button
                                class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:px-6 dark:text-gray-300 dark:hover:bg-gray-800">
                                <a href="{{ route('admin.shortlet.edit', ['id' => $shortlet]) }}">
                                    <span class="mdi mdi-file-edit"></span>

                                </a>
                            </button>

                            <form
                                class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 hover:bg-gray-100 sm:px-6 dark:text-gray-300 dark:hover:bg-gray-800"
                                action="{{ route('admin.shortlet.delete', ['id' => $shortlet]) }}" method="post">
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
                        Sorry no shortlet listing created
                        <div class="text-[13px] font-[300]">
                            <a href="{{ route('admin.create.event') }}">Create an event</a>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>










    </section>
@endsection
