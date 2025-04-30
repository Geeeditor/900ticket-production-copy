@extends('layouts.app')
@section('title', 'OTP Verification')

@section('hero')
    <div class="relative top-[0] flex h-[17.5vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- <img class="h-full w-full object-cover" src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum"> --}}
        {{-- hero content --}}
    </div>

    {{-- @if (session('success')){

     } @elseif('error') {

     }  --}}


@endsection


@section('content')
    <div class="mx-auto mt-5  rounded-xl bg-white px-4 py-10 text-center shadow sm:px-8">
        <section class="mb-8">
            <h1 class="mb-1 text-2xl font-bold">Email Verification</h1>
            <p class="text-[15px] text-slate-500">Enter the 6-digit verification code that was sent to your email.</p>
            <div>
                @if (session('message'))
                    <div>
                        <strong style="color: #7a0909">{{ session('message') }}</strong>

                    </div>
                @endif
            </div>
        </section>
        <form method="post" action="{{ route('register.verify.store') }}" id="otp-form">
            @csrf
            <div class="flex items-center justify-center gap-3">
                <input type="text" name="otp1"
                    class="h-[45px] md:h-14 w-[45px] md:w-14 appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100"
                    pattern="\d*" maxlength="1" />
                <input type="text" name="otp2"
                    class="h-[45px] md:h-14 w-[45px] md:w-14  appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100"
                    pattern="\d*" maxlength="1" />
                <input type="text" name="otp3"
                    class="h-[45px] md:h-14 w-[45px] md:w-14  appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100"
                    pattern="\d*" maxlength="1" />
                <input type="text" name="otp4"
                    class="h-[45px] md:h-14 w-[45px] md:w-14  appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100"
                    pattern="\d*" maxlength="1" />
                <input type="text" name="otp5"
                    class="h-[45px] md:h-14 w-[45px] md:w-14  appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100"
                    pattern="\d*" maxlength="1" />
                <input type="text" name="otp6"
                    class="h-[45px] md:h-14 w-[45px] md:w-14  appearance-none rounded border border-gray-300 bg-slate-100 p-4 text-center text-2xl font-extrabold text-black outline-none hover:border-slate-200 focus:border-blue-300 focus:bg-white focus:ring-2 focus:ring-indigo-100"
                    pattern="\d*" maxlength="1" />


            </div>
            <div class="mx-auto mt-4 max-w-[260px]">
                <button type="submit"
                    class="inline-flex w-full justify-center whitespace-nowrap rounded-lg bg-red-700 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 transition-colors duration-150 hover:bg-red-900 focus:outline-none focus:ring focus:ring-indigo-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300">Verify
                    Account</button>
            </div>
        </form>
        <form class="my-2" action="{{route('register.otp.resend')}}" method="post">
            @csrf
            <div class="text-sm text-gray-600">You can get a new OTP in
                <span id="otp-timer">00:00</span>
                <button type="submit" id="request-otp-button" class="text-red-400 underline hover:text-red-500" disabled>Request
                    OTP</button>
            </div>
        </form>
        {{-- <div class="mt-4 text-sm text-slate-500">Didn't receive code? <a class="font-medium text-indigo-500 hover:text-indigo-600" href="#0">Resend</a></div> --}}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('otp-form')
            const inputs = [...form.querySelectorAll('input[type=text]')]
            const submit = form.querySelector('button[type=submit]')

            const handleKeyDown = (e) => {
                if (
                    !/^[0-9]{1}$/.test(e.key) &&
                    e.key !== 'Backspace' &&
                    e.key !== 'Delete' &&
                    e.key !== 'Tab' &&
                    !e.metaKey
                ) {
                    e.preventDefault()
                }

                if (e.key === 'Delete' || e.key === 'Backspace') {
                    const index = inputs.indexOf(e.target);
                    if (index > 0) {
                        inputs[index - 1].value = '';
                        inputs[index - 1].focus();
                    }
                }
            }

            const handleInput = (e) => {
                const {
                    target
                } = e
                const index = inputs.indexOf(target)
                if (target.value) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus()
                    } else {
                        submit.focus()
                    }
                }
            }

            const handleFocus = (e) => {
                e.target.select()
            }

            const handlePaste = (e) => {
                e.preventDefault()
                const text = e.clipboardData.getData('text')
                if (!new RegExp(`^[0-9]{${inputs.length}}$`).test(text)) {
                    return
                }
                const digits = text.split('')
                inputs.forEach((input, index) => input.value = digits[index])
                submit.focus()
            }

            inputs.forEach((input) => {
                input.addEventListener('input', handleInput)
                input.addEventListener('keydown', handleKeyDown)
                input.addEventListener('focus', handleFocus)
                input.addEventListener('paste', handlePaste)
            })

            const twoMinutes = 60 * 2; // Duration in seconds
            const display = document.getElementById('otp-timer');
            startTimer(twoMinutes, display);
        })


        function startTimer(duration, display) {
            let timer = duration; // Use let to allow modification
            const button = document.getElementById('request-otp-button');

            // Enable the button when the timer starts
            button.disabled = true;

            const interval = setInterval(function() {
                const minutes = Math.floor(timer / 60);
                const seconds = timer % 60;

                // Format the timer display
                display.textContent = (minutes < 10 ? "0" : "") + minutes + ":" + (seconds < 10 ? "0" : "") +
                    seconds;

                // Check if the timer has reached zero
                if (--timer < 0) {
                    clearInterval(interval); // Clear the interval
                    button.disabled = false; // Enable the button
                    display.textContent = "00:00"; // Reset timer display
                }
            }, 1000);
        }
    </script>

    

@endsection
