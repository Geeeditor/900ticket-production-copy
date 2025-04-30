@extends('layouts.app')
@section('title', 'Register With Us')
@section('hero')
    <div style="background: url('./image/eventhero.png')"
        class="relative top-[0] flex h-[17.5vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- hero content --}}
    </div>
@endsection

@section('content')
    <main class="mx-auto w-full">
        <section
            class="m-1 mx-auto flex items-center justify-center rounded-b-md bg-white p-1 py-4 shadow-lg md:w-[80%] md:px-8 md:py-8">
            <div class="hidden w-1/2 md:block">
                <img class="h-full w-full object-cover" src="{{ asset('image/profilePoP2-v3.jpg') }}" alt="lorem ipsum">
            </div>
            <div class="w-[100%] md:w-1/2">
                {{-- Mini Nav --}}

                <div class="bg-white px-3 py-2">


                    <div class="flex justify-start gap-3">

                        <a id="" href="{{ route('index.login') }}"
                            class="signupLink py- cursor-pointer rounded-md bg-red-700 px-2 font-[600] text-white hover:bg-red-900 md:px-4 md:py-2">Login</a>

                        <a id="" href="{{ route('index.register') }}"
                            class="loginLink py- cursor-pointer rounded-md bg-red-700 px-2 font-[600] text-white hover:bg-red-900 md:px-4 md:py-2">Register</a>
                    </div>

                </div>




                {{-- Sign up section --}}
                <div id="" class="signupSection h-fit flex-col gap-2 bg-white px-3 pb-2 md:w-full">
                    <div>
                        <div>
                            <div class="mx-auto flex w-full justify-start gap-1 text-lg font-bold uppercase">
                                <p>Create an account</p>
                            </div>

                            <p class="my-2 text-left text-sm capitalize text-gray-400">Manage your bookings with
                                ease and <br />
                                enjoy members-only benefits</p>
                        </div>
                        <form method="POST" class="signupForm flex flex-col gap-2" action="{{ route('register.store') }}">
                            @csrf

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="firstName">First Name</label>
                                <input class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="text"
                                    name="firstname" value="{{ old('firstname') }}" placeholder="Enter Firstname">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('firstname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="lastName">Surname</label>
                                <input class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                    value="{{ old('lastname') }}" type="text" name="lastname"
                                    placeholder="Enter a Last name">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('lastname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="address">Address</label>
                                <input class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="text"
                                    name="address" value="{{ old('address') }}" placeholder="Enter Address">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="email">Email</label>
                                <input title="Eg: mark@yokomail.com"
                                    class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="email"
                                    name="email" value="{{ old('email') }}" placeholder="Enter your Email">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="email">Phone Number</label>
                                <div class="relative my-2 w-full border border-gray-200 px-2 py-2 md:border-2">
                                    <div
                                        class="pointer-events-none absolute inset-y-0 start-0 top-0 flex items-center ps-3.5">
                                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                            <path
                                                d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                        </svg>
                                    </div> <input
                                        style="padding-left: 35px !important;user-select: text;width: 80%;padding-top: 2.5px;padding-bottom: 2.5px;"
                                        title="+234..." class="input" value="{{ old('phone') }}" type="tel"
                                        name="phone" placeholder="+234....">
                                </div>
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="flex flex-col gap-1">
                                <label class="font-[500]" for="password">Password</label>
                                <div class="relative">

                                    <input id="password" name="password"
                                        class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="password"
                                        placeholder="Enter your password" />
                                    <div id=""
                                        class="password-visibility togglePassword absolute right-[5px] top-[17px] cursor-pointer">
                                        <img class="h-[25px]" src="{{ asset('image/eye.svg') }}" alt="Toggle visibility">
                                        <div id="" class="stroke"></div>
                                    </div>
                                </div>
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="flex flex-col gap-1">
                                <label class="font-[500]" for="password">Confirm Password</label>
                                <div class="relative">

                                    <input id="password" name=""
                                        class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="password"
                                        placeholder="Confirm your password" />
                                    <div id=""
                                        class="password-visibility togglePassword absolute right-[5px] top-[17px] cursor-pointer">
                                        <img class="h-[25px]" src="{{ asset('image/eye.svg') }}"
                                            alt="Toggle visibility">
                                        <div id="" class="stroke"></div>
                                    </div>
                                </div>
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <button
                                class="hover:red-alt-800 submit w-full rounded-md bg-red-700 px-2 py-2 text-start uppercase text-white hover:bg-red-900"
                                type="submit">
                                Create an Account
                            </button>
                        </form>

                        <p class="my-2 text-center text-sm md:text-left"> By signing in or registering I confirm that I
                            have read and agreed to
                            900Tickets <a class="text-red-500" href="{{ route('index.terms-and-conditions') }}">terms and conditions</a> and <a
                                class="text-red-500" href="{{ route('index.privacy-policy') }}">privacy policy</a>
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <script>
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
        </script>
    </main>
@endsection
