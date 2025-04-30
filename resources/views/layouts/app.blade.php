<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a21ee8a7f1.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>@yield('title') - 900 Ticket</title>
    <link rel="stylesheet" href="{{ asset('css/style-min.css') }}">


    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buttonloader.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/loadingio/loading.css@v2.0.0/dist/loading.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Styles / Scripts -->
    {{-- @vite('resources/css/app.css') --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap');

        body {
            font-family: 'Figtree', sans-serif;
        }

        /* Custom Colors */
        :root {
            --red-alt-700: #b61c1c;
            --red-alt-800: #8b0003;
            --gray-600: #707070;
        }

        .glass {
            /* From https://css.glass */
            background: rgba(185, 184, 184, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(185, 184, 184, 0.3);
        }

        /* Example of how to use custom colors in a class */
        .red-alt-700 {
            background-color: var(--red-alt-700);
        }

        .red-alt-800 {
            background-color: var(--red-alt-800);
        }

        .gray-600 {
            color: var(--gray-600);
        }

        @media (max-width: 600px) {

            .input-label {
                display: block;
                width: 100%;
            }

            .input-label,
            .input {
                text-align: center !important;
            }

            .input::placeholder {
                text-align: center;
            }



        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-min.css') }}">
    <script src='https://code.jquery.com/jquery-3.6.3.js'></script>


    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
             @vite('resources/css/app.css')
         @else
           <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        @endif --}}
    <style>
        /* #side-bar{
    display: inline-block !important;
} */

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }



        .clear {
            clear: both;
        }

        .saveLog {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
        }


        .saveLoginCheckBox {
            display: block;
            cursor: pointer;
            width: 15px;
            height: 15px;
            border: 1px solid rgb(63, 3, 3);
            border-radius: 5px;
            position: relative;
            overflow: hidden;

        }

        .saveLoginCheckBox div {
            width: 60px;
            height: 60px;
            background-color: rgb(199 11 11);
            top: -52px;
            left: -52px;
            position: absolute;
            transform: rotateZ(45deg);
            z-index: 100;
            box-shadow: 0px 0px 0px 2px rgba(56, 1, 1, 0.3);
        }

        .saveLoginCheckBox input[type=checkbox]:checked+div {
            left: -10px;
            top: -10px;
        }

        .saveLoginCheckBox input[type=checkbox] {
            position: absolute;
            left: 50px;
            visibility: hidden;
        }

        .transition {
            transition: 300ms ease;
        }

        .eye-close {
            margin-top: -12px;
            background: #000;
            min-height: 1px;
            transform: rotate(-45deg);
        }

        .hero-bg {
            clip-path: ellipse(62% 99% at 51% 0%);
        }




        @media (max-width: 600px) {
            /* #side-bar{
    display: inline-block !important;
} */

            .eye-close {
                margin-top: -12px;
                background: #625a5a;
                min-height: 1px !important;
                transform: rotate(-45deg);
                z-index: 999;
                position: relative;
            }

            /* end side bar section  */


            /* .hero-bg */

            .hero-bg {
                clip-path: ellipse(79% 87% at 51% 0%) !important;
            }

            .saveLog {
                display: flex;
                align-items: center;
                gap: 10px;
                width: 100%;
                justify-content: center
            }


        }
    </style>

</head>

<body x-data="{ sideNav: false }" class="relative bg-[#FFF5F5]">

    {{-- Notification Tray --}}
    {{-- @if (session()->has('success')) --}}
    {{-- <div class="flash-message tray-success animate__animated w-[50%] px-2 py-1"> --}}
    <div class="flash-message tray-success animate__animated fixed right-0 top-[10vh] z-[999] hidden px-2 py-1">
        @if (session()->has('success'))
            <div class="flex w-max max-w-sm items-center rounded-md bg-white p-4 text-slate-900 shadow-[0_3px_10px_-3px_rgba(6,81,237,0.3)]"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 inline w-[18px] shrink-0 fill-green-600"
                    viewBox="0 0 512 512">
                    <ellipse cx="246" cy="246" data-original="#000" rx="246" ry="246" />
                    <path class="fill-white"
                        d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                        data-original="#000" />
                </svg>
                <span class="text-[15px] font-semibold tracking-wide">
                    {{ session('success') }}
                </span>
            </div>
        @elseif (session()->has('loginsuccess') && session()->has('firstname') && session()->has('lastname'))
            <div class="flex w-max max-w-sm items-center rounded-md bg-white p-4 text-slate-900 shadow-[0_3px_10px_-3px_rgba(6,81,237,0.3)]"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 inline w-[18px] shrink-0 fill-green-600"
                    viewBox="0 0 512 512">
                    <ellipse cx="246" cy="246" data-original="#000" rx="246" ry="246" />
                    <path class="fill-white"
                        d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                        data-original="#000" />
                </svg>
                <span class="text-[15px] font-semibold tracking-wide">
                    {{ session('loginsuccess') }} {{ session('firstname') }} {{ session('lastname') }} !
                </span>
            </div>
        @elseif (session()->has('regsuccess') && session()->has('firstname') && session()->has('lastname'))
            <div class="flex w-max max-w-sm items-center rounded-md bg-white p-4 text-slate-900 shadow-[0_3px_10px_-3px_rgba(6,81,237,0.3)]"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 inline w-[18px] shrink-0 fill-green-600"
                    viewBox="0 0 512 512">
                    <ellipse cx="246" cy="246" data-original="#000" rx="246" ry="246" />
                    <path class="fill-white"
                        d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                        data-original="#000" />
                </svg>
                <span class="text-[15px] font-semibold tracking-wide">
                    {{ session('regsuccess') }}
                    {{ session('firstname') }}
                    {{ session('lastname') }}
                </span>
            </div>
        @elseif (session()->has('warning'))
            <div class="flex w-max max-w-sm items-center rounded-md bg-white p-4 text-slate-900 shadow-[0_3px_10px_-3px_rgba(6,81,237,0.3)]"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 inline w-[18px] shrink-0 fill-yellow-600"
                    viewBox="0 0 128 128">
                    <path
                        d="M56.463 14.337 6.9 106.644C4.1 111.861 8.173 118 14.437 118h99.126c6.264 0 10.338-6.139 7.537-11.356L71.537 14.337c-3.106-5.783-11.968-5.783-15.074 0z" />
                    <g class="fill-white">
                        <path
                            d="M64 31.726a5.418 5.418 0 0 0-5.5 5.45l1.017 44.289A4.422 4.422 0 0 0 64 85.726a4.422 4.422 0 0 0 4.482-4.261L69.5 37.176a5.418 5.418 0 0 0-5.5-5.45z"
                            data-original="#fff" />
                        <circle cx="64" cy="100.222" r="6" data-original="#fff" />
                    </g>
                </svg>
                <span class="text-[15px] font-semibold tracking-wide">{{ session('warning') }}</span>
            </div>
        @elseif (session()->has('info'))
            <div class="flex w-max max-w-sm items-center rounded-md bg-white p-4 text-slate-900 shadow-[0_3px_10px_-3px_rgba(6,81,237,0.3)]"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 inline w-[18px] shrink-0 fill-blue-600"
                    viewBox="0 0 23.625 23.625">
                    <path
                        d="M11.812 0C5.289 0 0 5.289 0 11.812s5.289 11.813 11.812 11.813 11.813-5.29 11.813-11.813S18.335 0 11.812 0zm2.459 18.307c-.608.24-1.092.422-1.455.548a3.838 3.838 0 0 1-1.262.189c-.736 0-1.309-.18-1.717-.539s-.611-.814-.611-1.367c0-.215.015-.435.045-.659a8.23 8.23 0 0 1 .147-.759l.761-2.688c.067-.258.125-.503.171-.731.046-.23.068-.441.068-.633 0-.342-.071-.582-.212-.717-.143-.135-.412-.201-.813-.201-.196 0-.398.029-.605.09-.205.063-.383.12-.529.176l.201-.828c.498-.203.975-.377 1.43-.521a4.225 4.225 0 0 1 1.29-.218c.731 0 1.295.178 1.692.53.395.353.594.812.594 1.376 0 .117-.014.323-.041.617a4.129 4.129 0 0 1-.152.811l-.757 2.68a7.582 7.582 0 0 0-.167.736 3.892 3.892 0 0 0-.073.626c0 .356.079.599.239.728.158.129.435.194.827.194.185 0 .392-.033.626-.097.232-.064.4-.121.506-.17l-.203.827zm-.134-10.878a1.807 1.807 0 0 1-1.275.492c-.496 0-.924-.164-1.28-.492a1.57 1.57 0 0 1-.533-1.193c0-.465.18-.865.533-1.196a1.812 1.812 0 0 1 1.28-.497c.497 0 .923.165 1.275.497.353.331.53.731.53 1.196 0 .467-.177.865-.53 1.193z"
                        data-original="#030104" />
                </svg>
                <span class="text-[15px] font-semibold tracking-wide">{{ session('info') }}</span>
            </div>
        @elseif (session()->has('error'))
            <div class="flex w-max max-w-sm items-center rounded-md bg-white p-4 text-slate-900 shadow-[0_3px_10px_-3px_rgba(6,81,237,0.3)]"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 inline w-[18px] shrink-0 fill-red-600"
                    viewBox="0 0 32 32">
                    <path
                        d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                        data-original="#ea2d3f" />
                </svg>
                <span class="text-[15px] font-semibold tracking-wide">
                    <span class="text-[15px] font-semibold tracking-wide">{{ session('error') }}
                    </span>
            </div>
        @endif

        @if ($errors->any())
            <div class="flex w-max max-w-sm items-center rounded-md bg-white p-4 text-slate-900 shadow-[0_3px_10px_-3px_rgba(6,81,237,0.3)]"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 inline w-[18px] shrink-0 fill-red-600"
                    viewBox="0 0 32 32">
                    <path
                        d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                        data-original="#ea2d3f" />
                </svg>
                <span class="flex flex-col gap-1 text-start text-[12px] font-[200] text-red-700">
                    @foreach ($errors->all() as $error)
                        <span class="block">{{ $error }}</span>
                    @endforeach
                </span>
            </div>
        @endif


    </div>
    {{-- @endif --}}


    {{-- <div class="flash-message tray-fail hidden w-[50%] px-2 py-1">
        <p class="text-white">
            Your action was Successful, Welcome
            <span> John Doe</span>
        </p>
    </div> --}}




    <nav class="-mb-[125px]">
        @hasSection('header')
            @yield('header')
        @else
            <header class="sticky top-0 z-[850] w-full rounded-b-md">

                <div>
                    <div class="mx-auto flex w-[90%] items-center justify-between py-4 md:w-[80%]">
                        <div class="flex w-[50%] items-center gap-2">
                            <svg @click="sideNav = true" class="bar icons h-[35px] text-white md:hidden"
                                id="show-side-bar" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>

                            <div>
                                <a href="{{ route('dashboard') }}">
                                    <img class="w-[70px] md:w-[150px]" src="{{ asset('image/logo_alt.svg') }}"
                                        alt="900 Logo"></a>

                            </div>
                        </div>

                        <div class="flex w-[50%] justify-end gap-3">
                            <div x-data="{ langCur: false }" class="relative cursor-pointer">
                                {{-- Language & Currency --}}
                                <div>
                                    <div @click="langCur = ! langCur" class="relative flex gap-1 text-white">
                                        {{-- <img class="h-auto w-[25px] rounded-md" src="{{ asset('image/nigeria.jpg') }}"
                                            alt="lorem ipsum"> --}}

                                        <span>
                                            EN | NGN
                                        </span>
                                    </div>
                                    <div x-transition x-show="langCur" @click.outside="langCur = false"
                                        id="lang-cur"
                                        class="absolute top-[40px] z-[999] rounded-md bg-white shadow-sm">
                                        <div>

                                            <div style="display: block; color:black" class="px-2 text-black">
                                                <h2 class="mb-[5px] text-sm font-[700] text-black"
                                                    style="text-align:center;">
                                                    Select Language
                                                </h2>
                                                {{-- <input type="radio" id="en" name="lang" value="30">
                                                <label for="en">English</label>
                                                <br>
                                                <input type="radio" id="fr" name="lang" value="30">
                                                <label for="fr">French</label> --}}
                                                <div class="gtranslate_wrapper text-sm" style="text-align: center">

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div x-data="{ cart: false }" class="hidden cursor-pointer md:block">
                                {{-- Cart --}}
                                <div>
                                    <div @click="cart = !cart" class="relative flex gap-1 text-white">
                                        <img class="h-auto w-[25px] rounded-md"
                                            src="{{ asset('image/cart-white.svg') }}" alt="lorem ipsum">

                                        <span>
                                            CART
                                        </span>
                                    </div>

                                    @guest
                                        <div x-transition x-show="cart" @click.outside="cart = false"
                                            class="absolute top-[80px] z-[999] rounded-md bg-slate-50 p-2">
                                            <div>

                                                Login/Create an Account

                                            </div>

                                        </div>
                                    @endguest


                                    @auth
                                        <div x-transition x-show="cart" @click.outside="cart = false"
                                            class="absolute top-[80px] z-[999] rounded-md bg-slate-50 p-2">

                                            @if ($totalItemsCount == 0)
                                                Total Items in Cart: {{ $totalItemsCount }}
                                            @else
                                                <div>

                                                    Total Items in Cart: {{ $totalItemsCount }}

                                                </div>
                                                <a class="text-sm font-[200] underline hover:no-underline"
                                                    href="{{ route('cart.index') }}">View Items</a>
                                            @endif

                                        </div>
                                    @endauth
                                </div>
                            </div>

                            <div x-data="{ authMenu: false }" class="hidden cursor-pointer md:block">
                                <div>
                                    @guest
                                        <div @click="authMenu = !authMenu" class="relative flex gap-1 text-white">
                                            <img class="h-auto w-[25px] rounded-md"
                                                src="{{ asset('image/dropdown.svg') }}" alt="lorem ipsum">

                                        </div>
                                    @endguest
                                    @auth
                                        <div @click="authMenu = !authMenu"
                                            class="relative flex gap-1 rounded-full bg-white text-white">
                                            <img class="h-auto w-[25px] rounded-md"
                                                src="{{ asset('image/profile-alt.svg') }}" alt="lorem ipsum">

                                        </div>
                                    @endauth


                                    <div x-transition
                                        style="position: absolute !important; top: 70px !important; width: 10.5rem; z-index: 1000 !important;"
                                        x-show="authMenu" @click.outside="authMenu = false"
                                        class="absolute right-0 rounded-md bg-white p-1 text-black shadow-lg">

                                        <ul class="flex w-full flex-col items-start justify-start pl-2 text-black"
                                            style="">
                                            @guest
                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]"
                                                        href="{{ route('index.login') }}">

                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/login.svg') }}" alt="Login">


                                                        <span class="block">
                                                            Login
                                                        </span>
                                                    </a>

                                                </li>

                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]"
                                                        href="{{ route('index.register') }}">

                                                        {{-- <img class="h-[20px] w-[20px] rotate-180" src="{{asset('image/login.svg')}}" alt="Login"> --}}
                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/register.svg') }}" alt="Login">


                                                        <span class="block">
                                                            Register
                                                        </span>
                                                    </a>

                                                </li>


                                            @endguest

                                            @auth
                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type='submit'
                                                            class="flex items-center justify-start gap-[5px]">

                                                            <img class="h-[20px] w-[20px] rotate-180"
                                                                src="{{ asset('image/login.svg') }}" alt="Login">



                                                            <span class="block">
                                                                Logout
                                                            </span>

                                                        </button>
                                                    </form>
                                                </li>
                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]" href="{{route('index.transaction')}}">

                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/credit.svg') }}" alt="Login">


                                                        <span class="block">
                                                            Transaction History
                                                        </span>
                                                    </a>

                                                </li>
                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]" href="">

                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/reset.svg') }}" alt="Login">


                                                        <span class="block">
                                                            Reset Password
                                                        </span>
                                                    </a>

                                                </li>



                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]" href="">

                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/help.svg') }}" alt="Login">



                                                        <span class="block">
                                                            Support
                                                        </span>
                                                    </a>

                                                </li>



                                            @endauth

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>


            </header>
        @endif
    </nav>


    <section x-transition:enter="transition transform duration-500"
        x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition transform duration-500" x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="-translate-x-full opacity-0" x-show="sideNav"
        class="absolute top-0 z-[998] h-screen w-full md:hidden">
        <main
            class="fixed z-[999] h-full w-[80%] overflow-y-auto overflow-x-hidden bg-white p-4 shadow shadow-gray-400">


            <div class="mb-4 flex items-center justify-between gap-2 py-2">
                <div class="items-center gap-1">


                    <p class="auth-greet flex items-center gap-2">
                        <img src="{{ asset('image/sideBar/Vector (4).png') }}" alt="lorem ipsum">
                        @guest
                            Sign in to get a personalized experience
                        @endguest
                        @auth
                            Hello, {{ $firstname }}!
                        @endauth
                    </p>
                </div>

                <div @click="sideNav = false">


                    <svg class="cursor-pointer text-black" width="30" height="24"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>

            </div>

            <div class="mt-4 flex w-full flex-col gap-2 border-t border-gray-300 py-2">
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/flight.svg') }}" alt="Flights Icon">
                    <a href="/flight" class="">Book a flight</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/hotel.svg') }}" alt="Flights Icon">
                    <a href="" class="">Book a Hotel</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/ticket.svg') }}" alt="Flights Icon">
                    <a href="{{ route('event.index') }}" class="">Party Tickets</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/shortlet.svg') }}" alt="Flights Icon">
