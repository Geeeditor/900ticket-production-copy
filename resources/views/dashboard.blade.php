@extends('layouts.app')
@section('title', 'Dashboard')

@section('hero')
    <div class="relative w-full">
        @guest



            {{-- Sign in modal --}}
            <section id="authModal" style="background-color: rgba(16, 1, 1, .2)"
                class="fixed z-[997] flex h-[106%] w-full items-center justify-center">


                <div
                    class="{{ session()->has('otp-form') ? 'hidden' : '' }}  bg-white items-center justify-center gap-2  flex lg:w-[70%]   w-[85%] rounded-lg border border-gray-200  md:border-2">
                    <div class="hidden lg:block">
                        <img class="h-fit w-[600px] object-cover p-1" src="{{ asset('image/profilePoP2-v3.jpg') }}"
                            alt="random img" />
                    </div>

                    <div class="p-2">
                        <div id="loginform" class="{{ session()->has('register-form') ? 'hidden' : '' }}">



                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="closeModal ml-[90%] size-6 text-black">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>

                            <div class="mx-auto flex w-full justify-center gap-1 text-lg font-bold uppercase md:justify-start">
                                <p>Sign Up</p>
                                <p>/</p>
                                <p>Register</p>
                            </div>

                            <p class="my-2 text-center text-sm capitalize text-gray-400 md:text-left">
                                Manage your bookings with ease and <br /> enjoy members-only benefits
                            </p>

                            <form action="{{ route('modal.checkout.login') }}" method="post">
                                @csrf
                                <input type="hidden" name="redirect_to" value="back">

                                <div id="provideAuthEmail" class="flex flex-col">
                                    {{--     <span
                                    class="flex flex-col gap-1 text-center text-[12px] font-[200] text-red-700 md:text-start">

                                    <span class="block">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <span class="block">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </span> --}}


                                    </span>

                                    <label class="block text-center text-base font-bold capitalize text-black md:text-left"
                                        for="password">Provide Email Address </label>


                                    <span id="email-error"
                                        class="hidden text-center text-[12px] font-[200] text-red-700 md:text-start">
                                        Email Provided incorrect!!
                                    </span>
                                    <input id="email" name="email"
                                        class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="email"
                                        placeholder="Enter your email address" />
                                    <button type="button" id="continueToPwd"
                                        class="my-2 w-full rounded-sm bg-red-600 py-2 capitalize text-white hover:bg-red-900">Continue</button>
                                </div>
                                <div id="provideAuthPwd" class="hidden">
                                    <div class="flex flex-col">
                                        <span class="block w-full">
                                            <label
                                                class="input-label block w-full text-center font-bold capitalize md:text-left"
                                                for="password">Password</label>
                                        </span>
                                        <div class="relative">
                                            <input id="password" name="password"
                                                class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                                type="password" placeholder="Enter your password" />
                                            <div id=""
                                                class="password-visibility togglePassword absolute right-[5px] top-[17px] cursor-pointer">
                                                <img class="h-[25px]" src="{{ asset('image/eye.svg') }}"
                                                    alt="Toggle visibility">
                                                <div id="" class="stroke"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="saveLog">
                                            <label class="saveLoginCheckBox">
                                                <input id="ch1" type="checkbox" name="remember">
                                                <div class="transition"></div>
                                            </label>
                                            <p>Remember Me</p>
                                        </div>
                                        <button type="submit"
                                            class="my-2 w-full rounded-sm bg-red-600 py-2 capitalize text-white hover:bg-red-900">Login</button>
                                    </div>
                                </div>
                            </form>

                            <p class="my-2 text-center uppercase md:text-left">or</p>
                            <button
                                class="duration-600 mx-auto flex max-w-xs items-center justify-center gap-1 rounded-lg border border-gray-300 bg-white px-5 py-2 text-sm font-bold uppercase text-gray-800 transition-transform hover:scale-105 md:mx-0 md:justify-start">
                                Continue with Google
                            </button>

                            <p class="my-2 text-center text-sm md:text-left"> By signing in or registering I confirm that I
                                have read and agreed to
                                900Tickets <a class="text-red-500" href="{{route('index.terms-and-conditions')}}">terms and conditions</a> and <a
                                    class="text-red-500" href="{{route('index.privacy-policy')}}">privacy policy</a>
                            </p>
                            <div
                                class="login my-2 block cursor-pointer text-center text-sm capitalize text-red-500 underline hover:no-underline md:text-left">
                                Don't have an account? Create one now!!!
                            </div>
                        </div>
                        <p class="hidden">
                            {{ $form = true }}
                        </p>
                        @if (session()->has('register-form') || $form)
                            <style>
                                .forcedisplay {
                                    display: block !important;
                                }
                            </style>
                            <div class="{{ session()->has('register-form') ? 'forcedisplay' : 'hidden' }}" id="registerform">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="closeModal ml-[90%] size-6 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>

                                <div
                                    class="mx-auto flex w-full justify-center gap-1 text-lg font-bold uppercase md:justify-start">
                                    <p>Create an account</p>
                                </div>

                                <p class="my-2 text-center text-sm capitalize text-gray-400 md:text-left">Manage your bookings
                                    with
                                    ease and <br />
                                    enjoy members-only benefits</p>

                                <form action="{{ route('modal.checkout.register.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="redirect_to" value="back">
                                    <div id="sectionOne" class="flex flex-col">
                                        <label class="text-center font-bold capitalize md:text-left">First Name</label>
                                        <input value="{{ old('firstname') }}" name="firstname"
                                            class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                            type="text" placeholder="Enter your First Name" />
                                        <label class="text-center font-bold capitalize md:text-left">Last Name</label>
                                        <input value="{{ old('lastname') }}" name="lastname"
                                            class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                            type="text" placeholder="Enter your Last Name" />
                                        <button type="button"
                                            class="continueButton my-2 w-full rounded-sm bg-red-600 py-2 capitalize text-white hover:bg-red-900">Continue</button>
                                    </div>

                                    <div id="sectionTwo" class="hidden flex-col">
                                        <div class="flex flex-col">
                                            <label class="text-center font-bold capitalize md:text-left">Email Address</label>
                                            <input value="{{ old('email') }}" name="email"
                                                class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                                type="email" placeholder="Enter your Email" />
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="text-center font-bold capitalize md:text-left">Contact</label>
                                            <input name="phone"
                                                class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                                type="text" value="{{ old('phone') }}"
                                                placeholder="Enter your Phone Number" />
                                        </div>
                                        <button type="button"
                                            class="continueButton my-2 w-full rounded-sm bg-red-600 py-2 capitalize text-white hover:bg-red-900">Continue</button>
                                        <div class="arrowback text-back input-label cursor-pointer">← Back</div>
                                    </div>

                                    <div id="sectionThree" class="hidden flex-col">
                                        <label class="input-label text-center font-bold capitalize md:text-left">House
                                            Address</label>
                                        <input name="address"
                                            class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                            value="{{ old('address') }}" type="text"
                                            placeholder="Provide your Residential Address" /><label
                                            class="input-label text-center font-bold capitalize md:text-left">Password</label>
                                        <div class="relative">

                                            <input id="password" name="password"
                                                class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                                type="password" placeholder="Enter your password" />
                                            <div id=""
                                                class="password-visibility togglePassword absolute right-[5px] top-[17px] cursor-pointer">
                                                <img class="h-[25px]" src="{{ asset('image/eye.svg') }}"
                                                    alt="Toggle visibility">
                                                <div id="" class="stroke"></div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="continueButton my-2 w-full rounded-sm bg-red-600 py-2 capitalize text-white hover:bg-red-900">Continue</button>
                                        <div class="arrowback input-label cursor-pointer text-black">← Back</div>
                                    </div>

                                    <div id="sectionFour" class="hidden flex-col">
                                        <label class="input-label text-center font-bold capitalize md:text-left">Confirm
                                            Password</label>
                                        <div class="relative">

                                            <input id="password" name="password"
                                                class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                                type="password" placeholder="Confirm your password" />
                                            <div id=""
                                                class="password-visibility togglePassword absolute right-[5px] top-[17px] cursor-pointer">
                                                <img class="h-[25px]" src="{{ asset('image/eye.svg') }}"
                                                    alt="Toggle visibility">
                                                <div id="" class="stroke"></div>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="my-2 w-full rounded-sm bg-red-600 py-2 capitalize text-white hover:bg-red-900">Create
                                            Account</button>
                                        <div class="arrowback input-label cursor-pointer text-black">← Back</div>
                                    </div>
                                </form>

                                <p class="my-2 text-center uppercase md:text-left">or</p>
                                <button
                                    class="duration-600 mx-auto flex max-w-xs items-center justify-center gap-1 rounded-lg border border-gray-300 bg-white px-5 py-2 text-sm font-bold uppercase text-gray-800 transition-transform hover:scale-105 md:mx-0 md:justify-start">
                                    Continue with Google
                                </button>

                                <p class="my-2 text-center text-sm md:text-left"> By signing in or registering I confirm that I
                                    have read and agreed to
                                    900Tickets <a class="text-red-500" href="{{route('index.privacy-policy')}}">terms and conditions</a> and <a
                                        class="text-red-500" href="{{route('index.terms-and-conditions')}}">privacy policy</a>
                                </p>
                                <div
                                    class="register my-2 block cursor-pointer text-center text-sm capitalize text-red-500 underline hover:no-underline md:text-left">
                                    Already have an account? Sign in
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
                @if (session()->has('otp-form'))
                    <div
                        class="flex w-[85%] items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white md:border-2 lg:w-[70%]">
                        <div class="hidden lg:block">
                            <img class="h-fit w-[600px] object-cover p-1" src="{{ asset('image/profilePoP2-v3.jpg') }}"
                                alt="random img" />
                        </div>


                        <div class="">
                            {{-- <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="closeModal ml-[90%] size-6 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg> --}}
                            <div class="mx-auto rounded-xl bg-white px-4 py-10 text-center shadow sm:px-8">
                                <section class="mb-8">
                                    <h1 class="mb-1 text-2xl font-bold">Email Verification</h1>
                                    <p class="text-[15px] text-slate-500">Enter the 6-digit verification code that was sent to
                                        your
                                        email.</p>
                                    <div>
                                        @if (session('message'))
                                            <div>
                                                <strong style="color: #7a0909">{{ session('message') }}</strong>

                                            </div>
                                        @endif
                                    </div>
                                </section>
                                <form method="post" action="{{ route('modal.checkout.register.otp.store') }}"
                                    class="otp-form">
                                    @csrf
                                    <div class="flex items-center justify-center gap-3">
                                        <input type="hidden" name="redirect_to" value="back">
                                        <input type="text" name="otp1"
                                            class="otp-input h-[45px] w-[45px] appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100 md:h-14 md:w-14"
                                            pattern="\d*" maxlength="1" required />
                                        <input type="text" name="otp2"
                                            class="otp-input h-[45px] w-[45px] appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100 md:h-14 md:w-14"
                                            pattern="\d*" maxlength="1" required />
                                        <input type="text" name="otp3"
                                            class="otp-input h-[45px] w-[45px] appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100 md:h-14 md:w-14"
                                            pattern="\d*" maxlength="1" required />
                                        <input type="text" name="otp4"
                                            class="otp-input h-[45px] w-[45px] appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100 md:h-14 md:w-14"
                                            pattern="\d*" maxlength="1" required />
                                        <input type="text" name="otp5"
                                            class="otp-input h-[45px] w-[45px] appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100 md:h-14 md:w-14"
                                            pattern="\d*" maxlength="1" required />
                                        <input type="text" name="otp6"
                                            class="otp-input h-[45px] w-[45px] appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100 md:h-14 md:w-14"
                                            pattern="\d*" maxlength="1" required />


                                    </div>
                                    <div class="mx-auto mt-4 max-w-[260px]">
                                        <button type="submit"
                                            class="button-submit inline-flex w-full justify-center whitespace-nowrap rounded-lg bg-red-700 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 transition-colors duration-150 hover:bg-red-900 focus:outline-none focus:ring focus:ring-indigo-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300">
                                            Verify Account
                                        </button>
                                    </div>
                                </form>
                                <form class="my-2" action="{{ route('modal.checkout.register.otp.resend') }}"
                                    method="post">
                                    @csrf
                                    <div class="text-sm text-gray-600">You can get a new OTP in
                                        <span id="otp-timer">00:00</span>
                                        <button type="submit" id="request-otp-button"
                                            class="text-red-400 underline hover:text-red-500" disabled>Request
                                            OTP</button>
                                    </div>
                                </form>
                                <a href="{{ url()->previous() }}" class="text-sm text-gray-500"><i
                                        class="fa-solid fa-arrow-left-long">

                                    </i> Back</a>
                                {{-- <div class="mt-4 text-sm text-slate-500">Didn't receive code? <a class="font-medium text-indigo-500 hover:text-indigo-600" href="#0">Resend</a></div> --}}
                            </div>
                        </div>



                    </div>
                @endif

            </section>
            <!-- sign up model section end -->
        @endguest
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
                        <svg class="absolute left-4 h-4 w-4 fill-black" aria-hidden="true" viewBox="0 0 24 24">
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
                                <img class="w-[35px]" src="{{ asset('image/icons/flight-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Flight
                                </span>
                            </a>
                        </div>
                        <div
                            class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-7 py-5 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                            <a class="flex flex-col items-center justify-center" href="/hotel">
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
                                            class="rounded border border-gray-300 p-2" id="origin" name="origin"
                                            required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="depart" class="mb-1">To</label>
                                        <input type="text" placeholder="City or Airport"
                                            class="rounded border border-gray-300 p-2" id="depart" name="depart"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                                    <div class="flex flex-col">
                                        <label for="departure-date" class="mb-1">Depart</label>
                                        <input type="date" class="rounded border border-gray-300 p-2"
                                            id="departure-date" name="departure-date" onkeydown="return false" required>
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
                                            <input class="form-check-input" type="checkbox" id="directFlights">
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

@endsection

@section('content')

    <main class="mt-[235px]">


        <section class="mb-6 mt-2">
            <style>
                .banner {
                    padding: 1rem;
                    display: grid;
                    grid-template-columns: repeat(10, 50vw);
                    grid-template-rows: 1fr;
                    grid-column-gap: 1rem;
                    grid-row-gap: 1rem;
                    overflow: scroll;
                    height: 50vh;
                    scroll-snap-type: both mandatory;
                    scroll-padding: 1rem;
                }

                @media (max-width: 650px) {


                    .banner {
                        padding: 1rem;
                        display: grid;
                        grid-template-columns: repeat(10, 80vw);
                        grid-template-rows: 1fr;
                        grid-column-gap: 1rem;
                        grid-row-gap: 1rem;
                        overflow: scroll;
                        height: 25vh;
                        scroll-snap-type: both mandatory;
                        scroll-padding: 1rem;
                    }

                }

                .active {
                    scroll-snap-type: unset;
                }

                .banner-item {
                    scroll-snap-align: center;
                    display: inline-block;
                    border-radius: 3px;
                    font-size: 0;
                }
            </style>

            <ul class="banner">

                <li class="banner-item" style="background: #f6bd60;">
                    <img class="h-full w-auto object-contain"
                        src="{{ asset('image/banner/AirportTransfer-v3-Recovered.jpg') }}" alt="">
                </li>
                <li class="banner-item" style="background: #f7ede2;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner1.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f5cac3;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner3.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #84a59d;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner4.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f28482;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner5.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f6bd60;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner6.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f7ede2;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner7.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f5cac3;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner8.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #84a59d;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner9.webp') }}"
                        alt="">
                </li>

            </ul>

            <script>
                const slider = document.querySelector('.banner');
                let isDown = false;
                let startX;
                let scrollLeft;

                slider.addEventListener('mousedown', e => {
                    isDown = true;
                    slider.classList.add('active');
                    startX = e.pageX - slider.offsetLeft;
                    scrollLeft = slider.scrollLeft;
                });
                slider.addEventListener('mouseleave', _ => {
                    isDown = false;
                    slider.classList.remove('active');
                });
                slider.addEventListener('mouseup', _ => {
                    isDown = false;
                    slider.classList.remove('active');
                });
                slider.addEventListener('mousemove', e => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - slider.offsetLeft;
                    const SCROLL_SPEED = 3;
                    const walk = (x - startX) * SCROLL_SPEED;
                    slider.scrollLeft = scrollLeft - walk;
                });
            </script>

        </section>

        <section class="mx-auto my-3 block w-[90%] md:hidden md:w-[80%]">
            <div class="flex flex-col gap-1 rounded-md border border-gray-200 bg-white px-5 py-4 shadow shadow-gray-300">
                <div class="flex items-center gap-2 bg-transparent">
                    <img src="{{ asset('image/Rectangle-11.jpg') }}" alt="lorem ipsum">
                    <div>
                        <h3 class="text-[15.5px] font-[700]">
                            Exclusive Holiday
                        </h3>
                        <p class="text-[13.5px] font-[500]">
                            Experience an exciting holiday at affordable prices
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-2 bg-transparent">
                    <img src="{{ asset('image/Rectangle-12.jpg') }}" alt="lorem ipsum">
                    <div>
                        <h3 class="text-[15.5px] font-[700]">
                            Manage Booking
                        </h3>
                        <p class="text-[13.5px] font-[500]">
                            Experience an exciting holiday at affordable prices
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-2 bg-transparent">
                    <img src="{{ asset('image/Rectangle-13.jpg') }}" alt="lorem ipsum">
                    <div>
                        <h3 class="text-[15.5px] font-[700]">
                            Travel Blog
                        </h3>
                        <p class="text-[13.5px] font-[500]">
                            Experience an exciting holiday at affordable prices
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="mx-auto my-3 hidden w-[85%] md:block md:w-[80%]">
            <div class="flex justify-between">
                <div class="flex w-1/4 flex-col items-center justify-center gap-2">
                    <img class="max-h-[] w-auto" src="{{ asset('image/Book-1-1-1.png') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-[800]">Look No Further</h4>
                        <p class="mx-auto w-[75%] font-[500] capitalize">Search all travel deals, in one go</p>
                    </div>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center gap-2">
                    <img class="max-h-[] w-auto" src="{{ asset('image/Book-1-2.png') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-[800]">Reliable Shopping</h4>
                        <p class="mx-auto w-[75%] font-[500] capitalize">No hidden charges or taxes</p>
                    </div>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center gap-2">
                    <img class="max-h-[] w-auto" src="{{ asset('image/Book-1-3.png') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-[800]">Instant Booking</h4>
                        <p class="mx-auto w-[75%] font-[500] capitalize">Booking with just few clicks</p>
                    </div>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center gap-2">
                    <img class="max-h-[] w-auto" src="{{ asset('image/Book-1-4.png') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-[800]">Easy Payout</h4>
                        <p class="mx-auto w-[75%] font-[500] capitalize">Search all travel deals, in one go</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto my-3 w-[90%] md:w-[80%]">
            <div>
                <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Popular Places</h2>

                {{-- Popular Places Flex --}}
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-3">
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full items-center gap-1">

                                <div class="w-3/4">
                                    <h4 class="text-sm">Best Deal</h4>
                                    <p class="flex gap-1">
                                        <span class="block h-auto w-1/3 truncate">Lagossssssssssssssssss</span>
                                        <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="block h-auto w-1/3 truncate">London</span>
                                    </p>
                                </div>

                                <div class="flex h-[70%] w-1/4 items-center justify-center rounded-full bg-red-700 p-2">
                                    <a href="javascript:void(0)">
                                        <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                            alt="lorem ipsum">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full items-center gap-1">

                                <div class="w-3/4">
                                    <h4 class="text-sm">Best Deal</h4>
                                    <p class="flex gap-1">
                                        <span class="block h-auto w-1/3 truncate">Lagossssssssssssssssss</span>
                                        <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="block h-auto w-1/3 truncate">London</span>
                                    </p>
                                </div>

                                <div class="flex h-[70%] w-1/4 items-center justify-center rounded-full bg-red-700 p-2">
                                    <a href="javascript:void(0)">
                                        <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                            alt="lorem ipsum">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full items-center gap-1">

                                <div class="w-3/4">
                                    <h4 class="text-sm">Best Deal</h4>
                                    <p class="flex gap-1">
                                        <span class="block h-auto w-1/3 truncate">Lagossssssssssssssssss</span>
                                        <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="block h-auto w-1/3 truncate">London</span>
                                    </p>
                                </div>

                                <div class="flex h-[70%] w-1/4 items-center justify-center rounded-full bg-red-700 p-2">
                                    <a href="javascript:void(0)">
                                        <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                            alt="lorem ipsum">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full items-center gap-1">

                                <div class="w-3/4">
                                    <h4 class="text-sm">Best Deal</h4>
                                    <p class="flex gap-1">
                                        <span class="block h-auto w-1/3 truncate">Lagossssssssssssssssss</span>
                                        <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="block h-auto w-1/3 truncate">London</span>
                                    </p>
                                </div>

                                <div class="flex h-[70%] w-1/4 items-center justify-center rounded-full bg-red-700 p-2">
                                    <a href="javascript:void(0)">
                                        <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                            alt="lorem ipsum">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto my-3 w-[90%] md:w-[80%]">
            <div>
                <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Hotel in Trending Destination</h2>

                {{-- Popular Places Flex --}}
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-3">
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full flex-col items-center gap-1">

                                <div class="w-full">
                                    <h4 class="text-base">Echo Hotel Lagos</h4>
                                    <p class="flex gap-1 text-sm font-[400]">
                                        Wifi | 24/7 Power | Netflix
                                    </p>
                                </div>

                                <div class="w-full">
                                    <div class="flex items-center justify-start">
                                        <style>
                                            .fas .far {
                                                font-size: 24px;
                                                /* Adjust size as needed */
                                                margin-right: 5px;
                                                /* Add spacing */
                                            }

                                            @media (max-width: 650px) {
                                                .fas .far {
                                                    font-size: 14px !important;
                                                }
                                            }
                                        </style>
                                        <div>
                                            @php
                                                $rating = 2.5; // Example rating value from the database
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($rating >= $i)
                                                    <i class="fas fa-star" style="color: rgb(255, 0, 0);"></i>
                                                    <!-- Filled star -->
                                                @elseif($rating > $i - 1 && $rating < $i)
                                                    <i class="fas fa-star-half-alt" style="color: rgb(255, 0, 0); "></i>
                                                    <!-- Half star -->
                                                @else
                                                    <i class="far fa-star"></i> <!-- Empty star -->
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                        <span class="font-300 text-sm">per night</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Reserve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full flex-col items-center gap-1">

                                <div class="w-full">
                                    <h4 class="text-base">Echo Hotel Lagos</h4>
                                    <p class="flex gap-1 text-sm font-[400]">
                                        Wifi | 24/7 Power | Netflix
                                    </p>
                                </div>

                                <div class="w-full">
                                    <div class="flex items-center justify-start">
                                        <style>
                                            .fas .far {
                                                font-size: 24px;
                                                /* Adjust size as needed */
                                                margin-right: 5px;
                                                /* Add spacing */
                                            }

                                            @media (max-width: 650px) {
                                                .fas .far {
                                                    font-size: 14px !important;
                                                }
                                            }
                                        </style>
                                        <div>
                                            @php
                                                $rating = 2.5; // Example rating value from the database
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($rating >= $i)
                                                    <i class="fas fa-star" style="color: rgb(255, 0, 0);"></i>
                                                    <!-- Filled star -->
                                                @elseif($rating > $i - 1 && $rating < $i)
                                                    <i class="fas fa-star-half-alt" style="color: rgb(255, 0, 0); "></i>
                                                    <!-- Half star -->
                                                @else
                                                    <i class="far fa-star"></i> <!-- Empty star -->
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                        <span class="font-300 text-sm">per night</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Reserve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full flex-col items-center gap-1">

                                <div class="w-full">
                                    <h4 class="text-base">Echo Hotel Lagos</h4>
                                    <p class="flex gap-1 text-sm font-[400]">
                                        Wifi | 24/7 Power | Netflix
                                    </p>
                                </div>

                                <div class="w-full">
                                    <div class="flex items-center justify-start">
                                        <style>
                                            .fas .far {
                                                font-size: 24px;
                                                /* Adjust size as needed */
                                                margin-right: 5px;
                                                /* Add spacing */
                                            }

                                            @media (max-width: 650px) {
                                                .fas .far {
                                                    font-size: 14px !important;
                                                }
                                            }
                                        </style>
                                        <div>
                                            @php
                                                $rating = 2.5; // Example rating value from the database
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($rating >= $i)
                                                    <i class="fas fa-star" style="color: rgb(255, 0, 0);"></i>
                                                    <!-- Filled star -->
                                                @elseif($rating > $i - 1 && $rating < $i)
                                                    <i class="fas fa-star-half-alt" style="color: rgb(255, 0, 0); "></i>
                                                    <!-- Half star -->
                                                @else
                                                    <i class="far fa-star"></i> <!-- Empty star -->
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                        <span class="font-300 text-sm">per night</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Reserve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full flex-col items-center gap-1">

                                <div class="w-full">
                                    <h4 class="text-base">Echo Hotel Lagos</h4>
                                    <p class="flex gap-1 text-sm font-[400]">
                                        Wifi | 24/7 Power | Netflix
                                    </p>
                                </div>

                                <div class="w-full">
                                    <div class="flex items-center justify-start">
                                        <style>
                                            .fas .far {
                                                font-size: 24px;
                                                /* Adjust size as needed */
                                                margin-right: 5px;
                                                /* Add spacing */
                                            }

                                            @media (max-width: 650px) {
                                                .fas .far {
                                                    font-size: 14px !important;
                                                }
                                            }
                                        </style>
                                        <div>
                                            @php
                                                $rating = 2.5; // Example rating value from the database
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($rating >= $i)
                                                    <i class="fas fa-star" style="color: rgb(255, 0, 0);"></i>
                                                    <!-- Filled star -->
                                                @elseif($rating > $i - 1 && $rating < $i)
                                                    <i class="fas fa-star-half-alt" style="color: rgb(255, 0, 0); "></i>
                                                    <!-- Half star -->
                                                @else
                                                    <i class="far fa-star"></i> <!-- Empty star -->
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                        <span class="font-300 text-sm">per night</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Reserve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="mx-auto my-3 w-[90%] md:w-[80%]">
            <div>
                <div class="flex justify-between">
                    <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Top Event of the week</h2>

                    <span>
                        {{ $events->links() }}
                    </span>
                </div>

                {{-- Popular Places Flex --}}
                <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-3">
                    @forelse ($events as $event)
                        <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">



                            <div class="bg-blue-gray-500 shadow-blue-gray-500/40 h-40 overflow-hidden rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg">
                                @if ($event->hero_image !== null && $event->hero_image !== '')
                                    <img class="h-full w-full object-cover"
                                        src="{{ asset('image/events/' . basename($event->hero_image)) }}"
                                        alt="lorem ipsum">
                                @else
                                    <img class="h-full w-full object-cover"
                                        src="{{ asset('image/imgdefault.png') }}" alt="lorem ipsum">
                                @endif

                            </div>
                            <div class="px-2 py-2">
                                <div class="flex w-full flex-row items-center gap-1">

                                    <div class="w-[80%]">
                                        <h4 class="text-base font-[800]">{{ $event->title }} </h4>

                                    </div>

                                    <div
                                        class="copy-link flex h-[70%] w-[20%] items-center justify-center rounded-full bg-red-700 p-2">
                                        <a href="javascript:void(0)">

                                            <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                                alt="lorem ipsum">
                                        </a>
                                    </div>

                                </div>
                                <div class="text-sm">
                                    <p class="flex items-center gap-1 font-thin">
                                        <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                        <span>{{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }}</span>
                                    </p>
                                    <p class="flex items-center gap-1 font-thin">
                                        <img class="w-[15px]" src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                                        <span>{{ \Carbon\Carbon::parse($event->time)->format('H:i A') }}</span>WAT
                                    </p>
                                    <p class="flex items-center gap-1 font-thin">
                                        <img class="w-[15px]" src="{{ asset('image/location.svg') }}" alt="lorem ipsum">
                                        <span>{{ $event->location }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="px-2 py-1">
                                <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                    <div class="w-[55%]">
                                        <h4 class="text-sm">
                                            Base Ticket Fee
                                        </h4>
                                        <p class="text-base">
                                            <span class="currency">
                                                ₦
                                            </span>
                                            @if ($event->regular_ticket_price == null)
                                                <span>0.00</span>
                                            @else
                                                <span>{{ number_format($event->regular_ticket_price, 2) }}

                                                </span>
                                            @endif
                                        </p>
                                    </div>

                                    <div class="w-[45%] items-center justify-end text-sm md:flex">
                                        <a href="{{ route('event.metadata', $event->id) }}"
                                            class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                            Get Ticket
                                            <i class="fa-solid fa-arrow-right text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @empty
                        <div class="col-span-4 w-full py-5 md:py-10">
                            <div class="flex flex-col items-center justify-center gap-0">
                                <img src="{{ asset('image/error.svg') }}" alt="lorem ipsum">
                                <span class="text-1xl py-1 font-bold capitalize md:text-2xl">
                                    Sorry no Party Ticket Available
                                </span>
                                <div class="font-thin">
                                    <span>
                                        Stay tuned..
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforelse



                </div>

            </div>
        </section>

        <section class="bg-white">
            @guest

                <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center">
                        <h2
                            class="mb-4 text-3xl font-extrabold uppercase leading-tight tracking-tight text-gray-900 md:text-4xl md:capitalize">
                            The
                            journey
                            of a thousand miles begins with a footstep</h2>
                        <p class="font-light text-gray-500 md:text-lg">Let 900ticket help with your journey</p>
                        <p class="mt-2 hidden justify-center gap-1 text-center text-sm font-[300] text-gray-400 md:flex">
                            <span>Book Flight</span>
                            <span>| Make Hotel Reservation |</span>
                            <span> Pay For Party Ticket |</span>
                            <span>Find Shortlet Services</span>
                        </p>
                        <div class="mt-6">
                            <a href="{{ route('index.login') }}"
                                class="mb-2 mr-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300">LOGIN/CREATE
                                ACCOUNT</a>
                        </div>
                    </div>
                </div>

            @endguest

            @auth

                <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center">
                        <h2
                            class="mb-4 text-3xl font-extrabold uppercase leading-tight tracking-tight text-gray-900 md:text-4xl md:capitalize">
                            The
                            journey
                            of a thousand miles begins with a footstep</h2>
                        <p class="font-light text-gray-500 md:text-lg">Let 900ticket help with your journey</p>
                        <p class="mt-2 hidden justify-center gap-1 text-center text-sm font-[300] text-gray-400 md:flex">
                            <span>Book Flight</span>
                            <span>| Make Hotel Reservation |</span>
                            <span> Pay For Party Ticket |</span>
                            <span>Find Shortlet Services</span>
                        </p>
                        <div class="mt-6">
                            <a href="/#hero"
                                class="mb-2 mr-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300">ADD
                                AN ITEM TO CART TO BEING YOUR JOURNEY</a>
                        </div>
                    </div>
                </div>

            @endauth
        </section>


        <section class="mx-auto my-3 w-[90%] md:w-[80%]">
            <div>
                <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Top stories of the week</h2>

                {{-- Popular Places Flex --}}
                <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-3">
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class=" ">
                            <a href="#">
                                <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                    alt="">
                            </a>
                            <div class="px-5 py-2">
                                <p class="mb-2 flex items-center gap-1 text-sm font-thin">
                                    <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                    <span>Dec 06 2025</span>
                                </p>

                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 truncate font-normal text-gray-700">Here are the biggest enterprise
                                    technology
                                    acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300"
                                    href="#">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-400 px-5 py-2">
                            <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                            <p class="text-sm font-thin text-gray-700">
                                Travel Blog
                            </p>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class=" ">
                            <a href="#">
                                <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                    alt="">
                            </a>
                            <div class="px-5 py-2">
                                <p class="mb-2 flex items-center gap-1 text-sm font-thin">
                                    <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                    <span>Dec 06 2025</span>
                                </p>

                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 truncate font-normal text-gray-700">Here are the biggest enterprise
                                    technology
                                    acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300"
                                    href="#">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-400 px-5 py-2">
                            <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                            <p class="text-sm font-thin text-gray-700">
                                Travel Blog
                            </p>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class=" ">
                            <a href="#">
                                <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                    alt="">
                            </a>
                            <div class="px-5 py-2">
                                <p class="mb-2 flex items-center gap-1 text-sm font-thin">
                                    <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                    <span>Dec 06 2025</span>
                                </p>

                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 truncate font-normal text-gray-700">Here are the biggest enterprise
                                    technology
                                    acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300"
                                    href="#">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-400 px-5 py-2">
                            <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                            <p class="text-sm font-thin text-gray-700">
                                Travel Blog
                            </p>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <section class="my-3 flex flex-col gap-2 bg-white py-6 md:py-8">
            <div class=" ">

                <div class="mx-auto flex w-[90%] flex-col gap-2 md:w-[80%]">

                    <div class="flex flex-col gap-2">
                        <h2
                            class="text-dark-grey-900 mb-3 w-full text-center text-2xl font-extrabold uppercase leading-tight tracking-wider md:capitalize lg:text-4xl">
                            900ticket is the best place to book your flight
                        </h2>

                        <div class="mx-auto flex w-[90%] flex-col gap-2 md:w-full">
                            <div x-data="{ chevDownOne: false }">
                                <div class="flex justify-between">
                                    <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Flights to top cities from
                                        Nigeria</h3>
                                    <i @click="chevDownOne = !chevDownOne" :class="{ 'rotate-90': chevDownOne }"
                                        class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                                </div>
                                <div x-transition x-show="chevDownOne" @click.outside="chevDownOne = false ">
                                    <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a>
                                        </li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div x-data="{ chevDownTwo: false }">
                                <div class="flex justify-between">
                                    <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Top International Destination
                                    </h3>
                                    <i @click="chevDownTwo = !chevDownTwo" :class="{ 'rotate-90': chevDownTwo }"
                                        class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                                </div>
                                <div x-transition x-show="chevDownTwo" @click.outside="chevDownTwo = false ">
                                    <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a>
                                        </li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div x-data="{ chevDownThree: false }">
                                <div class="flex justify-between">
                                    <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Flight to top countries</h3>
                                    <i @click="chevDownThree = !chevDownThree" :class="{ 'rotate-90': chevDownThree }"
                                        class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                                </div>
                                <div x-transition x-show="chevDownThree" @click.outside="chevDownThree = false ">

                                    <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a>
                                        </li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mx-auto my-4 flex flex-col items-center gap-8 md:gap-16">
                        <div class="flex flex-col md:gap-16">
                            <div class="flex flex-col gap-2 text-center">
                                <h2
                                    class="text-dark-grey-900 text-2xl font-extrabold uppercase leading-tight md:mb-2 md:text-4xl md:capitalize lg:text-4xl">
                                    How 900Ticket works?
                                </h2>
                                <p
                                    class="mt-2 hidden justify-center gap-1 text-center text-sm font-[300] text-gray-400 md:flex">
                                    <span>Book Flight</span>
                                    <span>| Make Hotel Reservation |</span>
                                    <span> Pay For Party Ticket |</span>
                                    <span>Find Shortlet Services</span>
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex w-full flex-col items-center justify-between gap-y-5 md:gap-y-10 lg:flex-row lg:gap-x-8 lg:gap-y-0 xl:gap-x-10">
                            <div class="flex items-start gap-4">
                                <div
                                    class="text-purple-blue-500 flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-red-300 bg-red-700 text-white">
                                    <span class="text-base font-bold leading-7 text-white">1</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-dark-grey-900 mb-2 text-base font-bold leading-tight">
                                        Create your Account
                                    </h3>
                                    <p class="text-dark-grey-600 text-base font-medium leading-7">
                                        Sign up using your work/personal mail for a free account to get started.
                                    </p>
                                </div>
                            </div>
                            <div class="rotate-90 md:rotate-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42"
                                    viewBox="0 0 43 42" fill="none">
                                    <g clip-path="url(#clip0_3346_6663)">
                                        <path
                                            d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                            fill="#b61c1c" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3346_6663">
                                            <rect width="42" height="42" fill="white"
                                                transform="translate(0.666748)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="text-purple-blue-500 flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-red-300 bg-red-700 text-white">
                                    <span class="text-base font-bold leading-7">2</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-dark-grey-900 mb-2 text-base font-bold leading-tight">
                                        Setup your Account
                                    </h3>
                                    <p class="text-dark-grey-600 text-base font-medium leading-7">
                                        Verify your email address and set up your profile to get started with making orders.
                                    </p>
                                </div>
                            </div>
                            <div class="rotate-90 lg:rotate-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42"
                                    viewBox="0 0 43 42" fill="none">
                                    <g clip-path="url(#clip0_3346_6663)">
                                        <path
                                            d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                            fill="#b61c1c" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3346_6663">
                                            <rect width="42" height="42" fill="white"
                                                transform="translate(0.666748)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="text-purple-blue-500 flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-red-300 bg-red-700 text-white">
                                    <span class="text-base font-bold leading-7">3</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-dark-grey-900 mb-2 text-base font-bold leading-tight">
                                        Start Shopping with 900Ticket
                                    </h3>
                                    <p class="text-dark-grey-600 text-base font-medium leading-7">
                                        Browse through our wide range of products and services to find what you need.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="flex flex-col gap-2">

                <h2
                    class="text-dark-grey-900 text-center text-2xl font-extrabold uppercase leading-tight md:capitalize lg:text-4xl">
                    Here's How We Stack Up
                </h2>

                <div class="mx-8 grid grid-cols-2 place-items-center items-center gap-2 lg:flex">
                    <div class="flex w-[80%] flex-col items-center justify-center p-1">
                        <img class="my-2 w-[30%]" src="{{ asset('image/icons/iot.webp') }}" alt="robot img" />
                        <div class="text-center">
                            {{-- <h2 class="text-[1rem] capitalize text-gray-900">102+</h2> --}}
                            <p class="capitalize text-gray-500">
                                Trusted by over <br>+<span class="count-up">6000</span>
                            </p>
                        </div>
                    </div>
                    <div class="flex w-[80%] flex-col items-center justify-center p-1">
                        <img class="my-2 w-[30%]" src="{{ asset('image/icons/happyclients.webp') }}" alt="robot img" />
                        <div class="text-center">
                            {{-- <h2 class="text-[1rem] capitalize text-gray-900">2700+</h2> --}}
                             <p class="capitalize text-gray-500">
                                Satisfied Clients <br> +<span class="count-up">2900</span>
                            </p>
                        </div>
                    </div>
                    <div class="flex w-[80%] flex-col items-center justify-center p-1">
                        <img class="my-2 w-[35%]" src="{{ asset('image/icons/10753196.webp') }}" alt="robot img" />
                        <div class="text-center">
                            {{-- <h2 class="text-[1rem] capitalize text-gray-900">24/7</h2> --}}
                             <p class="capitalize text-gray-500">
                                24/7 Customer <br> service support
                            </p>
                        </div>
                    </div>
                    <div class="flex w-[80%] flex-col items-center justify-center p-1">
                        <img class="my-2 w-[30%]" src="{{ asset('image/icons/datascience.webp') }}" alt="robot img" />
                        <div class="text-center">

                             <p class="capitalize text-gray-500">
                               Salesforce
                               <span class="count-up">
                                    200
                                </span>+
                            </p>
                        </div>
                    </div>
                    <script>
                       document.addEventListener('DOMContentLoaded', function() {
    const countUpSpans = document.querySelectorAll('.count-up');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = +entry.target.textContent;
                let count = 0;

                const interval = setInterval(() => {
                    count += Math.ceil(target / 100);

                    if (count >= target) {
                        clearInterval(interval);
                        count = target;
                    }

                    entry.target.textContent = count.toLocaleString();
                }, 50);

                observer.unobserve(entry.target);
            }
        });
    });

    countUpSpans.forEach(span => {
        observer.observe(span);
    });
});
                    </script>
                </div>


            </div>
        </section>

        <div class="border-b border-white bg-red-800">
  <div class="mx-auto max-w-5xl px-4 pb-24 pt-24 lg:pt-32 xl:px-0">
    <h1 class="text-5xl font-semibold text-white md:text-6xl">
      <span class="text-[#ff0]">Payments Simplified:</span> Your Gateway to Seamless Transactions
    </h1>
    <div class="max-w-4xl">
      <p class="mt-5 text-lg text-neutral-400">
        Experience the future of payments with our cutting-edge solutions. Whether you're a business or an individual, we make transactions easy, secure, and efficient. Join us today and unlock a world of possibilities.
      </p>
    </div>
  </div>
