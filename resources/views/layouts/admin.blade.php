<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - 900 Ticket</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
</head>

<body>
    <header
        class='relative z-50 flex min-h-[70px] bg-white px-4 py-3 font-[sans-serif] tracking-wide shadow-md sm:px-10 md:px-[90px]'>
        <div class='flex w-full flex-wrap items-center justify-between gap-x-4 gap-y-6 lg:gap-y-4'>

            <a href="/admin"><img src="{{ asset('image/logo_alt.svg') }}" alt="logo"
                    class='md:w-26 w-[100px]' />
            </a>



            <div x-data="{ actionNav: false }" class='flex items-center space-x-6 max-sm:ml-auto'>
                <ul>
                    <li id=" profile-dropdown-toggle"
                        class="relative px-1 after:absolute after:left-0 after:top-8 after:block after:h-[2px] after:w-full after:bg-black after:transition-all after:duration-300">
                        <svg @click="actionNav = ! actionNav" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                            class="cursor-pointer hover:fill-black" viewBox="0 0 512 512">
                            <path
                                d="M437.02 74.981C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.981C26.629 123.333 0 187.62 0 256s26.629 132.667 74.98 181.019C123.333 485.371 187.62 512 256 512s132.667-26.629 181.02-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.667-74.98-181.019zM256 482c-66.869 0-127.037-29.202-168.452-75.511C113.223 338.422 178.948 290 256 290c-49.706 0-90-40.294-90-90s40.294-90 90-90 90 40.294 90 90-40.294 90-90 90c77.052 0 142.777 48.422 168.452 116.489C383.037 452.798 322.869 482 256 482z"
                                data-original="#000000" />
                        </svg>
                        <div x-show="actionNav" @click.outside="actionNav = false" id="profile-dropdown-menu"
                            class="absolute right-0 top-10 z-20 block rounded bg-white px-6 py-6 shadow-lg max-sm:min-w-[250px] sm:min-w-[320px]">
                            <h6 class="text-[15px] font-semibold">Welcome</h6>
                            <p class="mt-1 text-sm text-gray-500">Manage 900 Events,Flight Order, Shortlet Listing and Hotel Booking  </p>

                            <form class="mt-4 rounded border border-gray-300 bg-transparent px-4 py-2 text-sm text-black hover:border-black" method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button class="text-[1rem]" type="submit">
                                Logout
                            </button>
                        </form>


                            {{-- <hr class="my-4 border-b-0" /> --}}
                            <ul class="hidden space-y-1.5">
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Order</a></li>
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Wishlist</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Gift
                                        Cards</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Contact
                                        Us</a></li>
                            </ul>

                            {{-- <hr class="my-4 border-b-0" /> --}}
                            <ul class="hidden space-y-1.5">
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Coupons</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Saved
                                        Credits</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Contact
                                        Us</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Saved
                                        Addresses</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>


            </div>
        </div>
    </header>

    <section x-data='{manageNav: false}' class="px-3 py-3 md:px-10">
        {{-- Grid Container --}}
        <div class="admin-grid">
            {{-- Grid Section One --}}
            <div class="adminGridSectionOne mt-4 hidden md:block">
                <ul class="flex flex-col gap-y-2 md:w-[70%]">

                    <li x-data="{ actionNavOne: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavOne = ! actionNavOne" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage Admin Profile
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavOne" @click.outside="actionNavOne = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavII: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavII = ! actionNavII" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Events
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavII" @click.outside="actionNavII = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">

                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.events')}}">
                                        View Event Listings
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.create.event')}}">
                                        Create Event Listing
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.events.list.edit')}}">
                                        Edit Event Listing
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavIII: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavIII = ! actionNavIII" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Flight Bookings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavIII" @click.outside="actionNavIII = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavIV: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavIV = ! actionNavIV" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Shortlet Listings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavIV" @click.outside="actionNavIV = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.shortlet.create')}}">
                                        Create a Shortlet Listng
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.shortlet.view')}}">
                                        Update a Shortlet Listing
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.shortlet.view')}}">
                                        Manage Shortlet Listing
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavV: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavV = ! actionNavV" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Hotel Bookings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavV" @click.outside="actionNavV = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>






                </ul>
            </div>

            <div x-transition x-show="manageNav" @click.outside="manageNav = false" class="adminGridSectionOne inline-block md:hidden">
                <ul class="flex flex-col gap-y-2 md:w-[70%]">

                    <li x-data="{ actionNavOne: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavOne = ! actionNavOne" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage Admin Profile
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavOne" @click.outside="actionNavOne = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavII: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavII = ! actionNavII" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Events
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavII" @click.outside="actionNavII = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">

                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.events')}}">
                                        View Event Listings
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.create.event')}}">
                                        Create Event Listing
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.events.list.edit')}}">
                                        Edit Event Listings
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Delete Event Listings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavIII: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavIII = ! actionNavIII" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Flight Bookings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavIII" @click.outside="actionNavIII = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavIV: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavIV = ! actionNavIV" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Shortlet Listings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavIV" @click.outside="actionNavIV = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.shortlet.create')}}">
                                        Create a Shortlet Listng
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.shortlet.view')}}">
                                        Update a Shortlet Listing
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.shortlet.view')}}">
                                        Manage Shortlet Listing
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavV: false }" class="relative rounded-sm bg-slate-300 px-1 py-2 hover:bg-slate-100">
                        <a @click="actionNavV = ! actionNavV" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Hotel Bookings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavV" @click.outside="actionNavV = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>






                </ul>
            </div>

            {{-- Grid Section Two  --}}
            <div class="adminGridSectionTwo">
                <div @click="manageNav = ! manageNav" class="flex gap-2 md:hidden">
                    <img src="{{asset('image/manage-icon.svg')}}" alt="lorem ipsum">
                    <span  class="font-[500] hover:font-[600]">

                        Manage 900 Ticket
                    </span>
                </div>


                {{-- Flex Container  --}}
                {{-- to be lifed --}}
                <div>
                    @yield('content')
                </div>



            </div>
        </div>

    </section>


     <footer class="bg-black">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 md:w-[40%]">
                    <a href="{{ route('index') }}" class="flex items-center">
                        <img src="{{ asset('image/logo_alt.svg') }}" class="me-3 h-10" alt="900 Ticket" />
                        <span class="self-center whitespace-nowrap text-2xl font-[800] text-white">900Ticket</span>


                    </a>
                    <p class="mt-4 text-white md:text-[17px]">Enjoy simple, hassle-free Bookings with 900Ticket, Let us
                        help you easily book and reserve4 the perfect experience</p>

                    <div class="w-full">
                        <h2 class="my-4 text-sm font-semibold uppercase text-white">Connect with us </h2>
                        <ul class="flex list-none items-center justify-start gap-2">
                            <li class="icon-content relative">
                                <a href="https://www.facebook.com/share/1AQitxKZkM/" aria-label="LinkedIn" data-social="linkedin"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-blue-600 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b9b1b1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 12.05C19.9813 10.5255 19.5273 9.03809 18.6915 7.76295C17.8557 6.48781 16.673 5.47804 15.2826 4.85257C13.8921 4.2271 12.3519 4.01198 10.8433 4.23253C9.33473 4.45309 7.92057 5.10013 6.7674 6.09748C5.61422 7.09482 4.77005 8.40092 4.3343 9.86195C3.89856 11.323 3.88938 12.8781 4.30786 14.3442C4.72634 15.8103 5.55504 17.1262 6.69637 18.1371C7.83769 19.148 9.24412 19.8117 10.75 20.05V14.38H8.75001V12.05H10.75V10.28C10.7037 9.86846 10.7483 9.45175 10.8807 9.05931C11.0131 8.66687 11.23 8.30827 11.5161 8.00882C11.8022 7.70936 12.1505 7.47635 12.5365 7.32624C12.9225 7.17612 13.3368 7.11255 13.75 7.14003C14.3498 7.14824 14.9482 7.20173 15.54 7.30003V9.30003H14.54C14.3676 9.27828 14.1924 9.29556 14.0276 9.35059C13.8627 9.40562 13.7123 9.49699 13.5875 9.61795C13.4627 9.73891 13.3667 9.88637 13.3066 10.0494C13.2464 10.2125 13.2237 10.387 13.24 10.56V12.07H15.46L15.1 14.4H13.25V20C15.1399 19.7011 16.8601 18.7347 18.0985 17.2761C19.3369 15.8175 20.0115 13.9634 20 12.05Z" fill="#b9b1b1"></path> </g></svg>
                                </a>

                            </li>
                            {{-- <li class="icon-content relative">
                                <a href="https://www.github.com/" aria-label="GitHub" data-social="github"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-gray-800 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-github relative z-10" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>

                            </li> --}}
                            <li class="icon-content relative">
                                <a href="https://www.instagram.com/register900ticket?igsh=MW1lN2lzdXdyczQwcA==" aria-label="Instagram" data-social="instagram"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-gradient-to-r from-blue-500 to-pink-500 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-instagram relative z-10"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>

                            </li>
                            <li class="icon-content relative">
                                <a href="https://x.com/900Ticketing?t=3_HJOYdMVieLd_w9YJg65A&s=09" aria-label="Youtube" data-social="youtube"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-red-600 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg width="16px" height="16px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>twitter [#b9b1b1]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#b9b1b1"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#b9b1b1]"> </path> </g> </g> </g> </g></svg>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6 md:w-[50%]">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Company</h2>
                        <ul class="flex flex-col gap-y-2 font-medium text-white">
                            <li class="">
                                <a href="" class="hover:underline">About 900 Ticket</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Contact Us</a>
                            </li>

                            <li>
                                <a href="" class="hover:underline">900 Ticket Affiliate</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Refer a Customer</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Usefull Links</h2>
                        <ul class="flex flex-col gap-y-2 font-medium text-white">
                            <li>
                                <a href="" class="hover:underline">Privacy and policy</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Flights Schedules</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Advertise with us</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Hotlines</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="w-full">
                            <h2 class="mb-6 text-sm font-semibold uppercase text-white">Legal</h2>
                            <ul class="font-medium text-white">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full">

                        </div>

                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">


                <div class="text-gray-500">

                    All Rights Reserved.
                </div>

                <span class="text-sm text-gray-500 sm:text-center">© {{ date('Y') }} <a href=""
                        class="hover:underline">900Ticket™</a>.
                </span>

            </div>
        </div>
    </footer>

    <script src="{{ asset('js/admin_widget.js') }}"></script>
</body>

</html>
