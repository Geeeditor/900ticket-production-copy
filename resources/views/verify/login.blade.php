@extends('layouts.app')
@section('title', 'Login')
{{--
@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection --}}

@section('hero')
    <div style="background: url('./image/eventhero.png')"
        class="relative top-[0] flex h-[17.5vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- hero content --}}
    </div>
@endsection

@section('content')
    <div class="mx-auto w-full">
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

                {{-- Login Section --}}
                <div id="" class="loginSection h-[100%] flex-col gap-2 rounded-sm bg-white px-3 py-2 shadow-lg">
                    <div>
                        <div>
                            <div class="mx-auto flex w-full justify-start gap-1 text-lg font-bold uppercase">
                                <p>Sign in</p>
                            </div>

                            <p class="my-2 text-left text-sm capitalize text-gray-400">Manage your bookings with
                                ease and <br />
                                enjoy members-only benefits</p>
                        </div>
                        <form action="{{ route('index.login.store') }}" method="post" class="flex flex-col gap-2">
                            @csrf
                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="email">Email</label>
                                <input title="Eg: mark@yokomail.com"
                                    class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="text"
                                    name="email" placeholder="Enter your email">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('email')
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

                            <div>
                                <div class="saveLog">
                                    <label class="saveLoginCheckBox">
                                        <input id="ch1" type="checkbox" name="remember">
                                        <div class="transition"></div>
                                    </label>
                                    <p>
                                        Remember Me
                                    </p>
                                </div>
                            </div>

                            <button
                                class="hover:red-alt-800 submit w-full rounded-md bg-red-700 px-2 py-2 text-start uppercase text-white hover:bg-red-900"
                                type="submit">Login</button>

                                <p class="my-2 text-center text-sm md:text-left"> By signing in or registering I confirm that I
                                have read and agreed to
                                900Tickets <a class="text-red-500" href="{{route('index.terms-and-conditions')}}">terms and conditions</a> and <a
                                    class="text-red-500" href="{{route('index.privacy-policy')}}">privacy policy</a>
                            </p>
                        </form>


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



    </div>
@endsection