</div>
<!-- End Hero -->

<!-- Clients -->
<div class="relative overflow-hidden border-b border-white bg-neutral-900 pt-4">
  <svg class="absolute -bottom-20 start-1/2 w-[1900px] -translate-x-1/2 transform" width="2745" height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127" class="stroke-neutral-700/50" stroke="currentColor"/>
    <path d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136" class="stroke-neutral-700/50" stroke="currentColor"/>
  </svg>

  <div class="relative z-10">
    <div class="mx-auto max-w-5xl px-4 xl:px-0">
      <div class="mb-4">
        <h2 class="text-neutral-400">Trusted by Open Source, enterprise, and more than 2,700+ of you</h2>
      </div>

      <div class="flex justify-between gap-6">
        <svg class="h-auto w-16 py-3 text-neutral-400 md:w-20 lg:w-24 lg:py-5" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" xmlns="http://www.w3.org/2000/svg"><path d="m431.7 0h-235.5v317.8h317.8v-235.5c0-45.6-36.7-82.3-82.3-82.3zm-308.9 0h-40.5c-45.6 0-82.3 36.7-82.3 82.3v40.5h122.8zm-122.8 196.2h122.8v122.8h-122.8zm392.5 317.8h40.5c45.6 0 82.3-36.7 82.3-82.3v-39.2h-122.8zm-196.3-121.5h122.8v122.8h-122.8zm-196.2 0v40.5c0 45.6 36.7 82.3 82.3 82.3h40.5v-122.8zm828-359.6h-48.1v449.4h254.5v-43h-206.4zm360.8 119c-93.7 0-159.5 69.6-159.5 169.6v11.5c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-21.5-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h243.1v-2.5s1.3-15.2 1.3-22.8c-.3-91.2-53.4-149.5-134.4-149.5zm-108.9 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm521.6-96.2v16.5c-20.3-34.2-58.2-55.7-97.5-55.7h-3.8c-86.1 0-145.6 68.4-145.6 168.4 0 101.3 57 169.6 141.8 169.6 67.1 0 97.5-40.5 107.6-58.2v49.4h45.6v-447h-46.8v157zm-98.8 257c-59.5 0-98.7-50.6-98.7-126.6 0-73.4 41.8-125.3 100-125.3 49.4 0 98.7 39.2 98.7 125.3 0 93.7-51.9 126.6-100 126.6zm424.1-250.7v2.5c-8.9-15.2-36.7-48.1-103.8-48.1-84.8 0-140.5 64.6-140.5 163.3s58.2 165.8 144.3 165.8c46.8 0 78.5-16.5 100-50.6v44.3c0 62-39.2 97.5-108.9 97.5-29.1 0-59.5-7.6-86.1-21.5l-2.5-1.3-17.7 39.2 2.5 1.3c32.9 16.5 69.6 25.3 105.1 25.3 74.7 0 154.4-38 154.4-143.1v-311.3h-46.8zm-93.7 241.8c-62 0-102.5-48.1-102.5-122.8 0-76 35.4-119 96.2-119 67.1 0 98.7 39.2 98.7 119 1.3 78.5-31.6 122.8-92.4 122.8zm331.7-286.1c-93.7 0-158.2 69.6-158.2 168.4v11.4c1.3 43 20.3 83.6 51.9 113.9 30.4 27.9 69.6 44.3 111.4 44.3h6.3c44.3 0 86.1-16.5 119-44.3l1.3-1.3-22.8-35.4-2.5 1.3c-26.6 24.1-59.5 38-94.9 38-58.2 0-117.7-38-121.5-122.8h244.2v-2.5s1.3-15.2 1.3-22.8c0-89.9-53.2-148.2-135.5-148.2zm-107.6 134.2c10.1-57 51.9-93.7 106.3-93.7 40.5 0 84.8 24.1 88.6 93.7zm440.6-127.9c-6.3-1.3-11.4-1.3-17.7-2.5-44.3 0-81 27.9-100 74.7v-72.2h-46.8l1.3 320.3v2.5h48.1v-135.4c0-20.3 2.5-41.8 8.9-60.8 15.2-49.4 49.4-81 89.9-81 5.1 0 10.1 0 15.2 1.3h2.5v-46.8z" fill="currentColor"/></svg>

        <svg class="h-auto w-16 py-3 text-neutral-400 md:w-20 lg:w-24 lg:py-5" xmlns="http://www.w3.org/2000/svg" viewBox="-4.126838974812941 0.900767442746961 939.436838974813 230.18142889845947" width="2500" height="607"><path d="M667.21 90.58c-13.76 0-23.58 4.7-28.4 13.6l-2.59 4.82V92.9h-22.39v97.86h23.55v-58.22c0-13.91 7.56-21.89 20.73-21.89 12.56 0 19.76 7.77 19.76 21.31v58.8h23.56v-63c0-23.3-12.79-37.18-34.22-37.18zm-114.21 0c-27.79 0-45 17.34-45 45.25v13.74c0 26.84 17.41 43.51 45.44 43.51 18.75 0 31.89-6.87 40.16-21l-14.6-8.4c-6.11 8.15-15.87 13.2-25.55 13.2-14.19 0-22.66-8.76-22.66-23.44v-3.89h65.73v-16.23c0-26-17.07-42.74-43.5-42.74zm22.09 43.15h-44.38v-2.35c0-16.11 7.91-25 22.27-25 13.83 0 22.09 8.76 22.09 23.44zm360.22-56.94V58.07h-81.46v18.72h28.56V172h-28.56v18.72h81.46V172h-28.57V76.79zM317.65 55.37c-36.38 0-59 22.67-59 59.18v19.74c0 36.5 22.61 59.18 59 59.18s59-22.68 59-59.18v-19.74c-.01-36.55-22.65-59.18-59-59.18zm34.66 80.27c0 24.24-12.63 38.14-34.66 38.14S283 159.88 283 135.64v-22.45c0-24.24 12.64-38.14 34.66-38.14s34.66 13.9 34.66 38.14zm98.31-45.06c-12.36 0-23.06 5.12-28.64 13.69l-2.53 3.9V92.9h-22.4v131.53h23.56v-47.64l2.52 3.74c5.3 7.86 15.65 12.55 27.69 12.55 20.31 0 40.8-13.27 40.8-42.93v-16.64c0-21.37-12.63-42.93-41-42.93zM468.06 149c0 15.77-9.2 25.57-24 25.57-13.8 0-23.43-10.36-23.43-25.18v-14.72c0-15 9.71-25.56 23.63-25.56 14.69 0 23.82 9.79 23.82 25.56zm298.47-90.92L719 190.76h23.93l9.1-28.44h54.64l.09.28 9 28.16h23.92L792.07 58.07zm-8.66 85.53l21.44-67.08 21.22 67.08zM212.59 95.12a57.27 57.27 0 0 0-4.92-47.05 58 58 0 0 0-62.4-27.79A57.29 57.29 0 0 0 102.06 1a57.94 57.94 0 0 0-55.27 40.14A57.31 57.31 0 0 0 8.5 68.93a58 58 0 0 0 7.13 67.94 57.31 57.31 0 0 0 4.92 47A58 58 0 0 0 83 211.72 57.31 57.31 0 0 0 126.16 231a57.94 57.94 0 0 0 55.27-40.14 57.3 57.3 0 0 0 38.28-27.79 57.92 57.92 0 0 0-7.12-67.95zM126.16 216a42.93 42.93 0 0 1-27.58-10c.34-.19 1-.52 1.38-.77l45.8-26.44a7.43 7.43 0 0 0 3.76-6.51V107.7l19.35 11.17a.67.67 0 0 1 .38.54v53.45A43.14 43.14 0 0 1 126.16 216zm-92.59-39.54a43 43 0 0 1-5.15-28.88c.34.21.94.57 1.36.81l45.81 26.45a7.44 7.44 0 0 0 7.52 0L139 142.52v22.34a.67.67 0 0 1-.27.6l-46.3 26.72a43.14 43.14 0 0 1-58.86-15.77zm-12-100A42.92 42.92 0 0 1 44 57.56V112a7.45 7.45 0 0 0 3.76 6.51l55.9 32.28L84.24 162a.68.68 0 0 1-.65.06L37.3 135.33a43.13 43.13 0 0 1-15.77-58.87zm159 37l-55.9-32.28L144 70a.69.69 0 0 1 .65-.06l46.29 26.73a43.1 43.1 0 0 1-6.66 77.76V120a7.44 7.44 0 0 0-3.74-6.54zm19.27-29c-.34-.21-.94-.57-1.36-.81L152.67 57.2a7.44 7.44 0 0 0-7.52 0l-55.9 32.27V67.14a.73.73 0 0 1 .28-.6l46.29-26.72a43.1 43.1 0 0 1 64 44.65zM78.7 124.3l-19.36-11.17a.73.73 0 0 1-.37-.54V59.14A43.09 43.09 0 0 1 129.64 26c-.34.19-.95.52-1.38.77l-45.8 26.44a7.45 7.45 0 0 0-3.76 6.51zm10.51-22.67l24.9-14.38L139 101.63v28.74l-24.9 14.38-24.9-14.38z" fill="currentColor"/></svg>

        <svg class="h-auto w-16 py-3 text-neutral-400 md:w-20 lg:w-24 lg:py-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2428 1002"><path fill-rule="evenodd" clip-rule="evenodd" d="M311.5 389.8h191.8l67 117.5 77.8-117.5h178.3L682.7 590.7l154 220.7H648.1l-77.8-135.8-91.7 135.8h-175l153.2-220.7-145.3-200.9Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M1279.3 640.7H955.4c2.9 26 10 45.2 21 58a76.5 76.5 0 0 0 61.1 27.3c16 0 31.5-4 45.3-12 8.8-5 18.2-13.7 28.2-26.5l159.2 14.7c-24.4 42.4-53.7 72.7-88 91.2-34.5 18.2-83.8 27.5-148.2 27.5-55.8 0-99.7-7.9-131.8-23.6a193.2 193.2 0 0 1-79.6-75c-21-34.4-31.6-74.6-31.6-121 0-65.8 21.2-119.2 63.3-159.8 42.3-40.8 100.6-61.3 175-61.3 60.3 0 108 9.2 142.8 27.5a184 184 0 0 1 79.8 79.3c18.3 34.7 27.4 79.8 27.4 135.3v18.4ZM1115 563.3c-3.2-31.3-11.6-53.7-25.2-67.1a73.1 73.1 0 0 0-53.8-20.3 73.6 73.6 0 0 0-61.6 30.6c-9.7 12.7-16 31.6-18.5 56.8H1115Zm137-173.5h168.3l81.9 267.1 84.5-267H1750l-179.1 421.5h-143.3L1252 389.8Zm463.2 212c0-64.3 21.7-117.4 65-159 43.5-41.7 102-62.6 176-62.6 84.4 0 148.2 24.5 191.3 73.5 34.6 39.4 52 88 52 145.8 0 64.7-21.5 117.8-64.5 159.3-43 41.3-102.4 62-178.5 62-67.7 0-122.5-17.1-164.3-51.5-51.4-42.6-77-98.4-77-167.6Zm162-.5c0 37.7 7.5 65.5 22.8 83.4a72 72 0 0 0 57.3 27.1c23.4 0 42.5-9 57.4-26.7 15-17.8 22.5-46 22.5-85.4 0-36.4-7.6-63.7-22.7-81.5a70.5 70.5 0 0 0-56-26.7c-23.5 0-43 9-58.3 27-15.4 18.2-23 45.9-23 82.8ZM2363.1.1a64 64 0 0 1 0 127.9 64 64 0 0 1 0-128Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M1912.1 671.5c220.3-135 326.4-327 334-419.2 8.7-106.7-71-235.9-358.9-238-345 3.6-790 158.3-1163.6 360.4h138c315.8-152.6 672-266.2 1000.8-275.2 287.7-7.8 304.4 149.2 302 199-3.6 71-74.7 234.5-252.3 373Zm-1315.7-222-36 22.7 10 17.5 26-40.1ZM419.8 567.5C212 717 57 873.2.8 1001.9 77.8 897.1 217 771 394.9 647l40.4-58.1-15.5-21.4Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M2036.3 580a819.8 819.8 0 0 0 114.2-122.8l-3-3.5c-8-9.2-17-17.5-26.5-25-21 39.8-50 83.7-88.2 128.3 1.6 7 2.8 14.7 3.5 23Z" fill="currentColor"/></svg>

        <svg class="h-auto w-16 py-3 text-neutral-400 md:w-20 lg:w-24 lg:py-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 33"><path d="M9.3 16.5C9.3 9 14.3 2.7 21.2.7a16.5 16.5 0 1 0 0 31.6c-6.9-2-11.9-8.3-11.9-15.8Z" fill="currentColor"/><path d="M21.7 10c4 0 7.4 2.8 8.5 6.4a8.9 8.9 0 1 0-17 0c1-3.6 4.4-6.3 8.5-6.3Z" fill="currentColor"/><path d="M24.8 19.4c0 3-2 5.5-4.8 6.3A6.6 6.6 0 1 0 20 13c2.8.8 4.8 3.4 4.8 6.4Z" fill="currentColor"/><path d="M39.6 13.5A4.4 4.4 0 0 1 44 9.1h1.3v2.7l-1 .2-1 .6-.2.4-.1.5h2.3v3H43v9.2h-3.4v-9.3h-1.3v-2.9h1.3ZM55.7 13.5h3.4v6.1a6.9 6.9 0 0 1-1.7 4.6 6 6 0 0 1-4.5 1.8c-1 0-1.8-.1-2.5-.5a6 6 0 0 1-3.2-3.4c-.3-.8-.4-1.6-.4-2.5v-6H50v6c0 .5 0 1 .2 1.3l.5 1c.2.4.5.6.9.8.3.2.8.3 1.2.3a2.6 2.6 0 0 0 2.1-1c.3-.3.4-.7.5-1l.2-1.4v-6ZM61.2 25.7V9.5h3.4v16.2h-3.4ZM66.9 25.7V9.5h3.3v16.2H67ZM78.5 21.2l3.3-7.7h3.7l-5.7 12.2h-2.7l-5.6-12.2H75l3.4 7.7ZM87 13.5h3.3v12.2H87V13.5Zm1.6-5 .8.1.6.4.4.7.2.7a1.9 1.9 0 0 1-.6 1.4l-.6.4a2 2 0 0 1-.8.1c-.5 0-1-.2-1.3-.5a2 2 0 0 1-.4-2.1c0-.3.2-.5.4-.7l.6-.4.7-.1ZM98.8 13.2a6.7 6.7 0 0 1 4.8 1.9 6.3 6.3 0 0 1 1.9 5.7h-9.8a3.3 3.3 0 0 0 3.2 2.2c.5 0 1-.1 1.4-.4.5-.2.9-.5 1.2-1h3.7c-.2.7-.5 1.3-1 1.8a6.1 6.1 0 0 1-3.3 2.3 7 7 0 0 1-6.9-1.6 6.1 6.1 0 0 1-2-4.5 6.1 6.1 0 0 1 2-4.5c.7-.6 1.4-1 2.2-1.4.8-.3 1.7-.5 2.6-.5Zm3.2 5.2c-.3-.6-.7-1.1-1.2-1.5-.6-.4-1.3-.7-2-.7s-1.4.3-2 .7c-.5.4-.9.9-1.1 1.5h6.3ZM123 13.5h3.6l-5 12.2H119l-2.5-6.5-2.5 6.5h-2.7l-5-12.2h3.6l2.7 7 2.8-7h2.2l2.8 7 2.7-7Z" fill="currentColor"/></svg>

        <svg class="h-auto w-16 py-3 text-neutral-400 md:w-20 lg:w-24 lg:py-5" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 88 22" xml:space="preserve" enable-background="new 0 0 88 22"><path d="M36.3 14.6a7.3 7.3 0 0 1-5.6 2.8c-3.8 0-6.8-2.7-6.8-6.2a6 6 0 0 1 2-4.5A6 6 0 0 1 30.5 5c2.2 0 4.3 1 5.6 2.8l-2.5 1.8a3.7 3.7 0 0 0-3.1-1.8 3.5 3.5 0 0 0-3.5 3.5c.1 2 1.7 3.5 3.6 3.5 1.3 0 2.5-.6 3.2-1.7l2.5 1.5z" fill="currentColor"/><path d="M37.7 0H40.8V17.1H37.7z" fill="currentColor"/><path d="M49.1 14.7c2 0 3.7-1.6 3.8-3.6-.1-2-1.8-3.6-3.8-3.6s-3.7 1.6-3.8 3.6c.1 2 1.7 3.6 3.8 3.6m0-9.8c1.7-.1 3.4.5 4.7 1.7 1.3 1.2 2 2.8 2.1 4.5a6.4 6.4 0 0 1-2.1 4.5 6.4 6.4 0 0 1-4.7 1.7c-3.8 0-6.8-2.7-6.8-6.2s3-6.2 6.8-6.2" fill="currentColor"/><path d="M55.3 5.1 59 5.1 62 11.5 65.2 5.1 68.6 5.1 62 17.8z" fill="currentColor"/><path d="M77.5 9.4a3 3 0 0 0-2.9-1.9c-1.3 0-2.5.7-3.1 1.9h6zm2 6.3a7 7 0 0 1-4.6 1.6c-3.8 0-6.8-2.7-6.8-6.2 0-1.7.7-3.3 1.9-4.5a6 6 0 0 1 4.6-1.7c1.7-.1 3.3.6 4.5 1.8s1.8 2.8 1.7 4.5v.8h-9.6a3.9 3.9 0 0 0 6.5 1.5l1.8 2.2zm2.8-5.3c0-2.9 2.2-5.2 5.7-5.2V8c-.7 0-1.5.3-2 .8s-.7 1.3-.6 2v6.3h-3.1v-6.7z" fill="currentColor"/><path d="M9.7 5.6a5 5 0 0 0-8.3-3.5C0 3.5-.4 5.6.3 7.4s2.5 3 4.5 3h4.9V5.6zm1.4 0a5 5 0 0 1 8.3-3.5c1.4 1.4 1.8 3.5 1.1 5.3s-2.5 3-4.5 3h-4.9V5.6zm0 11a5 5 0 0 0 8.3 3.5c1.4-1.4 1.8-3.5 1.1-5.3s-2.5-3-4.5-3h-4.9v4.8zm-6.3 3.5c1.9 0 3.5-1.5 3.5-3.5v-3.5H4.8c-1.9 0-3.5 1.5-3.5 3.5s1.6 3.5 3.5 3.5zm4.9-3.5a5 5 0 0 1-8.3 3.5C0 18.7-.4 16.6.3 14.8s2.5-3 4.5-3h4.9v4.8z" fill="currentColor"/></svg>
      </div>
    </div>
  </div>
