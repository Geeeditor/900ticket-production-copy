@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <section class="blur-background w-full flex-col items-center justify-center">

        <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-12">
            <div class="relative mx-auto w-full max-w-lg rounded-2xl bg-white px-6 pb-9 pt-10 shadow-xl">
                <div class="mx-auto flex w-full max-w-md flex-col space-y-16">
                    <div class="flex flex-col items-center justify-center space-y-2 text-center">
                        <div class="text-3xl font-semibold">
                            <p>Email Verification</p>
                        </div>
                        <div class="flex flex-row text-sm font-medium text-gray-400">
                            <p>We have sent a code to your email ba**@dipainhouse.com</p>
                        </div>
                    </div>

                    <div>
                        <form action="" method="post">
                            <div class="flex flex-col space-y-16">
                                <div class="mx-auto flex w-full max-w-xs flex-row items-center justify-between">
                                    <div class="h-16 w-16">
                                        <input
                                            class="otp-input flex h-full w-full flex-col items-center justify-center rounded-xl border border-gray-200 bg-white px-5 text-center text-lg outline-none ring-blue-700 focus:bg-gray-50 focus:ring-1"
                                            type="text" name="otpOne" maxlength="1">
                                    </div>
                                    <div class="h-16 w-16">
                                        <input
                                            class="otp-input flex h-full w-full flex-col items-center justify-center rounded-xl border border-gray-200 bg-white px-5 text-center text-lg outline-none ring-blue-700 focus:bg-gray-50 focus:ring-1"
                                            type="text" name="otpTwo" maxlength="1">
                                    </div>
                                    <div class="h-16 w-16">
                                        <input
                                            class="otp-input flex h-full w-full flex-col items-center justify-center rounded-xl border border-gray-200 bg-white px-5 text-center text-lg outline-none ring-blue-700 focus:bg-gray-50 focus:ring-1"
                                            type="text" name="otpThree" maxlength="1">
                                    </div>
                                    <div class="h-16 w-16">
                                        <input
                                            class="otp-input flex h-full w-full flex-col items-center justify-center rounded-xl border border-gray-200 bg-white px-5 text-center text-lg outline-none ring-blue-700 focus:bg-gray-50 focus:ring-1"
                                            type="text" name="otpFour" maxlength="1">
                                    </div>
                                </div>

                                <div class="flex flex-col space-y-5">
                                    <div>
                                        <button type="submit"
                                            class="hover:red-alt-800 w-full rounded-md bg-red-alt-700 py-2 text-center uppercase text-white">
                                            Verify
                                        </button>
                                    </div>

                                    <div
                                        class="flex flex-row items-center justify-center space-x-1 text-center text-sm font-medium text-gray-500">
                                        <p>Didn't receive code?</p> <a class="flex flex-row items-center text-blue-600"
                                            href="http://" target="_blank" rel="noopener noreferrer">Resend</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
