@extends('layouts.app')
@section('title', 'Profile')
@section('hero')




        {{-- Confirm password change modal --}}
        <section id="update-password" style="background-color: rgba(16, 1, 1, .2)"
            class="fixed z-[997] flex h-[106%] w-full items-center justify-center">


            <form id="" method="post" action="" class="w-[70%] bg-white px-2 py-4">
                @csrf
                {{-- @method('delete') --}}
                <h1 class="mb-2 flex items-center justify-between text-base font-[700] md:text-2xl">Upload a profile picture
                    <span id="close-upload-button" class="block cursor-pointer text-sm text-red-700">X</span>
                </h1>
                <div class="flex flex-col tracking-wide">
                    
                    <input
                    class="border-input my-4 flex w-full rounded-md border border-blue-300 bg-white text-sm text-gray-400 file:border-0 file:bg-red-800 file:text-sm file:font-medium file:text-white"
                    name="profile_picture" type="file" id="picture" accept=".jpg, .png, .webp, .jpeg" />
                    </div>
                </div>

                <button type="submit"
                class="ld-ext-right block rounded-md bg-[#cc2121] px-4 py-2 text-white">
                Upload
            </button>
            </form>

        </section>
        {{-- Confirm password change modal --}}
        <section id="update-password" style="background-color: rgba(16, 1, 1, .2)"
            class="fixed z-[997] hidden h-[106%] w-full items-center justify-center">


            <form id="" method="post" action="" class="w-[70%] bg-white px-2 py-4">
                @csrf
                {{-- @method('delete') --}}
                <h1 class="mb-2 flex items-center justify-between text-base font-[700] md:text-2xl">Provide your old password to confirm password update
                    <span id="close-profile-button" class="block cursor-pointer text-sm text-red-700">X</span>
                </h1>
                <div class="flex flex-col tracking-wide">
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
                </div>

                <button type="submit"
                class="ld-ext-right block rounded-md bg-[#cc2121] px-4 py-2 text-white">
                Update password
            </button>
            </form>

        </section>

        {{-- Confirm profile termination modal --}}
        <section id="delete-profile" style="background-color: rgba(16, 1, 1, .2)"
            class="fixed z-[997] hidden h-[106%] w-full items-center justify-center">


            <form id="" method="post" action="{{route('dashboard.profile.destroy')}}" class="w-[70%] bg-white px-2 py-4">
                @csrf
                @method('delete')
                <h1 class="mb-2 flex items-center justify-between text-base font-[700] md:text-2xl">Enter Password to confirm account termination
                    <span id="close-profile-button" class="block cursor-pointer text-sm text-red-700">X</span>
                </h1>
                <div class="flex flex-col tracking-wide">
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
                </div>

                <button type="submit"
                class="ld-ext-right block rounded-md bg-[#cc2121] px-4 py-2 text-white">
                Delete
            </button>
            </form>

        </section>
        

    <div class="relative top-0 flex h-[14vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- Hero content can be added here --}}
    </div>