</div>
<!-- End Clients -->

        {{-- <section class="bg-red-700 py-4 md:py-8">

            <div class="mb-8 text-white">
                <div class="">
                    <div>
                        <h2
                            class="mb-6 px-2 text-center text-2xl font-bold uppercase text-white md:text-3xl md:capitalize">
                            Trusted By Top Companies in Nigeria </h2>
                    </div>
                    <div class="mx-8 flex items-center justify-between md:px-16">
                        <img class="w-[10%]" src="image/fig-pic/download-2022-11-18T145151.694.png" alt="random" />
                        <img class="w-[20%]" src="image/fig-pic/LAUTECH-Payment-Portal.png" alt="random" />
                        <img class="w-[10%]"
                            src="image/fig-pic/List-of-Courses-Offered-in-Kwara-State-University-KWASU.webp"
                            alt="random" />
                    </div>
                </div>

            </div>

            <div class="">
                <div class="mx-auto max-w-6xl text-center">
                    <h2 class="mb-3 px-2 text-2xl font-bold uppercase text-white md:text-3xl md:capitalize">Join Our
                        Exclusive Newsletter</h2>
                    <p class="text-sm text-gray-300 md:text-xl">Be part of our elite community. Get VIP access to curated
                        content, early product releases, and special promotions.</p>

                    <div
                        class="mt-7 flex flex-col items-center justify-center rounded-lg bg-white p-8 shadow-lg md:flex-row">
                        <input type="email" placeholder="Enter your email"
                            class="w-full border-b-2 border-red-700 bg-transparent px-4 py-3 text-base text-[#2e0249] placeholder-red-700 placeholder-opacity-70 focus:outline-none md:w-96" />
                        <button
                            class="rounded bg-red-700 px-6 py-3 font-medium text-white hover:scale-105 hover:transform hover:bg-red-500 hover:shadow-md focus:outline-none max-md:mt-6 md:ml-4">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
        </section> --}}
    </main>

    <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const authModal = document.getElementById('authModal');
                    const closeModal = document.querySelectorAll('.closeModal');
                    const openModal = document.getElementById('openModal');
                    const closeRegisterModal = document.getElementById('closeRegisterModal');
                    const continueToPwd = document.getElementById('continueToPwd');
                    const provideAuthPwd = document.getElementById('provideAuthPwd');
                    const provideAuthEmail = document.getElementById('provideAuthEmail');

                    // Show the modal
                    authModal.classList.remove('hidden');

                    // Close the modal
                    closeModal.forEach((modal) => {
                        modal.addEventListener('click', function() {
                            authModal.classList.add('hidden');
                        });
                    });



                    openModal.addEventListener('click', function() {
                        authModal.classList.remove('hidden');
                    });




                    closeRegisterModal.addEventListener('click', function() {
                        authModal.classList.add('hidden');
                    });

                    // Show password input
                    continueToPwd.addEventListener('click', function() {
                        provideAuthEmail.classList.add('hidden');
                        provideAuthPwd.classList.remove('hidden');
                    });
                });
            </script>


@endsection
