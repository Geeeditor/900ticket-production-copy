@extends('layouts.app')
@section('title', 'Shortlet')
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




                    <div class="relative flex w-[70%] items-center rounded-md bg-white">
                        <div>
                            <div class="flex items-center gap-2 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M13.1533 13.1255L17 17M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
                                    stroke="#757575" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <input type="text" class="link-drop w-full p-1" placeholder="Find apartments by area">
                            </div>




                        </div>

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
    <div  class="mt-[20vh] md:mt-[50vh]">
        <!-- break -->
        <main class="mx-3">
            <!-- desktop search section -->


            <section class="mx-4 mt-[3rem] text-center capitalize lg:mx-[5rem] lg:mt-[2.5rem]">
                <blockquote class="text-md mt-3.5 text-center lg:text-3xl">
                    Affordable Short let apartment and home rentals in lagos with 1,000+ combined five-star ratings on
                    Airbnb Lagos and Google reviews
                </blockquote>
            </section>



            <!-- shortlet review section -->
            <section class="bg-white lg:mx-[5rem] lg:mt-[2.5rem]">
                <h1 class="mt-2 py-1 text-center text-lg font-bold capitalize lg:text-3xl">our clients Reviews</h1>

                <div class="relative mt-2 rounded-lg p-1 shadow-lg">
                    <!-- ADDED SWIPER HERE === -->
                    <div id="review-swiper " class="swiper">
                        <div class="swiper-wrapper min-h-[25vh]">
                            <div class="swiper-slide my-auto text-center">
                               Review 1
                            </div>
                            <div class="swiper-slide my-auto text-center">Review 2</div>
                            <div class="swiper-slide my-auto text-center">Review 3</div>
                        </div>

                        <svg class="swiper-button-prev size-6 rounded-full bg-black text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <svg class="swiper-button-next size-6 rounded-full bg-black text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>

                </div>
            </section>

            <!-- shortlet special offer section -->

            <section class="mx-[0.5rem] mt-10 lg:mx-[5rem]">
                <h1 class="text-center text-lg font-bold capitalize lg:text-2xl">Offers just for you</h1>
                <p class="mb-2 text-center lg:text-xl">Enjoy the perfect stay home away from home</p>

                <!-- ADDED SWIPER HERE -->
                <div id="special-offer-swiper" class="swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="relative gap-4 lg:grid lg:grid-cols-3">
                                <div class="mt-2 w-full rounded-md border border-black bg-white shadow shadow-gray-500">

                                    <div>
                                        <div class="mb-2 h-[140px] w-full rounded-md">
                                        <img class="h-full w-full object-cover" src="{{asset('image/Rectangle 92.png')}}"
                                            alt="random pic"></div>

                                        <div
                                            class="mt-[-4px] p-2">

                                            <div class="mb-1 flex items-center justify-between">
                                                <p>Cappilo Lounge</p>
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

                                            <p class="mb-1 mt-[-5px] text-sm">Lekki gate, Lagos</p>

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
                                                <p class="text-xs">6 guests - 3 bedrooms - 3 beds</p>
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
                                                        200k</small> per night</p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                {{-- <div class="hidden lg:block">
                                    <div class="mt-2 w-full shadow-lg">

                                        <div class="relative">
                                            <img class="mb-2 h-[140px] w-full rounded-md"
                                                src="../../image/Rectangle 92.png" alt="random pic">

                                            <div
                                                class="mt-[-4px] rounded-md border-b-2 border-l-2 border-r-2 border-gray-400 p-2">

                                                <div class="mb-1 flex items-center justify-between">
                                                    <p>Cappilo Lounge</p>
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="15" viewBox="0 0 16 15" fill="none">
                                                            <path
                                                                d="M14.7995 2.05609C14.3616 1.56795 13.8117 1.17538 13.1893 0.906634C12.5669 0.637892 11.8875 0.499676 11.2002 0.501943C10.0241 0.469135 8.87908 0.852853 8.00074 1.57415C7.1224 0.852853 5.9774 0.469135 4.80133 0.501943C4.11397 0.499676 3.43462 0.637892 2.81223 0.906634C2.18983 1.17538 1.63987 1.56795 1.20198 2.05609C0.439723 2.90796 -0.357732 4.45031 0.170972 6.96391C1.01482 10.9779 7.34246 14.2719 7.60961 14.4067C7.7287 14.4679 7.86279 14.5 7.99914 14.5C8.13549 14.5 8.26958 14.4679 8.38867 14.4067C8.65742 14.2689 14.9851 10.9749 15.8273 6.96391C16.3592 4.45031 15.5618 2.90796 14.7995 2.05609ZM14.2604 6.68389C13.6637 9.52173 9.3269 12.1613 8.00074 12.9115C6.13228 11.8725 2.28819 9.26381 1.74508 6.68389C1.33476 4.73402 1.89626 3.60139 2.44016 2.99417C2.72779 2.67444 3.08866 2.41731 3.49689 2.24123C3.90512 2.06516 4.35058 1.9745 4.80133 1.97576C5.28275 1.9425 5.76532 2.02474 6.20198 2.21445C6.63863 2.40417 7.01448 2.6949 7.29287 3.05829C7.36152 3.17467 7.46279 3.27196 7.58614 3.34002C7.70948 3.40808 7.85038 3.44442 7.99415 3.44524C8.13792 3.44607 8.27929 3.41136 8.40355 3.34473C8.52781 3.27809 8.63039 3.18198 8.70061 3.06639C8.97847 2.70017 9.35511 2.40699 9.79343 2.21574C10.2317 2.02449 10.7166 1.94178 11.2002 1.97576C11.6518 1.97374 12.0984 2.06403 12.5077 2.24013C12.9169 2.41623 13.2787 2.67376 13.5669 2.99417C14.1092 3.60139 14.6707 4.73402 14.2604 6.68389Z"
                                                                fill="#DB0101" />
                                                        </svg>
                                                        <small>735</small>
                                                    </span>
                                                </div>

                                                <p class="mb-1 mt-[-5px] text-sm">Lekki gate, Lagos</p>

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
                                                    <p class="text-xs">6 guests - 3 bedrooms - 3 beds</p>
                                                </span>

                                                <div class="mb-1 flex items-center justify-between">
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M14 4L8 10L5.5 7.5" stroke="black" stroke-width="2"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M13.35 6.75C13.45 7.15 13.5 7.55 13.5 8C13.5 11.05 11.05 13.5 8 13.5C4.95 13.5 2.5 11.05 2.5 8C2.5 4.95 4.95 2.5 8 2.5C9.5 2.5 10.85 3.1 11.8 4.05L12.5 3.35C11.35 2.2 9.75 1.5 8 1.5C4.4 1.5 1.5 4.4 1.5 8C1.5 11.6 4.4 14.5 8 14.5C11.6 14.5 14.5 11.6 14.5 8C14.5 7.3 14.4 6.6 14.15 5.95L13.35 6.75Z"
                                                                fill="black" />
                                                        </svg>
                                                        <p class="text-xs">Wifi, 24/7 power, Netflix, 24/7 security</p>
                                                    </span>
                                                    <p class="text-xs text-gray-400"><small
                                                            class="text-sm text-green-500">₦ 200k</small> per night</p>
                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="hidden lg:block">
                                    <div class="mt-2 w-full shadow-lg">

                                        <div class="relative">
                                            <img class="mb-2 h-[140px] w-full rounded-md"
                                                src="../../image/Rectangle 92.png" alt="random pic">

                                            <div
                                                class="mt-[-4px] rounded-md border-b-2 border-l-2 border-r-2 border-gray-400 p-2">

                                                <div class="mb-1 flex items-center justify-between">
                                                    <p>Cappilo Lounge</p>
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="15" viewBox="0 0 16 15" fill="none">
                                                            <path
                                                                d="M14.7995 2.05609C14.3616 1.56795 13.8117 1.17538 13.1893 0.906634C12.5669 0.637892 11.8875 0.499676 11.2002 0.501943C10.0241 0.469135 8.87908 0.852853 8.00074 1.57415C7.1224 0.852853 5.9774 0.469135 4.80133 0.501943C4.11397 0.499676 3.43462 0.637892 2.81223 0.906634C2.18983 1.17538 1.63987 1.56795 1.20198 2.05609C0.439723 2.90796 -0.357732 4.45031 0.170972 6.96391C1.01482 10.9779 7.34246 14.2719 7.60961 14.4067C7.7287 14.4679 7.86279 14.5 7.99914 14.5C8.13549 14.5 8.26958 14.4679 8.38867 14.4067C8.65742 14.2689 14.9851 10.9749 15.8273 6.96391C16.3592 4.45031 15.5618 2.90796 14.7995 2.05609ZM14.2604 6.68389C13.6637 9.52173 9.3269 12.1613 8.00074 12.9115C6.13228 11.8725 2.28819 9.26381 1.74508 6.68389C1.33476 4.73402 1.89626 3.60139 2.44016 2.99417C2.72779 2.67444 3.08866 2.41731 3.49689 2.24123C3.90512 2.06516 4.35058 1.9745 4.80133 1.97576C5.28275 1.9425 5.76532 2.02474 6.20198 2.21445C6.63863 2.40417 7.01448 2.6949 7.29287 3.05829C7.36152 3.17467 7.46279 3.27196 7.58614 3.34002C7.70948 3.40808 7.85038 3.44442 7.99415 3.44524C8.13792 3.44607 8.27929 3.41136 8.40355 3.34473C8.52781 3.27809 8.63039 3.18198 8.70061 3.06639C8.97847 2.70017 9.35511 2.40699 9.79343 2.21574C10.2317 2.02449 10.7166 1.94178 11.2002 1.97576C11.6518 1.97374 12.0984 2.06403 12.5077 2.24013C12.9169 2.41623 13.2787 2.67376 13.5669 2.99417C14.1092 3.60139 14.6707 4.73402 14.2604 6.68389Z"
                                                                fill="#DB0101" />
                                                        </svg>
                                                        <small>735</small>
                                                    </span>
                                                </div>

                                                <p class="mb-1 mt-[-5px] text-sm">Lekki gate, Lagos</p>

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
                                                    <p class="text-xs">6 guests - 3 bedrooms - 3 beds</p>
                                                </span>

                                                <div class="mb-1 flex items-center justify-between">
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M14 4L8 10L5.5 7.5" stroke="black" stroke-width="2"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M13.35 6.75C13.45 7.15 13.5 7.55 13.5 8C13.5 11.05 11.05 13.5 8 13.5C4.95 13.5 2.5 11.05 2.5 8C2.5 4.95 4.95 2.5 8 2.5C9.5 2.5 10.85 3.1 11.8 4.05L12.5 3.35C11.35 2.2 9.75 1.5 8 1.5C4.4 1.5 1.5 4.4 1.5 8C1.5 11.6 4.4 14.5 8 14.5C11.6 14.5 14.5 11.6 14.5 8C14.5 7.3 14.4 6.6 14.15 5.95L13.35 6.75Z"
                                                                fill="black" />
                                                        </svg>
                                                        <p class="text-xs">Wifi, 24/7 power, Netflix, 24/7 security</p>
                                                    </span>
                                                    <p class="text-xs text-gray-400"><small
                                                            class="text-sm text-green-500">₦ 200k</small> per night</p>
                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="hidden lg:block">
                                    <div class="mt-2 w-full shadow-lg">

                                        <div class="relative">
                                            <img class="mb-2 h-[140px] w-full rounded-md"
                                                src="../../image/Rectangle 92.png" alt="random pic">

                                            <div
                                                class="mt-[-4px] rounded-md border-b-2 border-l-2 border-r-2 border-gray-400 p-2">

                                                <div class="mb-1 flex items-center justify-between">
                                                    <p>Cappilo Lounge</p>
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="15" viewBox="0 0 16 15" fill="none">
                                                            <path
                                                                d="M14.7995 2.05609C14.3616 1.56795 13.8117 1.17538 13.1893 0.906634C12.5669 0.637892 11.8875 0.499676 11.2002 0.501943C10.0241 0.469135 8.87908 0.852853 8.00074 1.57415C7.1224 0.852853 5.9774 0.469135 4.80133 0.501943C4.11397 0.499676 3.43462 0.637892 2.81223 0.906634C2.18983 1.17538 1.63987 1.56795 1.20198 2.05609C0.439723 2.90796 -0.357732 4.45031 0.170972 6.96391C1.01482 10.9779 7.34246 14.2719 7.60961 14.4067C7.7287 14.4679 7.86279 14.5 7.99914 14.5C8.13549 14.5 8.26958 14.4679 8.38867 14.4067C8.65742 14.2689 14.9851 10.9749 15.8273 6.96391C16.3592 4.45031 15.5618 2.90796 14.7995 2.05609ZM14.2604 6.68389C13.6637 9.52173 9.3269 12.1613 8.00074 12.9115C6.13228 11.8725 2.28819 9.26381 1.74508 6.68389C1.33476 4.73402 1.89626 3.60139 2.44016 2.99417C2.72779 2.67444 3.08866 2.41731 3.49689 2.24123C3.90512 2.06516 4.35058 1.9745 4.80133 1.97576C5.28275 1.9425 5.76532 2.02474 6.20198 2.21445C6.63863 2.40417 7.01448 2.6949 7.29287 3.05829C7.36152 3.17467 7.46279 3.27196 7.58614 3.34002C7.70948 3.40808 7.85038 3.44442 7.99415 3.44524C8.13792 3.44607 8.27929 3.41136 8.40355 3.34473C8.52781 3.27809 8.63039 3.18198 8.70061 3.06639C8.97847 2.70017 9.35511 2.40699 9.79343 2.21574C10.2317 2.02449 10.7166 1.94178 11.2002 1.97576C11.6518 1.97374 12.0984 2.06403 12.5077 2.24013C12.9169 2.41623 13.2787 2.67376 13.5669 2.99417C14.1092 3.60139 14.6707 4.73402 14.2604 6.68389Z"
                                                                fill="#DB0101" />
                                                        </svg>
                                                        <small>735</small>
                                                    </span>
                                                </div>

                                                <p class="mb-1 mt-[-5px] text-sm">Lekki gate, Lagos</p>

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
                                                    <p class="text-xs">6 guests - 3 bedrooms - 3 beds</p>
                                                </span>

                                                <div class="mb-1 flex items-center justify-between">
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M14 4L8 10L5.5 7.5" stroke="black" stroke-width="2"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M13.35 6.75C13.45 7.15 13.5 7.55 13.5 8C13.5 11.05 11.05 13.5 8 13.5C4.95 13.5 2.5 11.05 2.5 8C2.5 4.95 4.95 2.5 8 2.5C9.5 2.5 10.85 3.1 11.8 4.05L12.5 3.35C11.35 2.2 9.75 1.5 8 1.5C4.4 1.5 1.5 4.4 1.5 8C1.5 11.6 4.4 14.5 8 14.5C11.6 14.5 14.5 11.6 14.5 8C14.5 7.3 14.4 6.6 14.15 5.95L13.35 6.75Z"
                                                                fill="black" />
                                                        </svg>
                                                        <p class="text-xs">Wifi, 24/7 power, Netflix, 24/7 security</p>
                                                    </span>
                                                    <p class="text-xs text-gray-400"><small
                                                            class="text-sm text-green-500">₦ 200k</small> per night</p>
                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="hidden lg:block">
                                    <div class="mt-2 w-full shadow-lg">

                                        <div class="relative">
                                            <img class="mb-2 h-[140px] w-full rounded-md"
                                                src="../../image/Rectangle 92.png" alt="random pic">

                                            <div
                                                class="mt-[-4px] rounded-md border-b-2 border-l-2 border-r-2 border-gray-400 p-2">

                                                <div class="mb-1 flex items-center justify-between">
                                                    <p>Cappilo Lounge</p>
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="15" viewBox="0 0 16 15" fill="none">
                                                            <path
                                                                d="M14.7995 2.05609C14.3616 1.56795 13.8117 1.17538 13.1893 0.906634C12.5669 0.637892 11.8875 0.499676 11.2002 0.501943C10.0241 0.469135 8.87908 0.852853 8.00074 1.57415C7.1224 0.852853 5.9774 0.469135 4.80133 0.501943C4.11397 0.499676 3.43462 0.637892 2.81223 0.906634C2.18983 1.17538 1.63987 1.56795 1.20198 2.05609C0.439723 2.90796 -0.357732 4.45031 0.170972 6.96391C1.01482 10.9779 7.34246 14.2719 7.60961 14.4067C7.7287 14.4679 7.86279 14.5 7.99914 14.5C8.13549 14.5 8.26958 14.4679 8.38867 14.4067C8.65742 14.2689 14.9851 10.9749 15.8273 6.96391C16.3592 4.45031 15.5618 2.90796 14.7995 2.05609ZM14.2604 6.68389C13.6637 9.52173 9.3269 12.1613 8.00074 12.9115C6.13228 11.8725 2.28819 9.26381 1.74508 6.68389C1.33476 4.73402 1.89626 3.60139 2.44016 2.99417C2.72779 2.67444 3.08866 2.41731 3.49689 2.24123C3.90512 2.06516 4.35058 1.9745 4.80133 1.97576C5.28275 1.9425 5.76532 2.02474 6.20198 2.21445C6.63863 2.40417 7.01448 2.6949 7.29287 3.05829C7.36152 3.17467 7.46279 3.27196 7.58614 3.34002C7.70948 3.40808 7.85038 3.44442 7.99415 3.44524C8.13792 3.44607 8.27929 3.41136 8.40355 3.34473C8.52781 3.27809 8.63039 3.18198 8.70061 3.06639C8.97847 2.70017 9.35511 2.40699 9.79343 2.21574C10.2317 2.02449 10.7166 1.94178 11.2002 1.97576C11.6518 1.97374 12.0984 2.06403 12.5077 2.24013C12.9169 2.41623 13.2787 2.67376 13.5669 2.99417C14.1092 3.60139 14.6707 4.73402 14.2604 6.68389Z"
                                                                fill="#DB0101" />
                                                        </svg>
                                                        <small>735</small>
                                                    </span>
                                                </div>

                                                <p class="mb-1 mt-[-5px] text-sm">Lekki gate, Lagos</p>

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
                                                    <p class="text-xs">6 guests - 3 bedrooms - 3 beds</p>
                                                </span>

                                                <div class="mb-1 flex items-center justify-between">
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M14 4L8 10L5.5 7.5" stroke="black" stroke-width="2"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M13.35 6.75C13.45 7.15 13.5 7.55 13.5 8C13.5 11.05 11.05 13.5 8 13.5C4.95 13.5 2.5 11.05 2.5 8C2.5 4.95 4.95 2.5 8 2.5C9.5 2.5 10.85 3.1 11.8 4.05L12.5 3.35C11.35 2.2 9.75 1.5 8 1.5C4.4 1.5 1.5 4.4 1.5 8C1.5 11.6 4.4 14.5 8 14.5C11.6 14.5 14.5 11.6 14.5 8C14.5 7.3 14.4 6.6 14.15 5.95L13.35 6.75Z"
                                                                fill="black" />
                                                        </svg>
                                                        <p class="text-xs">Wifi, 24/7 power, Netflix, 24/7 security</p>
                                                    </span>
                                                    <p class="text-xs text-gray-400"><small
                                                            class="text-sm text-green-500">₦ 200k</small> per night</p>
                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="hidden lg:block">
                                    <div class="mt-2 w-full shadow-lg">

                                        <div class="relative">
                                            <img class="mb-2 h-[140px] w-full rounded-md"
                                                src="../../image/Rectangle 92.png" alt="random pic">

                                            <div
                                                class="mt-[-4px] rounded-md border-b-2 border-l-2 border-r-2 border-gray-400 p-2">

                                                <div class="mb-1 flex items-center justify-between">
                                                    <p>Cappilo Lounge</p>
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="15" viewBox="0 0 16 15" fill="none">
                                                            <path
                                                                d="M14.7995 2.05609C14.3616 1.56795 13.8117 1.17538 13.1893 0.906634C12.5669 0.637892 11.8875 0.499676 11.2002 0.501943C10.0241 0.469135 8.87908 0.852853 8.00074 1.57415C7.1224 0.852853 5.9774 0.469135 4.80133 0.501943C4.11397 0.499676 3.43462 0.637892 2.81223 0.906634C2.18983 1.17538 1.63987 1.56795 1.20198 2.05609C0.439723 2.90796 -0.357732 4.45031 0.170972 6.96391C1.01482 10.9779 7.34246 14.2719 7.60961 14.4067C7.7287 14.4679 7.86279 14.5 7.99914 14.5C8.13549 14.5 8.26958 14.4679 8.38867 14.4067C8.65742 14.2689 14.9851 10.9749 15.8273 6.96391C16.3592 4.45031 15.5618 2.90796 14.7995 2.05609ZM14.2604 6.68389C13.6637 9.52173 9.3269 12.1613 8.00074 12.9115C6.13228 11.8725 2.28819 9.26381 1.74508 6.68389C1.33476 4.73402 1.89626 3.60139 2.44016 2.99417C2.72779 2.67444 3.08866 2.41731 3.49689 2.24123C3.90512 2.06516 4.35058 1.9745 4.80133 1.97576C5.28275 1.9425 5.76532 2.02474 6.20198 2.21445C6.63863 2.40417 7.01448 2.6949 7.29287 3.05829C7.36152 3.17467 7.46279 3.27196 7.58614 3.34002C7.70948 3.40808 7.85038 3.44442 7.99415 3.44524C8.13792 3.44607 8.27929 3.41136 8.40355 3.34473C8.52781 3.27809 8.63039 3.18198 8.70061 3.06639C8.97847 2.70017 9.35511 2.40699 9.79343 2.21574C10.2317 2.02449 10.7166 1.94178 11.2002 1.97576C11.6518 1.97374 12.0984 2.06403 12.5077 2.24013C12.9169 2.41623 13.2787 2.67376 13.5669 2.99417C14.1092 3.60139 14.6707 4.73402 14.2604 6.68389Z"
                                                                fill="#DB0101" />
                                                        </svg>
                                                        <small>735</small>
                                                    </span>
                                                </div>

                                                <p class="mb-1 mt-[-5px] text-sm">Lekki gate, Lagos</p>

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
                                                    <p class="text-xs">6 guests - 3 bedrooms - 3 beds</p>
                                                </span>

                                                <div class="mb-1 flex items-center justify-between">
                                                    <span class="flex items-center gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M14 4L8 10L5.5 7.5" stroke="black" stroke-width="2"
                                                                stroke-miterlimit="10" />
                                                            <path
                                                                d="M13.35 6.75C13.45 7.15 13.5 7.55 13.5 8C13.5 11.05 11.05 13.5 8 13.5C4.95 13.5 2.5 11.05 2.5 8C2.5 4.95 4.95 2.5 8 2.5C9.5 2.5 10.85 3.1 11.8 4.05L12.5 3.35C11.35 2.2 9.75 1.5 8 1.5C4.4 1.5 1.5 4.4 1.5 8C1.5 11.6 4.4 14.5 8 14.5C11.6 14.5 14.5 11.6 14.5 8C14.5 7.3 14.4 6.6 14.15 5.95L13.35 6.75Z"
                                                                fill="black" />
                                                        </svg>
                                                        <p class="text-xs">Wifi, 24/7 power, Netflix, 24/7 security</p>
                                                    </span>
                                                    <p class="text-xs text-gray-400"><small
                                                            class="text-sm text-green-500">₦ 200k</small> per night</p>
                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="swiper-slide">slide 2</div>
                        <div class="swiper-slide">slide 3</div>

                    </div>
                    <svg class="swiper-button-prev size-6 rounded-full bg-black text-white lg:hidden"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <svg class="swiper-button-next size-6 rounded-full bg-black text-white lg:hidden"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                </div>

                <a href="#"
                    class="ml-[40%] mt-5 hidden w-fit rounded-full border-2 bg-red-600 p-2 px-8 text-2xl capitalize text-white shadow-lg lg:block">see
                    all offers</a>
            </section>




            <!-- desktop amenetis  -->
            <section class="py-6 lg:mx-[5rem] lg:mt-[2.5rem]">
    <div class="mb-8 text-center">
        <h1 class="text-2xl font-bold capitalize">Amenities & Standards</h1>
        <p class="mb-4 text-xl capitalize">Our homes are verified and approved to the highest quality standards, all-inclusive of:</p>
    </div>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 place-content-center gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4">
            <div class="flex flex-col items-center justify-center">
                 <svg class="w-[35%]" xmlns="http://www.w3.org/2000/svg" width="101" height="75" viewBox="0 0 101 75"
                    fill="none">
                    <path d="M52.6253 15.1943L41.4749 31.7363H48.9092V42.7642L60.0597 26.2223H52.6253V15.1943Z"
                        fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M76.6173 28.562C76.0497 33.304 74.1247 37.7811 71.0739 41.4554C69.2859 43.615 64.7424 49.7857 63.7758 53.7921H37.7596C36.7931 49.7818 32.2437 43.611 30.4567 41.4505C27.4069 37.7746 25.4837 33.296 24.9182 28.5532C24.3645 23.826 25.1987 19.0398 27.3189 14.7786C29.4701 10.4674 32.7989 6.85415 36.9196 4.35739C41.0947 1.82281 45.8864 0.485002 50.7707 0.49025C55.6739 0.49025 60.4753 1.83223 64.6238 4.36229C68.7434 6.86033 72.0709 10.4747 74.2205 14.7864C76.3398 19.0482 77.172 23.8348 76.6173 28.562ZM40.3907 50.1161C39.5996 48.3094 38.5419 46.4989 37.5567 44.9599C36.2599 42.9371 34.8504 40.9888 33.3347 39.1244C30.7335 35.9904 29.0928 32.1719 28.6099 28.1278C28.1384 24.1022 28.849 20.0265 30.6547 16.398C32.4958 12.7112 35.3441 9.62161 38.8693 7.48737C42.4567 5.31041 46.5735 4.16151 50.7697 4.16624C54.9887 4.16624 59.1147 5.32295 62.673 7.49325C66.1969 9.62794 69.0438 12.7175 70.8837 16.4038C72.6882 20.0335 73.397 24.1099 72.9236 28.1356C72.4394 32.1786 70.798 35.9957 68.1968 39.1283C66.6801 40.9917 65.2708 42.9401 63.9758 44.9638C62.9906 46.5028 61.9359 48.3094 61.1428 50.1161H40.3907Z"
                        fill="black" />
                    <path
                        d="M37.7588 59.3058C37.7588 58.8186 37.9548 58.351 38.3028 58.0059C38.6508 57.6609 39.1243 57.4678 39.6164 57.4678H61.9174C62.4104 57.4678 62.8829 57.6609 63.2319 58.0069C63.5809 58.35 63.776 58.8186 63.776 59.3058C63.776 59.793 63.5799 60.2605 63.2319 60.6056C62.8829 60.9506 62.4104 61.1438 61.9184 61.1438H39.6174C39.1243 61.1438 38.6508 60.9506 38.3028 60.6046C38.1307 60.4349 37.994 60.2327 37.9007 60.0097C37.8073 59.7868 37.7591 59.5475 37.7588 59.3058Z"
                        fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M37.7588 64.8203H63.776V70.3343C63.776 71.3097 63.3839 72.2438 62.6879 72.934C61.9876 73.6245 61.0433 74.0112 60.0598 74.0103H41.475C40.4918 74.011 39.5479 73.6243 38.8479 72.934C38.5034 72.5942 38.2297 72.1895 38.0428 71.7433C37.8558 71.297 37.7593 70.8181 37.7588 70.3343V64.8203ZM41.475 68.4963H60.0608V70.3343H41.475V68.4963Z"
                        fill="black" />
                </svg>
                <p class="text-xs">24-7 Electricity</p>
            </div>

            <div class="flex flex-col items-center justify-center">
                <svg class="w-[35%]" xmlns="http://www.w3.org/2000/svg" width="101" height="87" viewBox="0 0 101 87"
                    fill="none">
                    <path
                        d="M50.9896 6.37952C51.8017 6.37952 52.5807 6.05688 53.155 5.48259C53.7292 4.90829 54.0519 4.12938 54.0519 3.3172C54.0519 2.50502 53.7292 1.72611 53.155 1.15182C52.5807 0.577519 51.8017 0.254883 50.9896 0.254883C50.1774 0.254883 49.3985 0.577519 48.8242 1.15182C48.2499 1.72611 47.9272 2.50502 47.9272 3.3172C47.9272 4.12938 48.2499 4.90829 48.8242 5.48259C49.3985 6.05688 50.1774 6.37952 50.9896 6.37952Z"
                        fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M50.614 6.4485L50.5973 6.4534L50.5503 6.46124L50.3807 6.49359L49.7484 6.62102C49.2054 6.7308 48.432 6.89352 47.5066 7.10427C45.2126 7.62123 42.9385 8.22285 40.6889 8.90789C38.2236 9.66953 35.6406 10.6174 33.6389 11.7251C32.643 12.2769 31.6882 12.9239 30.9589 13.6855C30.2335 14.4383 29.5571 15.4931 29.5571 16.8183C29.5571 20.3805 30.557 22.9889 31.6137 24.7386C32.1342 25.5992 32.6626 26.2422 33.0792 26.6833C33.0998 26.9186 33.1302 27.1813 33.187 27.4675C33.3939 28.5409 33.9104 29.9083 35.0946 31.2375C34.5297 33.6348 34.5145 36.1289 35.05 38.5329C35.5855 40.937 36.6578 43.1888 38.1868 45.1198C39.7157 47.0508 41.6617 48.6109 43.8789 49.6835C46.0962 50.756 48.5274 51.3131 50.9904 51.3131C53.4535 51.3131 55.8846 50.756 58.1019 49.6835C60.3192 48.6109 62.2651 47.0508 63.794 45.1198C65.323 43.1888 66.3954 40.937 66.9309 38.5329C67.4663 36.1289 67.4511 33.6348 66.8862 31.2375C68.0684 29.9083 68.585 28.5418 68.7909 27.4665C68.8424 27.2075 68.8784 26.9457 68.8987 26.6824C69.4549 26.0878 69.9465 25.4359 70.3652 24.7376C71.4238 22.9889 72.4227 20.3805 72.4227 16.8173C72.4227 15.494 71.7444 14.4383 71.02 13.6845C70.2916 12.9239 69.3359 12.2769 68.34 11.7251C66.3373 10.6174 63.7553 9.66953 61.287 8.90887C59.0382 8.22338 56.7647 7.62143 54.4713 7.10427C53.5165 6.88666 52.5588 6.68277 51.5982 6.49163L51.4286 6.46124L51.3815 6.4534L51.3649 6.4485L50.9894 6.37988L50.614 6.4485ZM50.9894 31.9285C55.4947 31.9285 58.5198 31.3453 60.542 30.5856C62.2545 29.9426 63.2534 29.1751 63.8288 28.5281C64.0386 28.2929 64.2043 28.0655 64.3346 27.8469H37.6433C37.7746 28.0655 37.9403 28.2958 38.1481 28.5281C38.7274 29.1751 39.7234 29.9426 41.4339 30.5866C43.4591 31.3453 46.4842 31.9295 50.9894 31.9295V31.9285ZM66.0373 23.7642H35.9415C35.6285 23.4112 35.349 23.0299 35.1064 22.6252C34.4065 21.4685 33.6468 19.5963 33.6389 16.8615C33.7075 16.7301 33.7967 16.6115 33.9036 16.5096C34.2349 16.1655 34.7946 15.7509 35.6171 15.298C37.2502 14.3932 39.5155 13.5434 41.8956 12.8072C44.0456 12.1537 46.219 11.5798 48.4114 11.0869C49.2681 10.8909 50.1268 10.7076 50.9894 10.5351C51.1061 10.5557 51.2482 10.586 51.4139 10.6194C51.9324 10.7252 52.6755 10.884 53.5675 11.0869C55.76 11.5801 57.9334 12.1546 60.0833 12.8092C62.4633 13.5444 64.7297 14.3932 66.3618 15.297C67.1852 15.7509 67.744 16.1655 68.0773 16.5096C68.2606 16.7036 68.3223 16.8183 68.34 16.8615C68.3321 19.5963 67.5724 21.4685 66.8696 22.6252C66.6284 23.03 66.35 23.4113 66.0373 23.7642ZM38.7421 34.9908C38.7421 34.6232 38.7588 34.2605 38.7892 33.9007C41.5202 35.1809 45.4314 36.0112 50.9894 36.0112C55.776 36.0112 59.3363 35.3985 61.9752 34.4085C62.4035 34.2497 62.8084 34.0782 63.1907 33.8988C63.3304 35.5424 63.1365 37.1973 62.6208 38.7642C62.1051 40.331 61.2782 41.7776 60.1896 43.0169C59.1011 44.2563 57.7733 45.263 56.2861 45.9766C54.7988 46.6902 53.1827 47.096 51.5348 47.1696C49.8868 47.2432 48.241 46.9831 46.696 46.4049C45.1511 45.8268 43.7389 44.9425 42.5442 43.8051C41.3494 42.6677 40.3968 41.3006 39.7435 39.786C39.0901 38.2713 38.7495 36.6403 38.7421 34.9908Z"
                        fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M43.8454 55.3865C43.8454 54.3038 44.2754 53.2655 45.0409 52.4999C45.8063 51.7342 46.8445 51.304 47.9272 51.3037H54.0508C55.1337 51.3037 56.1721 51.7339 56.9378 52.4995C57.7035 53.2652 58.1336 54.3037 58.1336 55.3865V58.2077C58.1335 58.8723 57.9711 59.5269 57.6605 60.1146C57.3499 60.7022 56.9006 61.2052 56.3515 61.5797L56.5828 62.7355L63.5877 54.2288C63.8238 53.9419 64.1338 53.725 64.4841 53.6013C64.8344 53.4776 65.2118 53.4519 65.5757 53.5269C70.8103 54.6131 76.1644 56.2579 80.2629 58.5164C84.227 60.6995 87.7324 63.8696 87.7324 68.2425V75.7993C87.7322 76.3407 87.5169 76.8598 87.134 77.2425C86.7511 77.6252 86.2319 77.8402 85.6906 77.8402H16.2885C15.7472 77.8402 15.2281 77.6252 14.8453 77.2424C14.4626 76.8597 14.2476 76.3406 14.2476 75.7993V68.2415C14.2476 63.8941 17.8196 60.7446 21.7838 58.5792C25.8989 56.3275 31.255 54.6699 36.4249 53.5701C36.7905 53.4924 37.1704 53.5167 37.5231 53.6401C37.8759 53.7635 38.1881 53.9814 38.4256 54.27L45.4266 62.7737L45.6471 61.5935C45.0921 61.2197 44.6375 60.7152 44.3234 60.1245C44.0092 59.5337 43.845 58.8748 43.8454 58.2057V55.3865ZM52.0501 60.8896L53.2323 66.8035L50.9895 69.5267L48.8173 66.8898L49.9347 60.8612C50.0155 60.4255 49.9524 59.9754 49.7549 59.5788C49.5573 59.1822 49.2362 58.8606 48.8398 58.6625L47.9282 58.2077V55.3865H54.0508V58.2077L53.1392 58.6644C52.7386 58.8644 52.4148 59.1906 52.2178 59.5927C52.0209 59.9948 51.9626 60.4505 52.0501 60.8896ZM52.7922 73.7575L65.9453 57.7852C70.5583 58.8174 74.9822 60.2691 78.2906 62.0924C82.0244 64.148 83.6487 66.2722 83.6487 68.2425V73.7575H52.7922ZM36.0661 57.8303L49.1848 73.7575H18.3293V68.2435C18.3293 66.3369 19.9624 64.2284 23.7404 62.16C27.0742 60.3368 31.5059 58.8781 36.07 57.8312L36.0661 57.8303Z"
                        fill="black" />
                    <path
                        d="M50.9895 77.8398C52.3511 79.2014 55.0713 80.561 55.0713 80.561C55.0713 80.561 53.647 86.0044 50.9895 86.0044C48.3311 86.0044 46.9067 80.561 46.9067 80.561C46.9067 80.561 49.6279 79.2014 50.9895 77.8398Z"
                        fill="black" />
                </svg>
                <p class="text-xs">24-7 Security</p>
            </div>

            <div class="flex flex-col items-center justify-center">
                <svg class="w-[35%]" xmlns="http://www.w3.org/2000/svg" width="101" height="75" viewBox="0 0 101 75"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.84236 5.48958V30.1452H95.1092V5.48958C95.004 5.45128 94.8927 5.43235 94.7808 5.4337H7.17075C7.05881 5.43235 6.94755 5.45128 6.84236 5.48958ZM93.9829 35.0876H7.96868L10.3586 41.3074C10.7124 42.2289 11.478 43.1532 12.6739 43.8581C13.8718 44.5638 15.3775 44.9716 16.9675 44.9726H23.0157C23.34 44.9729 23.661 45.037 23.9605 45.1613C24.26 45.2857 24.5321 45.4678 24.7612 45.6972C24.9903 45.9267 25.172 46.1991 25.2958 46.4988C25.4197 46.7984 25.4833 47.1196 25.483 47.4439C25.4833 47.7681 25.4197 48.0893 25.2958 48.389C25.172 48.6886 24.9903 48.961 24.7612 49.1905C24.5321 49.42 24.26 49.6021 23.9605 49.7264C23.661 49.8507 23.34 49.9148 23.0157 49.9151H16.9675C14.5639 49.9151 12.1838 49.3024 10.1733 48.1183C8.16179 46.9331 6.56593 45.1971 5.75427 43.0817L2.0724 33.5045C1.9635 33.2211 1.90767 32.92 1.90771 32.6164V5.1857C1.90771 3.73196 2.63703 2.48997 3.65945 1.67733C4.66814 0.875478 5.93562 0.490234 7.17075 0.490234H94.7808C96.0159 0.490234 97.2844 0.875478 98.2921 1.67733C99.3145 2.49095 100.044 3.73196 100.044 5.1857V32.6164C100.044 32.9203 99.9879 33.2212 99.8791 33.5045L96.1982 43.0817C95.3866 45.1971 93.7897 46.9341 91.7792 48.1183C89.7687 49.3024 87.3876 49.9141 84.986 49.9151H78.9368C78.2821 49.9146 77.6544 49.6541 77.1917 49.1908C76.729 48.7276 76.4692 48.0996 76.4695 47.4448C76.4691 47.1206 76.5326 46.7994 76.6563 46.4997C76.78 46.1999 76.9616 45.9275 77.1906 45.6979C77.4196 45.4684 77.6916 45.2862 77.9911 45.1617C78.2905 45.0373 78.6115 44.973 78.9358 44.9726H84.984C86.573 44.9726 88.0797 44.5638 89.2776 43.8581C90.4735 43.1523 91.2381 42.2308 91.592 41.3084L93.9829 35.0876ZM76.4695 17.7889C76.4692 17.1344 76.7289 16.5065 77.1913 16.0433C77.6538 15.5801 78.2813 15.3195 78.9358 15.3187H83.596C84.2507 15.3192 84.8784 15.5797 85.3411 16.043C85.8038 16.5062 86.0636 17.1342 86.0633 17.7889C86.0636 18.1132 86 18.4344 85.8761 18.734C85.7522 19.0337 85.5706 19.3061 85.3415 19.5356C85.1124 19.765 84.8403 19.9471 84.5408 20.0715C84.2413 20.1958 83.9203 20.2599 83.596 20.2602H78.9358C78.2813 20.2594 77.6538 19.9988 77.1913 19.5356C76.7289 19.0724 76.4692 18.4445 76.4695 17.7899V17.7889ZM39.3253 43.1189C39.6496 43.1192 39.9707 43.1833 40.2701 43.3077C40.5696 43.432 40.8417 43.6141 41.0708 43.8436C41.2999 44.073 41.4816 44.3454 41.6054 44.6451C41.7293 44.9448 41.7929 45.2659 41.7927 45.5902V45.6902L41.7878 45.9343C41.7838 46.1421 41.775 46.4411 41.7584 46.8165C41.725 47.5674 41.6574 48.63 41.5241 49.9024C41.2594 52.4354 40.7252 55.8535 39.64 59.307C37.5266 66.0346 32.8919 74.01 23.0147 74.01C22.36 74.0092 21.7324 73.7484 21.2699 73.285C20.8074 72.8216 20.5479 72.1935 20.5484 71.5387C20.5481 71.2145 20.6118 70.8933 20.7356 70.5936C20.8595 70.2939 21.0411 70.0216 21.2703 69.7921C21.4994 69.5626 21.7714 69.3805 22.0709 69.2562C22.3704 69.1319 22.6915 69.0677 23.0157 69.0675C29.4502 69.0675 32.9703 64.0691 34.9338 57.8229C35.8876 54.789 36.3728 51.7198 36.6169 49.3867C36.7384 48.2261 36.7992 47.2625 36.8296 46.594C36.8441 46.2762 36.8539 45.9582 36.859 45.6402V45.5902C36.859 44.9357 37.1187 44.308 37.5811 43.8448C38.0435 43.3817 38.6709 43.12 39.3253 43.1189ZM50.9758 43.1189C51.3 43.1192 51.6211 43.1833 51.9206 43.3077C52.2201 43.432 52.4921 43.6141 52.7212 43.8436C52.9504 44.073 53.132 44.3454 53.2559 44.6451C53.3797 44.9448 53.4433 45.2659 53.4431 45.5902V71.5397C53.4433 72.1944 53.1836 72.8225 52.7209 73.2857C52.2582 73.7489 51.6305 74.0095 50.9758 74.01C50.6515 74.0097 50.3305 73.9456 50.031 73.8213C49.7315 73.6969 49.4594 73.5148 49.2303 73.2853C49.0012 73.0559 48.8195 72.7835 48.6957 72.4838C48.5718 72.1841 48.5082 71.863 48.5084 71.5387V45.5912C48.5079 45.2667 48.5714 44.9454 48.6951 44.6455C48.8188 44.3455 49.0005 44.073 49.2296 43.8433C49.4587 43.6136 49.7309 43.4313 50.0305 43.3069C50.3301 43.1824 50.6513 43.1192 50.9758 43.1189ZM65.0935 45.5892C65.0938 44.9345 64.834 44.3064 64.3713 43.8432C63.9086 43.38 63.2809 43.1195 62.6262 43.1189L65.0935 45.5892ZM62.6262 45.5902C60.1589 45.5902 60.1589 45.5912 60.1589 45.5921V45.6902L60.1638 45.9343C60.1677 46.1421 60.1765 46.4411 60.1932 46.8165C60.2275 47.5674 60.2941 48.63 60.4275 49.9024C60.6921 52.4354 61.2264 55.8535 62.3115 59.307C64.426 66.0346 69.0616 74.01 78.9368 74.01C79.5915 74.0092 80.2191 73.7484 80.6816 73.285C81.1441 72.8216 81.4037 72.1935 81.4031 71.5387C81.4034 71.2145 81.3398 70.8933 81.2159 70.5936C81.0921 70.2939 80.9104 70.0216 80.6813 69.7921C80.4522 69.5626 80.1801 69.3805 79.8806 69.2562C79.5811 69.1319 79.2601 69.0677 78.9358 69.0675C72.5023 69.0675 68.9812 64.0691 67.0178 57.8229C66.065 54.789 65.5788 51.7198 65.3347 49.3867C65.2367 48.4581 65.1661 47.5268 65.1229 46.594C65.1083 46.2762 65.0985 45.9582 65.0935 45.6402V45.5892M62.6262 45.5902L60.1589 45.5921C60.1585 45.2677 60.222 44.9464 60.3458 44.6466C60.4696 44.3467 60.6512 44.0742 60.8803 43.8445C61.1094 43.6149 61.3815 43.4326 61.6811 43.3081C61.9806 43.1836 62.3018 43.1193 62.6262 43.1189"
                        fill="black" />
                </svg>
                <p class="text-xs">Air conditioning</p>
            </div>

            <div class="flex flex-col items-center justify-center">
                <svg class="w-[35%]" xmlns="http://www.w3.org/2000/svg" width="101" height="89" viewBox="0 0 101 89"
                    fill="none">
                    <path
                        d="M67.4711 27.9431L68.371 28.3323L68.9768 26.9296L67.4495 26.9639L67.4711 27.9431ZM64.3538 35.1595L63.5402 35.7075L64.542 37.1945L65.2527 35.5477L64.3538 35.1595ZM59.6112 28.1186L59.5897 27.1384L57.7958 27.1776L58.7986 28.6655L59.6112 28.1186ZM15.1909 66.9707H86.7512V65.0102H15.1909V66.9707ZM89.692 69.9113V82.6542H91.6526V69.9113H89.692ZM86.7512 85.5949H15.1909V87.5553H86.7512V85.5949ZM12.2501 82.6542V69.9113H10.2896V82.6542H12.2501ZM15.1909 85.5949C14.411 85.5949 13.663 85.2851 13.1115 84.7336C12.5599 84.1821 12.2501 83.4341 12.2501 82.6542H10.2896C10.2896 83.9541 10.8059 85.2007 11.7251 86.1198C12.6443 87.039 13.891 87.5553 15.1909 87.5553V85.5949ZM89.692 82.6542C89.692 83.4341 89.3822 84.1821 88.8307 84.7336C88.2792 85.2851 87.5312 85.5949 86.7512 85.5949V87.5553C88.0511 87.5553 89.2978 87.039 90.217 86.1198C91.1362 85.2007 91.6526 83.9541 91.6526 82.6542H89.692ZM86.7512 66.9707C87.5312 66.9707 88.2792 67.2805 88.8307 67.832C89.3822 68.3835 89.692 69.1314 89.692 69.9113H91.6526C91.6526 68.6115 91.1362 67.3649 90.217 66.4457C89.2978 65.5266 88.0511 65.0102 86.7512 65.0102V66.9707ZM15.1909 65.0102C13.891 65.0102 12.6443 65.5266 11.7251 66.4457C10.8059 67.3649 10.2896 68.6115 10.2896 69.9113H12.2501C12.2501 69.1314 12.5599 68.3835 13.1115 67.832C13.663 67.2805 14.411 66.9707 15.1909 66.9707V65.0102ZM74.4977 74.8124H79.3991V72.852H74.4977V74.8124ZM79.3991 75.7927H74.4977V77.7531H79.3991V75.7927ZM74.4977 75.7927C74.3678 75.7927 74.2431 75.741 74.1512 75.6491C74.0592 75.5572 74.0076 75.4325 74.0076 75.3026H72.047C72.047 75.9525 72.3052 76.5758 72.7648 77.0354C73.2244 77.4949 73.8478 77.7531 74.4977 77.7531V75.7927ZM79.8893 75.3026C79.8893 75.4325 79.8376 75.5572 79.7457 75.6491C79.6538 75.741 79.5291 75.7927 79.3991 75.7927V77.7531C80.0491 77.7531 80.6724 77.4949 81.132 77.0354C81.5916 76.5758 81.8498 75.9525 81.8498 75.3026H79.8893ZM79.3991 74.8124C79.5291 74.8124 79.6538 74.8641 79.7457 74.956C79.8376 75.0479 79.8893 75.1726 79.8893 75.3026H81.8498C81.8498 74.6526 81.5916 74.0293 81.132 73.5698C80.6724 73.1102 80.0491 72.852 79.3991 72.852V74.8124ZM74.4977 72.852C73.8478 72.852 73.2244 73.1102 72.7648 73.5698C72.3052 74.0293 72.047 74.6526 72.047 75.3026H74.0076C74.0076 75.1726 74.0592 75.0479 74.1512 74.956C74.2431 74.8641 74.3678 74.8124 74.4977 74.8124V72.852ZM39.8234 1.49182C33.4019 6.77449 29.0522 14.1549 27.5415 22.3313L29.4697 22.6872C30.896 14.9647 35.0037 7.99391 41.0683 3.00431L39.8234 1.49182ZM27.5415 22.3313C26.6995 26.8883 26.7634 31.5665 27.7295 36.0988C28.6956 40.6311 30.545 44.9288 33.1722 48.7464L34.7877 47.6348C29.7769 40.3534 27.864 31.3789 29.4697 22.6872L27.5415 22.3313ZM33.1722 48.7464C35.7994 52.5639 39.1528 55.8267 43.041 58.3483C46.9292 60.8699 51.276 62.601 55.8333 63.4428L56.1901 61.5148C51.8859 60.7198 47.7806 59.0848 44.1083 56.7033C40.4361 54.3218 37.2689 51.2403 34.7877 47.6348L33.1722 48.7464ZM55.8333 63.4428C64.0105 64.9534 72.4585 63.528 79.6873 59.4181L78.7178 57.7135C71.891 61.5949 63.9127 62.9411 56.1901 61.5148L55.8333 63.4428ZM79.6873 59.4181C81.6479 58.3035 82.0478 55.7893 80.8343 54.0259L79.2197 55.1374C79.8471 56.049 79.5815 57.2224 78.7178 57.7135L79.6873 59.4181ZM41.0693 3.00529C41.8368 2.37402 43.0259 2.54458 43.6543 3.45717L45.2698 2.3456C44.0562 0.582177 41.5643 0.0597183 39.8234 1.49182L41.0693 3.00529ZM71.0668 27.2717C71.0668 27.9216 70.8086 28.5449 70.349 29.0045C69.8894 29.464 69.266 29.7222 68.6161 29.7222V31.6827C69.786 31.6827 70.908 31.2179 71.7353 30.3907C72.5626 29.5635 73.0273 28.4415 73.0273 27.2717H71.0668ZM68.6161 29.7222C67.9661 29.7222 67.3428 29.464 66.8832 29.0045C66.4236 28.5449 66.1654 27.9216 66.1654 27.2717H64.2048C64.2048 28.4415 64.6696 29.5635 65.4968 30.3907C66.3241 31.2179 67.4461 31.6827 68.6161 31.6827V29.7222ZM66.1654 27.2717C66.1654 26.6217 66.4236 25.9984 66.8832 25.5389C67.3428 25.0793 67.9661 24.8211 68.6161 24.8211V22.8607C67.4461 22.8607 66.3241 23.3254 65.4968 24.1526C64.6696 24.9798 64.2048 26.1018 64.2048 27.2717H66.1654ZM68.6161 24.8211C69.266 24.8211 69.8894 25.0793 70.349 25.5389C70.8086 25.9984 71.0668 26.6217 71.0668 27.2717H73.0273C73.0273 26.1018 72.5626 24.9798 71.7353 24.1526C70.908 23.3254 69.786 22.8607 68.6161 22.8607V24.8211ZM66.5702 27.555L63.453 34.7713L65.2527 35.5477L68.371 28.3323L66.5702 27.555ZM65.1655 34.6126L60.4239 27.5706L58.7966 28.6655L63.5402 35.7075L65.1655 34.6126ZM59.6328 29.0988L67.4917 28.9233L67.4486 26.9629L59.5897 27.1384L59.6328 29.0988ZM80.8343 54.0259L45.2698 2.3456L43.6543 3.45717L79.2197 55.1374L80.8343 54.0259Z"
                        fill="black" />
                </svg>
                <p class="text-xs">DSTV</p>
            </div>

            <div class="flex flex-col items-center justify-center">
                <svg class="w-[35%]" xmlns="http://www.w3.org/2000/svg" width="101" height="75" viewBox="0 0 101 75"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M29.2531 0.840414C29.4746 0.597309 29.7727 0.471835 30.0756 0.49242L43.2101 1.4021C43.71 1.43739 44.1149 1.85401 44.2198 2.40099L57.6768 34.8212V2.68429C57.6768 2.00497 58.1326 1.4423 58.7159 1.4021L71.8475 0.49242C72.1514 0.471835 72.4484 0.597309 72.6709 0.840414C72.8915 1.08254 73.017 1.42073 73.017 1.7746V72.7261C73.017 73.0789 72.8915 73.4181 72.6699 73.6602C72.4484 73.9033 72.1504 74.0288 71.8475 74.0082L58.713 73.0985C58.213 73.0633 57.8082 72.6467 57.7033 72.0997L44.2472 39.6794V71.8164C44.2472 72.4957 43.7914 73.0574 43.2081 73.0985L30.0746 74.0082C29.9199 74.0167 29.7653 73.9898 29.6226 73.9295C29.4799 73.8692 29.3529 73.7771 29.2511 73.6602C29.0245 73.4022 28.9013 73.0695 28.9051 72.7261V1.7746C28.9051 1.42171 29.0316 1.08254 29.2531 0.840414ZM44.2472 33.7724L57.6758 66.1289V40.7283L44.2482 8.37178L44.2472 33.7724ZM42.0397 3.89393L31.1137 3.13717V71.3635L42.0406 70.6067L42.0397 3.89393ZM59.8824 70.6067L70.8094 71.3635V3.13717L59.8824 3.89393V70.6067Z"
                        fill="black" />
                </svg>
                <p class="text-xs">Clean sheets</p>
            </div>

            <div class="flex flex-col items-center justify-center">
                <svg class="w-[35%]" xmlns="http://www.w3.org/2000/svg" width="100" height="79" viewBox="0 0 100 79"
                    fill="none">
                    <path
                        d="M82.5934 78.8196C83.2434 78.8196 83.8668 78.5614 84.3264 78.1018C84.786 77.6421 85.0442 77.0187 85.0442 76.3687C85.0442 75.7187 84.786 75.0953 84.3264 74.6356C83.8668 74.176 83.2434 73.9178 82.5934 73.9178V78.8196ZM18.5663 73.9178C17.9163 73.9178 17.2929 74.176 16.8333 74.6356C16.3737 75.0953 16.1155 75.7187 16.1155 76.3687C16.1155 77.0187 16.3737 77.6421 16.8333 78.1018C17.2929 78.5614 17.9163 78.8196 18.5663 78.8196V73.9178ZM9.25332 5.29152H90.7428V0.389648H9.25234V5.29152H9.25332ZM94.1121 9.34733V61.4023H99.0137V9.34733H94.1121ZM90.7418 65.4591H9.25528V70.361H90.7428V65.4591H90.7418ZM5.88398 61.4023V9.34733H0.982422V61.4023H5.88398ZM9.2543 65.4591C7.64168 65.4591 5.88398 63.9072 5.88398 61.4023H0.982422C0.982422 66.0865 4.43606 70.361 9.2543 70.361V65.4591ZM94.1121 61.4023C94.1121 63.9072 92.3534 65.4591 90.7418 65.4591V70.361C95.56 70.361 99.0137 66.0865 99.0137 61.4023H94.1121ZM90.7418 5.29152C92.3544 5.29152 94.1121 6.84346 94.1121 9.34733H99.0137C99.0137 4.66408 95.56 0.389648 90.7418 0.389648V5.29152ZM9.25528 0.389648C4.43508 0.389648 0.982422 4.66408 0.982422 9.34733H5.88398C5.88398 6.84346 7.64169 5.29152 9.25332 5.29152L9.2543 0.389648H9.25528ZM82.5934 73.9178H18.5663V78.8196H82.5934V73.9178ZM50.4578 66.6081V74.4168H55.3594V66.6081H50.4578Z"
                        fill="black" />
                </svg>
                <p class="text-xs">Clean towels</p>
            </div>

            <div class="flex flex-col items-center justify-center">
                <svg class="w-[35%]" xmlns="http://www.w3.org/2000/svg" width="101" height="75" viewBox="0 0 101 75"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M23.7744 0.879883H23.7685C20.864 0.888705 18.081 2.00228 16.0274 3.97948C13.9737 5.95667 12.817 8.63573 12.8082 11.4324V33.256C10.541 34.0368 8.47055 35.3012 6.74036 36.9614C3.66724 39.9208 1.93413 43.9311 1.92139 48.1148V72.5763C1.92139 73.584 2.77029 74.4006 3.81624 74.4006H98.1626C99.2096 74.4006 100.057 73.584 100.057 72.5773V48.1139C100.045 43.9291 98.3126 39.9189 95.2385 36.9604C93.5083 35.3002 91.4379 34.0359 89.1707 33.255V11.4324C89.1628 8.63671 88.0042 5.95667 85.9515 3.97948C83.8969 2.00228 81.1149 0.889685 78.2104 0.879883H23.7744ZM96.2678 64.6509V48.1237C96.258 44.9035 94.9248 41.8186 92.5595 39.5415C90.1941 37.2643 86.9896 35.9811 83.6459 35.9704H18.333C14.9893 35.9802 11.7848 37.2643 9.4204 39.5415C7.05502 41.8176 5.72187 44.9035 5.71108 48.1237V64.6509C6.80199 64.0708 8.0182 63.7662 9.25375 63.7638H92.7251C93.9607 63.7662 95.1769 64.0708 96.2678 64.6509ZM20.2258 32.3218H49.0946V30.6554C49.09 29.9727 48.9481 29.298 48.6773 28.6713C48.4065 28.0447 48.0123 27.479 47.5183 27.0078C46.4975 26.0335 45.1407 25.4898 43.7296 25.4894H25.5908C24.1794 25.4895 22.8222 26.0333 21.8011 27.0078C21.3071 27.479 20.913 28.0447 20.6422 28.6713C20.3714 29.298 20.2294 29.9727 20.2249 30.6554V32.3218H20.2258ZM52.8843 32.3218H81.754V30.6554C81.7492 29.9726 81.607 29.2978 81.3358 28.6711C81.0647 28.0445 80.6702 27.4788 80.1758 27.0078C79.1552 26.0338 77.7988 25.4901 76.3881 25.4894H58.2503C56.8388 25.4895 55.4816 26.0333 54.4606 27.0078C53.9665 27.479 53.5724 28.0447 53.3016 28.6713C53.0308 29.298 52.8889 29.9727 52.8843 30.6554V32.3218ZM85.382 29.0262C85.0313 27.2706 84.1494 25.6653 82.8558 24.4278C81.1423 22.778 78.8201 21.8477 76.3959 21.8418H58.2414C55.8182 21.8477 53.495 22.778 51.7815 24.4278C51.4972 24.7022 51.2325 24.9924 50.9894 25.2973C50.7448 24.9904 50.4802 24.6999 50.1974 24.4278C48.4839 22.778 46.1616 21.8477 43.7375 21.8418H25.583C23.1598 21.8477 20.8365 22.778 19.123 24.4278C17.8297 25.6651 16.9478 27.27 16.5969 29.0252V11.4412C16.6033 10.5277 16.7934 9.62483 17.156 8.78633C17.5186 7.94783 18.0462 7.19086 18.7074 6.56051C20.0736 5.25715 21.8892 4.5298 23.7773 4.5294H78.2015C80.1033 4.53528 81.9265 5.26558 83.2715 6.56051C83.9328 7.19094 84.4605 7.94806 84.8231 8.78675C85.1857 9.62543 85.3758 10.5285 85.382 11.4422V29.0272V29.0262ZM6.75506 68.4171C7.43055 67.7727 8.32806 67.4129 9.2616 67.4123H92.7173C93.6583 67.4162 94.5592 67.777 95.2238 68.4171C95.8643 69.028 96.239 69.8663 96.2668 70.7511H5.71108C5.73909 69.8667 6.1137 69.0287 6.75408 68.4181L6.75506 68.4171Z"
                        fill="black" />
                </svg>
                <p class="text-xs">Facility management</p>
            </div>

            <div class="flex flex-col items-center justify-center">
                <svg class="w-[35%]" xmlns="http://www.w3.org/2000/svg" width="101" height="93" viewBox="0 0 101 93"
                    fill="none">
                    <path
                        d="M85.096 92.5396H32.943C30.8843 92.5396 28.8257 91.7554 27.3552 90.3829C25.7867 89.0105 25.0024 87.0499 25.0024 84.9912V77.8349H16.9638C14.9051 77.8349 12.8465 77.0506 11.376 75.6782C9.70944 74.3057 8.82715 72.3451 8.82715 70.3844V22.5449C8.82715 20.5842 9.70944 18.6236 11.1799 17.1531C12.7484 15.8787 14.7091 15.0944 16.8658 15.0944V2.35029C16.8658 1.27194 17.7481 0.389648 18.8264 0.389648H83.0373C84.1157 0.389648 84.9979 1.27194 84.9979 2.35029V15.0944C87.0566 15.0944 89.1153 15.8787 90.5858 17.2511C92.1543 18.6236 92.9385 20.5842 92.9385 22.6429V85.1873C92.9385 87.1479 92.0563 89.1085 90.5858 90.579C89.2133 91.7554 87.2527 92.5396 85.096 92.5396ZM28.8257 77.8349V85.0892C28.8257 85.9715 29.2178 86.8538 29.904 87.54C30.6883 88.2262 31.7666 88.6184 32.845 88.6184H84.9979C86.0763 88.6184 87.1546 88.2262 87.9389 87.54C88.6251 86.8538 89.1153 85.9715 89.1153 85.0892V22.5449C89.1153 21.6626 88.7232 20.7803 87.9389 20.0941C87.1546 19.4078 86.0763 19.0157 84.9979 19.0157H16.8658C15.7874 19.0157 14.7091 19.4078 13.9248 20.0941C13.2386 20.7803 12.8465 21.6626 12.8465 22.5449V70.3844C12.8465 71.2667 13.2386 72.149 13.9248 72.8352C14.7091 73.5215 15.7874 73.9136 16.8658 73.9136H69.0187C70.0971 73.9136 71.1754 73.5215 71.9597 72.8352C72.6459 72.149 73.1361 71.2667 73.1361 70.3844V31.7599C73.1361 30.6815 74.0184 29.7992 75.0967 29.7992C76.1751 29.7992 77.0574 30.6815 77.0574 31.7599V70.3844C77.0574 72.3451 76.1751 74.3057 74.7046 75.7762C73.2341 77.1486 71.1754 77.9329 69.1168 77.9329H28.8257V77.8349ZM20.787 15.0944H81.0767V4.31093H20.787V15.0944Z"
                        fill="black" />
                </svg>
                <p class="text-xs">Daily cleaning</p>
            </div>
        </div>
    </div>
</section>

            <!-- desktop top most shortlet apartment -->
            <section class="hidden lg:mx-[5rem] lg:mb-3 lg:mt-[2.5rem] lg:block">
                <h1 class="mb-4 text-center text-2xl font-bold"> Top Rated Shortlet Apartments</h1>
                <div id="rated-shortlet-swiper" class="swiper rounded-md bg-white py-5 shadow shadow-gray-400">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="mt-[1.5rem] flex items-center justify-between px-5 md:px-10">
                                <div class="w-[100%]">
                                    <h2 class="text-left text-2xl">Lekki Phase 1, Lagos</h2cl>
                                        <blockquote class="mt-1 w-[80%] text-lg">
                                            Expect the standard and extra amenities you need get in a 5 Star hotel and the
                                            add your very own personal space, freedom and Netflix to go with it.
                                        </blockquote>
                                        <button
                                            class="text-md mt-[1.5rem] rounded-full border-2 border-red-600 p-1 px-6 text-red-600">Explore
                                            more</button>
                                </div>
                                <div>
                                    <img class="w-[100%]" src="../../image/Rectangle 115.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">slide 2</div>
                        <div class="swiper-slide">slide 3</div>
                    </div>

                    <svg class="swiper-button-prev size-6 rounded-full bg-black text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <svg class="swiper-button-next size-6 rounded-full bg-black text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
            </section>

        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const linkDrop = document.querySelector(".link-drop");
        const showLinkDrop = document.querySelector(".show-link-drop");
        const linkClicks = document.querySelectorAll(".link-click");
        const headCountLinkDrop = document.querySelector(".head-count-link-drop ");
        const showHeadCountDrop = document.querySelector(".show-head-count-drop");

        linkDrop.addEventListener("click", () => {
            showLinkDrop.classList.remove("hidden")
        });

        linkClicks.forEach((linkClick) => {
            linkClick.addEventListener("click", () => {
                showLinkDrop.classList.add("hidden")
            });
        });

        headCountLinkDrop.addEventListener("click", () => {
            showHeadCountDrop.classList.remove("hidden")
        });



        // swiper code
        const reviewSwiper = new Swiper('#review-swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });

        const specialOfferSwiper = new Swiper('#special-offer-swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });

        const ratedShortletSwiper = new Swiper('#rated-shortlet-swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
@endsection