@endsection
@section('content')
    <section class="mx-auto my-1 rounded-md border border-gray-200 bg-white p-2 shadow shadow-gray-300 md:w-[80%]">
        <header class="flex flex-row items-center gap-2 rounded-sm border border-gray-300 bg-gray-100 p-1">
            <div class="h-auto w-[20%] rounded-full">
                <img class="h- object-contain" src="{{ asset('image/avatar.jpg') }}" alt="avatar">
            </div>
            <div class="flex w-[70%] flex-col">
                <p class="font-[700]">
                    <span
                        class="mb-3 block w-fit rounded-sm bg-red-700 px-[2.5px] text-[60%] font-[200] text-white">User</span>

                    <span class="block font-[600]">Hello {{ $user->firstname }}!</span>
                    <span class="text-sm font-[200]">
                        {{ $user->email }}
                    </span>
                </p>
                <form action="">
                    <!-- From Uiverse.io by vinodjangid07 -->
                    <button
                        class="flex h-11 w-36 cursor-pointer items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white text-sm transition-all duration-300 hover:shadow-lg">
                        <span class="relative flex h-auto w-4 items-end justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 71 67" class="w-full">
                                <path stroke-width="5" stroke="black"
                                    d="M41.7322 11.7678L42.4645 12.5H43.5H68.5V64.5H2.5V2.5H32.4645L41.7322 11.7678Z">
                                </path>
                            </svg>
                            <span
                                class="absolute bottom-0 h-3/4 w-full skew-x-12 transform border-2 border-b border-black bg-white transition-all duration-500"></span>
                        </span>
                        Change Picture
                    </button>

                    <style>
                        .open-file:hover .file-front {
                            height: 50%;
                            transform-origin: bottom right;
                            transform: skewX(-55deg);
                        }
                    </style>

                </form>
            </div>
        </header>

        <form method="POST" action="{{ route('dashboard.profile.update') }}"
            class="mx-auto mt-5 rounded-lg bg-white p-6 shadow-md">
            @csrf
            @method('PUT')
            <h2 class="font-[700] uppercase">Profile Infomation:</h2>

            <div class="mt-2 flex flex-col gap-y-3">
                <style>
                    .input {
                        text-align: left !important;
                    }

                    .editable {
                        border-color: green;
                        /* Change border color to green */
                    }
                </style>
                <div class="flex flex-col gap-3 md:flex-row">

                    <div class="tracking-wide md:w-1/2">
                        <label class="text-sm font-bold">First Name</label>
                        <input title="First Name"
                            class="input my-2 w-full border border-gray-200 px-2 py-2 text-left md:border-2"
                            type="text" name="firstname" value="{{ $user->firstname }}" readonly>
                    </div>

                    <div class="tracking-wide md:w-1/2">
                        <label class="text-sm font-bold">Last Name</label>
                        <input title="First Name" class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                            type="text" name="lastname" value="{{ $user->lastname }}" readonly>
                    </div>
                </div>

                <div class="flex flex-col gap-3 md:flex-row">
                    <div class="tracking-wide md:w-1/2">
                        <label class="text-sm font-bold">Email</label>
                        <input title="First Name" class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                            type="email" name="email" value="{{ $user->email }}" readonly>
                    </div>

                    <div class="tracking-wide md:w-1/2">
                        <label class="text-sm font-bold">Contact Number</label>
                        <input title="First Name" class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                            type="text" name="phone" value="{{ $user->phone }}" readonly>
                    </div>
                </div>

                <div class="flex flex-col gap-3 md:flex-row">


                    <div class="tracking-wide md:w-1/2">
                        <label class="text-sm font-bold">Gender</label>
                        <select id="gender"
                            class="focus:border-black-500 focus:ring-black-500 input my-2 w-full border border-gray-200 px-2 py-2 transition md:border-2"
                            name="gender" disabled>
                            <option value="None" {{ $user->gender == 'none' ? 'selected' : '' }}>None</option>
                            <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="tracking-wide md:w-1/2">
                        <label class="text-sm font-bold">Address</label>
                        <input title="First Name" class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                            type="address" name="address" value="{{ $user->address }}" readonly>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <style>
                    /* From Uiverse.io by andrew-demchenk0 */
                    .edit-button {
                        /* display: flex; */
                        justify-content: center;
                        align-items: center;
                        padding: 6px 12px;
                        gap: 8px;
                        height: 34px;
                        width: 112px;
                        border: none;
                        background: #ff362b34;
                        border-radius: 20px;
                        cursor: pointer;
                    }

                    .edit-button {
                        line-height: 20px;
                        font-size: 17px;
                        color: #ff342b;
                        letter-spacing: 1px;
                    }

                    .edit-button:hover {
                        background: #ff362b52;
                    }

                    .edit-button:hover .svg-icon {
                        animation: spin 2s linear infinite;
                    }

                    .revert-button {
                        /* display: flex; */
                        justify-content: center;
                        align-items: center;
                        padding: 6px 12px;
                        gap: 8px;
                        height: 34px;
                        width: 112px;
                        border: none;
                        background: rgba(2, 53, 1, 0.205);
                        border-radius: 20px;
                        cursor: pointer;
                    }

                    .revert-button {
                        line-height: 20px;
                        font-size: 17px;
                        color: #0f700b;
                        letter-spacing: 1px;
                    }

                    .revert-button:hover {
                        background: rgba(2, 53, 1, 0.305);
                    }

                    .revert-button:hover .svg-icon {
                        animation: spin 2s linear infinite;
                    }

                    @keyframes spin {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(-360deg);
                        }
                    }
                </style>

                <div id="edit-button" class="edit-button flex" onclick="makeInputsEditable()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20"
                        fill="none" class="svg-icon">
                        <g stroke-width="1.5" stroke-linecap="round" stroke="#ff342b">
                            <path
                                d="m3.33337 10.8333c0 3.6819 2.98477 6.6667 6.66663 6.6667 3.682 0 6.6667-2.9848 6.6667-6.6667 0-3.68188-2.9847-6.66664-6.6667-6.66664-1.29938 0-2.51191.37174-3.5371 1.01468">
                            </path>
                            <path
                                d="m7.69867 1.58163-1.44987 3.28435c-.18587.42104.00478.91303.42582 1.0989l3.28438 1.44986">
                            </path>
                        </g>
                    </svg>
                    <span class="lable">Edit</span>
                </div>

                <a href="" id="revert-button" class="revert-button hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20"
                        fill="none" class="svg-icon">
                        <g stroke-width="1.5" stroke-linecap="round" stroke="#0f700b">
                            <path
                                d="m3.33337 10.8333c0 3.6819 2.98477 6.6667 6.66663 6.6667 3.682 0 6.6667-2.9848 6.6667-6.6667 0-3.68188-2.9847-6.66664-6.6667-6.66664-1.29938 0-2.51191.37174-3.5371 1.01468">
                            </path>
                            <path
                                d="m7.69867 1.58163-1.44987 3.28435c-.18587.42104.00478.91303.42582 1.0989l3.28438 1.44986">
                            </path>
                        </g>
                    </svg>
                    <span class="lable text-[#045202]">Revert</span>
                </a>

                <button type="submit" id="update-submit-button"
                    class="ld-ext-right hidden rounded-md bg-[#cc2121] px-4 py-2 text-white">
                    Update Profile
                </button>

            </div>
        </form>

        <br>

        <form method="POST" action="{{ route('dashboard.profile.update.password') }}"
            class="mx-auto mt-5 rounded-lg bg-white p-6 shadow-md">
            @csrf
            @method('PUT')
            <h2 class="font-[700] uppercase">Update Passoword:</h2>

            <div class="mt-2 flex flex-col gap-y-3">
                <style>
                    .password-input {
                        text-align: left !important;
                    }
                </style>
                <div class="flex flex-col gap-3 md:flex-row">

                    <div class="flex flex-col gap-1 tracking-wide md:w-1/2">
                        <label class="font-[500]" for="password">Current Password</label>
                        <div class="relative">

                            <input id="password" name="current_password"
                                class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="password"
                                placeholder="Enter your password" />
                            <div id=""
                                class="password-visibility togglePassword absolute right-[5px] top-[17px] cursor-pointer">
                                <img class="h-[25px]" src="{{ asset('image/eye.svg') }}" alt="Toggle visibility">
                                <div id="" class="stroke"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1 tracking-wide md:w-1/2">
                        <label class="font-[500]" for="password">New Password</label>
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
                    </div>


                </div>

                <div id="reset" class="flex flex-col gap-3 md:flex-row">
                    <div class="flex flex-col gap-1 tracking-wide md:w-1/2">
                        <label class="font-[500]" for="password">Confirm New Passowrd</label>
                        <div class="relative">

                            <input id="password" name="confirm_password"
                                class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="password"
                                placeholder="Enter your password" />
                            <div id=""
                                class="password-visibility togglePassword absolute right-[5px] top-[17px] cursor-pointer">
                                <img class="h-[25px]" src="{{ asset('image/eye.svg') }}" alt="Toggle visibility">
                                <div id="" class="stroke"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <button type="submit"
                class="ld-ext-right block rounded-md bg-[#cc2121] px-4 py-2 text-white">
                Change Passoword
            </button>


        </form>



        <div
            class="mx-auto mt-5 rounded-lg bg-white p-6 shadow-md">


            <div class="mt-2 flex flex-col gap-y-3">
                <h2 class="mb-4 text-2xl font-bold text-gray-800">Terminate Account</h2>
                <div class="flex flex-col gap-3 md:flex-row">

                    <div>

                        <p class="mb-4 text-gray-700">Terminating your account is a significant decision that may have
                            lasting effects. Please consider the following points before proceeding:</p>

                        <h2 class="mb-2 mt-6 text-xl font-semibold text-gray-800">Understanding Account Termination</h2>
                        <p class="mb-4 text-gray-700">Account termination means that your access to our services will be
                            permanently revoked. This action cannot be undone, and all associated data will be deleted.
                            Ensure that you have saved any important information before proceeding.</p>

                        <h2 class="mb-2 mt-6 text-xl font-semibold text-gray-800">Reasons for Termination</h2>
                        <ul class="mb-4 list-inside list-disc text-gray-700">
                            <li>Privacy Concerns: If you are worried about how your data is handled.</li>
                            <li>Inactivity: If you no longer find value in our services.</li>
                            <li>Dissatisfaction: If your experience did not meet your expectations.</li>
                        </ul>

                        <h2 class="mb-2 mt-6 text-xl font-semibold text-gray-800">What to Expect</h2>
                        <p class="mb-4 text-gray-700">Upon termination:</p>
                        <ul class="mb-4 list-inside list-disc text-gray-700">
                            <li>Your profile, settings, and all associated data will be permanently removed.</li>
                            <li>You will lose access to any purchased content or features.</li>
                            <li>If you have subscriptions, they will be canceled, and no further charges will occur.</li>
                        </ul>


                        <p class="mb-4 text-gray-700">We value your feedback. If you decide to terminate your account, we
                            would appreciate knowing your reasons. Your insights help us improve our services for all users.
                        </p>

                        <p class="text-gray-700">Thank you for being a part of our community!</p>
                    </div>


                </div>



            </div>
            <br>
            <button type="submit" id="delete-profile-button"
                class="ld-ext-right block rounded-md bg-[#cc2121] px-4 py-2 text-white">
                Terminate Account
            </button>


        </div>

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

        <script>
            function makeInputsEditable() {
                const inputs = document.querySelectorAll('.input');
                const select = document.getElementById('gender');
                const revertBtn = document.getElementById('revert-button');
                const editBtn = document.getElementById('edit-button');
                const updateSubmitButton = document.getElementById('update-submit-button');
                inputs.forEach(input => {
                    input.readOnly = false; // Make the input editable
                    input.classList.add('editable'); // Add class to change border color
                    select.disabled = false;
                    select.classList.add('editable');
                    updateSubmitButton.classList.remove('hidden');
                    revertBtn.classList.remove('hidden');
                    revertBtn.classList.add('flex');
                    editBtn.classList.add('hidden');
                    editBtn.classList.remove('flex');

                });
            }
        </script>

<script>
    document.getElementById('delete-profile-button').addEventListener('click', function() {
        document.getElementById('delete-profile').classList.toggle('flex');
        document.getElementById('delete-profile').classList.toggle('hidden');
    });

    document.getElementById('close-profile-button').addEventListener('click', function() {
        document.getElementById('delete-profile').classList.add('hidden');
        document.getElementById('delete-profile').classList.remove('flex');
    });
</script>
    </section>
@endsection