<<<<<<< HEAD
                    <a href="{{route('shortlet.index')}}" class="">Shortlet Rentals</a>
=======
                    <a href="/shortlet" class="">Shortlet Rentals</a>
>>>>>>> d16c73fbe57fedbee6e73f795673cca5bf709462
                </div>
            </div>

            <div class="mt-4 flex w-full flex-col gap-2 border-t border-gray-300 py-2">
                @guest
                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (4).png') }}" alt="Flights Icon">
                        <a href="{{ route('index.login') }}" class="">Login</a>
                    </div>
                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (4).png') }}" alt="Flights Icon">
                        <a href="{{ route('index.register') }}" class="">Create an Account</a>
                    </div>
                @endguest

                @auth




                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (3).png') }}" alt="Flights Icon">
                        <a href="{{route('cart.index')}}" class="">Manage Cart</a>
                    </div>

                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/credit.svg') }}" alt="Flights Icon">
                        <a href="{{route('index.transaction')}}" class="">Transaction History</a>
                    </div>
                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (4).png') }}" alt="Flights Icon">
                        <a href="" class="">Manage Profile</a>
                    </div>

                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/logout.svg') }}" alt="Flights Icon">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-lg" type="submit">Logout</button>
                        </form>
                    </div>

                @endauth
            </div>

            <div class="mt-4 flex w-full flex-col gap-2 border-t border-gray-300 py-2">
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/sideBar/Whatsapp.png') }}" alt="Flights Icon">
                    <a href="" class="">Reach us on Whatsapp</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (5).png') }}" alt="Flights Icon">
                    <a href="" class="">Customer Support</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (6).png') }}" alt="Flights Icon">
                    <a href="" class="">Contact Us</a>
                </div>

            </div>




        </main>
    </section>




    <section id="hero">
        @hasSection('hero')
            @yield('hero')
        @else
            <div class="relative w-full">
                {{-- hero content --}}

                <div>


                    <div class="relative">
                        {{-- hero bg --}}
                        <video autoplay muted loop
                            class="hero-bg absolute left-0 top-0 h-[62.5vh] w-full object-cover md:h-[100vh]">
                            <source src="{{ asset('image/video.webm') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        {{-- hero content --}}
                        <div
                            class="relative top-[22.5vh] z-10 flex w-full flex-col items-center justify-start gap-10 md:top-[35vh]">
                            <div class="group relative flex w-[70%] items-center md:hidden">
                                <svg class="absolute left-4 h-4 w-4 fill-black" aria-hidden="true"
                                    viewBox="0 0 24 24">
                                    <g>
                                        <path
                                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                        </path>
                                    </g>
                                </svg>
                                <input placeholder="Search" type="search"
                                    class="line-height[28px] h-10 w-full rounded-lg border-2 border-transparent bg-[#ffffff] pl-10 text-[#04030f] shadow shadow-gray-400 transition duration-300 ease-in-out focus:border-red-200 focus:outline-none" />
                            </div>

                            <div class="mx-auto flex w-[70%] flex-wrap justify-center gap-[1.5rem] md:gap-[2rem]">
                                <div
                                    class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-7 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                                    <a class="flex flex-col items-center justify-center" href="/flight">
                                        <img class="w-[35px]" src="{{ asset('image/icons/flight-alt.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="inline-block text-center text-sm font-[700]">
                                            Flight
                                        </span>
                                    </a>
                                </div>
                                <div
                                    class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-7 py-5 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                                    <a class="flex flex-col items-center justify-center" href="/hotel">
                                        <img class="w-[35px]" src="{{ asset('image/icons/hotel-alt.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="inline-block text-center text-sm font-[700]">
                                            Hotel
                                        </span>
                                    </a>
                                </div>
                                <div
                                    class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-6 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                                    <a class="flex flex-col items-center justify-center"
                                        href="{{ route('event.index') }}">
                                        <img class="w-[35px]" src="{{ asset('image/icons/ticket-alt.svg') }}"
                                            alt="lorem ipsum">
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
<<<<<<< HEAD
                                    <a class="flex flex-col items-center justify-center" href="{{route('shortlet.index')}}">
=======
                                    <a class="flex flex-col items-center justify-center" href="javascript:void(0)">
>>>>>>> d16c73fbe57fedbee6e73f795673cca5bf709462
                                        <img class="w-[35px]" src="{{ asset('image/icons/shortlet-alt.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="inline-block text-center text-sm font-[700]">
                                            Shortlet
                                        </span>
                                    </a>
                                </div>

                            </div>

                            <div class="mx-auto hidden w-[80%] p-4 md:block">
                                <div
                                    class="flex w-full flex-col rounded-md border border-gray-200 bg-gray-100 p-6 shadow shadow-gray-300">

                                    <form id="flight-form" onsubmit="return validateForm()">
                                        <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                                            <div class="flex flex-col">
                                                <label for="origin" class="mb-1">From</label>
                                                <input type="text" placeholder="City or Airport"
                                                    class="rounded border border-gray-300 p-2" id="origin"
                                                    name="origin" required>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="depart" class="mb-1">To</label>
                                                <input type="text" placeholder="City or Airport"
                                                    class="rounded border border-gray-300 p-2" id="depart"
                                                    name="depart" required>
                                            </div>
                                        </div>
                                        <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                                            <div class="flex flex-col">
                                                <label for="departure-date" class="mb-1">Depart</label>
                                                <input type="date" class="rounded border border-gray-300 p-2"
                                                    id="departure-date" name="departure-date"
                                                    onkeydown="return false" required>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="return-date" class="mb-1">Return</label>
                                                <input type="date" value=""
                                                    onchange="this.setAttribute('value', this.value)"
                                                    class="rounded border border-gray-300 p-2" name="return-date">
                                            </div>
                                        </div>
                                        <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-3">
                                            <div class="flex flex-col">
                                                <label for="adults" class="mb-1">Adults <span
                                                        class="text-xs text-gray-500">12+</span></label>
                                                <select class="rounded border border-gray-300 p-2" id="adults"
                                                    onchange="dynamicDropDown(this.value);">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="children" class="mb-1">Children <span
                                                        class="text-xs text-gray-500">2-11</span></label>
                                                <select class="rounded border border-gray-300 p-2" id="children">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="infants" class="mb-1">Infants <span
                                                        class="text-xs text-gray-500">less than 2</span></label>
                                                <select class="rounded border border-gray-300 p-2" id="infants">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                                            <div class="flex flex-col">
                                                <label for="cabin" class="mb-1">Cabin</label>
                                                <select class="rounded border border-gray-300 p-2" id="cabin">
                                                    <option value="ECONOMY">Economy</option>
                                                    <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                                    <option value="BUSINESS">Business</option>
                                                    <option value="FIRST">First</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col pt-4">
                                                <div class="flex items-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="directFlights">
                                                    <label class="ml-2" for="directFlights">Direct flights</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="rounded bg-blue-600 p-2 text-white">Search
                                                flights</button>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


            </div>
        @endif


    </section>

    <main class="flex flex-col gap-2">
        @yield('content')
    </main>

    <footer class="bg-black">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 md:w-[40%]">
                    <a href="{{ route('index') }}" class="flex items-center">
                        <img src="{{ asset('image/logo_alt.svg') }}" class="me-3 h-10" alt="900 Ticket" />
                        <span class="self-center whitespace-nowrap text-2xl font-[800] text-white">900Ticket</span>


                    </a>
                    <p class="mt-4 text-white md:text-[17px]">Enjoy simple, hassle-free Bookings with 900Ticket, Let us
                        help you easily book and reserve for the perfect experience</p>

                    <div class="w-full">
                        <h2 class="my-4 text-sm font-semibold uppercase text-white">Connect with us </h2>
                        <ul class="flex list-none items-center justify-start gap-2">
                            <li class="icon-content relative">
                                <a href="https://www.facebook.com/share/1AQitxKZkM/" aria-label="LinkedIn"
                                    data-social="linkedin"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-blue-600 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#b9b1b1">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M20 12.05C19.9813 10.5255 19.5273 9.03809 18.6915 7.76295C17.8557 6.48781 16.673 5.47804 15.2826 4.85257C13.8921 4.2271 12.3519 4.01198 10.8433 4.23253C9.33473 4.45309 7.92057 5.10013 6.7674 6.09748C5.61422 7.09482 4.77005 8.40092 4.3343 9.86195C3.89856 11.323 3.88938 12.8781 4.30786 14.3442C4.72634 15.8103 5.55504 17.1262 6.69637 18.1371C7.83769 19.148 9.24412 19.8117 10.75 20.05V14.38H8.75001V12.05H10.75V10.28C10.7037 9.86846 10.7483 9.45175 10.8807 9.05931C11.0131 8.66687 11.23 8.30827 11.5161 8.00882C11.8022 7.70936 12.1505 7.47635 12.5365 7.32624C12.9225 7.17612 13.3368 7.11255 13.75 7.14003C14.3498 7.14824 14.9482 7.20173 15.54 7.30003V9.30003H14.54C14.3676 9.27828 14.1924 9.29556 14.0276 9.35059C13.8627 9.40562 13.7123 9.49699 13.5875 9.61795C13.4627 9.73891 13.3667 9.88637 13.3066 10.0494C13.2464 10.2125 13.2237 10.387 13.24 10.56V12.07H15.46L15.1 14.4H13.25V20C15.1399 19.7011 16.8601 18.7347 18.0985 17.2761C19.3369 15.8175 20.0115 13.9634 20 12.05Z"
                                                fill="#b9b1b1"></path>
                                        </g>
                                    </svg>
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
                                <a href="https://www.instagram.com/register900ticket?igsh=MW1lN2lzdXdyczQwcA=="
                                    aria-label="Instagram" data-social="instagram"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-gradient-to-r from-blue-500 to-pink-500 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg width="16px" height="16px" viewBox="0 -0.5 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.5 5H9.5C7.29086 5 5.5 6.79086 5.5 9V15C5.5 17.2091 7.29086 19 9.5 19H15.5C17.7091 19 19.5 17.2091 19.5 15V9C19.5 6.79086 17.7091 5 15.5 5Z"
                                                stroke="#b9b1b1" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.5 15C10.8431 15 9.5 13.6569 9.5 12C9.5 10.3431 10.8431 9 12.5 9C14.1569 9 15.5 10.3431 15.5 12C15.5 12.7956 15.1839 13.5587 14.6213 14.1213C14.0587 14.6839 13.2956 15 12.5 15Z"
                                                stroke="#b9b1b1" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <rect x="15.5" y="9" width="2" height="2" rx="1"
                                                transform="rotate(-90 15.5 9)" fill="#b9b1b1"></rect>
                                            <rect x="16" y="8.5" width="1" height="1" rx="0.5"
                                                transform="rotate(-90 16 8.5)" stroke="#b9b1b1"
                                                stroke-linecap="round"></rect>
                                        </g>
                                    </svg>
                                </a>

                            </li>
                            <li class="icon-content relative">
                                <a href="https://x.com/900Ticketing?t=3_HJOYdMVieLd_w9YJg65A&s=09"
                                    aria-label="Youtube" data-social="youtube"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-red-600 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg width="16px" height="16px" viewBox="0 -2 20 20" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>twitter [#b9b1b1]</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs> </defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="Dribbble-Light-Preview"
                                                    transform="translate(-60.000000, -7521.000000)" fill="#b9b1b1">
                                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path
                                                            d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705"
                                                            id="twitter-[#b9b1b1]"> </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
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
                                <a href="{{ route('index.privacy-policy') }}" class="hover:underline">Privacy and
                                    policy</a>
                            </li>
                            <li>
                                <a href="{{ route('index.terms-and-conditions') }}" class="hover:underline">Terms and
                                    Conditions</a>
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
                                    <a href="{{ route('index.privacy-policy') }}" class="hover:underline">Privacy
                                        Policy</a>
                                </li>
                                <li>

                                    <a href="{{ route('index.terms-and-conditions') }}" class="hover:underline">Terms
                                        &amp; Conditions</a>
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

    @yield('script')




    <!-- swiper cdn -->
    {{-- route{{asset/}} --}}
    {{--
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "detect_browser_language": true,
            "languages": ["en", "fr", "it", "es", "yo", "ig", "ha", "zh-CN", "de"],
            "globe_color": "#fff",
            "wrapper_selector": ".gtranslate_wrapper",
            "alt_flags": {
                "en": "usa"
            }
        }
    </script> --}}

    {{-- <script src="https://cdn.gtranslate.net/widgets/latest/globe.js" defer></script> --}}

    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "native_language_names": true,
            "detect_browser_language": true,
            "languages": ["en", "fr"],
            "wrapper_selector": ".gtranslate_wrapper"
        }
    </script>

    <script>
        document.querySelectorAll('.copy-link').forEach(link => {
            link.addEventListener('click', async (e) => {
                e.preventDefault(); // Prevent default link behavior

                // Ensure the link has a valid href
                const currentUrl = link.getAttribute('href');

                if (currentUrl) {
                    try {
                        // Copy to clipboard
                        await navigator.clipboard.writeText(currentUrl);
                        alert("Link copied to clipboard!");
                    } catch (err) {
                        console.error("Failed to copy: ", err);
                    }
                } else {
                    console.error("Link href is undefined");
                }
            });
        });
    </script>

    <script src="https://cdn.gtranslate.net/widgets/latest/ln.js" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('.otp-form');
            const inputs = document.querySelectorAll('.otp-input');
            const submitButton = document.querySelector('.button-submit');
            const timerDisplay = document.getElementById('otp-timer');
            const requestOtpButton = document.getElementById('request-otp-button');

            const isNumberKey = (key) => /^[0-9]$/.test(key);

            const handleKeyDown = (e) => {
                if (!isNumberKey(e.key) && !['Backspace', 'Delete', 'Tab'].includes(e.key) && !e.metaKey) {
                    e.preventDefault();
                }

                if (['Delete', 'Backspace'].includes(e.key)) {
                    const index = Array.from(inputs).indexOf(e.target);
                    if (index > 0) {
                        inputs[index - 1].value = '';
                        inputs[index - 1].focus();
                    }
                }
            };

            const handleInput = (e) => {
                const index = Array.from(inputs).indexOf(e.target);
                if (e.target.value && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                } else {
                    submitButton.focus();
                }
            };

            const handleFocus = (e) => {
                e.target.select();
            };

            const handlePaste = (e) => {
                e.preventDefault();
                const text = e.clipboardData.getData('text');
                if (isNumberKey(text) && text.length === inputs.length) {
                    text.split('').forEach((digit, index) => {
                        inputs[index].value = digit;
                    });
                    submitButton.focus();
                }
            };

            const initializeInputEvents = () => {
                inputs.forEach((input) => {
                    input.addEventListener('input', handleInput);
                    input.addEventListener('keydown', handleKeyDown);
                    input.addEventListener('focus', handleFocus);
                    input.addEventListener('paste', handlePaste);
                });
            };

            const startTimer = (duration, display) => {
                let timer = duration;

                requestOtpButton.disabled = true;
                const interval = setInterval(() => {
                    const minutes = String(Math.floor(timer / 60)).padStart(2, '0');
                    const seconds = String(timer % 60).padStart(2, '0');
                    display.textContent = `${minutes}:${seconds}`;

                    if (--timer < 0) {
                        clearInterval(interval);
                        requestOtpButton.disabled = false;
                        display.textContent = "00:00";
                    }
                }, 1000);
            };

            const twoMinutes = 60 * 2; // Duration in seconds
            initializeInputEvents();
            startTimer(twoMinutes, timerDisplay);
        });
    </script>

    <script>
        // Function to show the flash message
        function showFlashMessage() {
            const flashMessage = document.querySelector('.flash-message');
            flashMessage.style.display = 'block'; // Show the message
            flashMessage.classList.add('animate__fadeInRight'); // Add animation class

            // Optionally, hide the message after a few seconds
            setTimeout(() => {
                // flashMessage.classList.remove('animate__backInRight'); // Add animation
                flashMessage.classList.add('animate__fadeOutRight'); // Add animation
                flashMessage.style.display = 'none'; // Hide the message after 3 seconds
            }, 5000);
        }

        // Call the function to show the message (you can replace this with your own trigger)
        window.onload = showFlashMessage; // Trigger on page load for demonstration

        document.addEventListener("DOMContentLoaded", function() {
            const emailInput = document.getElementById("email");
            const emailError = document.getElementById("email-error");
            const continueButton = document.getElementById("continueToPwd");
            const provideAuthEmail = document.getElementById("provideAuthEmail");
            const provideAuthPwd = document.getElementById("provideAuthPwd");
            const passwordInput = document.getElementById("password");

            const loginForm = document.getElementById("loginform");
            const registerForm = document.getElementById("registerform");
            const forcedisplay = document.querySelector(".forcedisplay");
            const loginLink = document.querySelector(".login");
            const registerLink = document.querySelector(".register");
            const continueButtons = document.querySelectorAll(".continueButton");
            const sections = [document.getElementById("sectionOne"), document.getElementById("sectionTwo"), document
                .getElementById("sectionThree"), document.getElementById("sectionFour")
            ];

            // Initially show login form
            // registerForm.classList.add("hidden");

            // Toggle between login and register forms
            loginLink.addEventListener("click", function() {
                loginForm.classList.toggle("hidden");
                registerForm.classList.toggle("hidden");
                forcedisplay.classList.toggle("forcedisplay");
            });

            registerLink.addEventListener("click", function() {
                loginForm.classList.toggle("hidden");
                registerForm.classList.toggle("hidden");
                forcedisplay.classList.toggle("forcedisplay");
            });

            // Email validation and navigation to password section
            continueButton.addEventListener("click", function() {
                const emailValue = emailInput.value;

                // Email validation
                if (!validateEmail(emailValue)) {
                    emailError.classList.remove("hidden");
                } else {
                    emailError.classList.add("hidden");
                    provideAuthEmail.classList.add("hidden");
                    provideAuthPwd.classList.remove("hidden");
                }
            });

            // Navigate through registration sections
            let currentSection = 0;
            continueButtons.forEach((button) => {
                button.addEventListener("click", function() {
                    if (currentSection < sections.length - 1) {
                        sections[currentSection].classList.add("hidden");
                        currentSection++;
                        sections[currentSection].classList.remove("hidden");
                    }
                });
            });

            // Back navigation
            document.querySelectorAll(".arrowback").forEach((backButton) => {
                backButton.addEventListener("click", function() {
                    if (currentSection > 0) {
                        sections[currentSection].classList.add("hidden");
                        currentSection--;
                        sections[currentSection].classList.remove("hidden");
                    }
                });
            });

            // Toggle password visibility
            const togglePasswords = document.querySelectorAll(".togglePassword");

            togglePasswords.forEach((togglePassword) => {
                togglePassword.addEventListener("click", function() {
                    const passwordInput = this
                        .previousElementSibling; // Assuming input is before the toggle
                    const type = passwordInput.getAttribute("type") === "password" ? "text" :
                        "password";
                    passwordInput.setAttribute("type", type);

                    const strokes = document.querySelectorAll(
                        '.stroke'); // Use class selector for strokes
                    strokes.forEach((stroke) => {
                        stroke.classList.toggle(
                            "eye-close"); // Toggle the class for each stroke
                    });
                });
            });

            // Email validation function
            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(email).toLowerCase());
            }
        });
    </script>

    {{-- <script src="{{ asset('js/widget.js') }}"></script>
    <script src="{{ asset('js/passwordValidator.js') }}"></script>
    <script src="{{ asset('js/toogles.js') }}"></script>
    <script src="{{ asset('js/routes.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
</body>

</html>
