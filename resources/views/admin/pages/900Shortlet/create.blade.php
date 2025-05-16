@extends('layouts.admin')

@section('title', 'Create a Shortlet')

@section('content')

    <form method="post" action="{{route('admin.shortlet.store')}}" class="mx-auto flex max-w-4xl flex-col gap-4 p-5 font-sans"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-5 text-center text-2xl font-bold">
            CREATE SHORTLET LISTING
        </div>

        @if (session()->has('success'))
            <div class="mb-4 rounded bg-green-100 p-2 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative">
                <input type="text" placeholder="Add Shortlet Title" name="apartment_title"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('apartment_title')}}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/title.svg') }}" alt="title icon">
                <span class="text-xs text-gray-500">Add a title for this apartment (required)</span>
                @error('apartment_title')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="text" name="address"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('address') }}"
                    placeholder="Where's this apartment located" />
                <span class="text-xs text-gray-500">Provide an apartment address (required)</span>
                @error('address')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <textarea placeholder="Describe the apartment" name="description"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500">{{ old('description') }}</textarea>
                <span class="text-xs text-gray-500">Provide detailed apartment description (required)</span>
                @error('description')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="number" name="bedrooms"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('bedrooms') }}" placeholder="Eg. 1 " />
                <span class="text-xs text-gray-500">How many bedrooms does this apartment have? (required)</span>
                @error('bedrooms')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative">
                <input type="number" name="bathrooms"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('bathrooms') }}" placeholder="Eg. 1 " />
                <span class="text-xs text-gray-500">How many bathrooms does this apartment have? (required)</span>
                @error('bathrooms')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

             <div class="relative flex flex-col gap-2">


            <select name="guest" id="guest" class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500">
                <option class="w-full rounded border bg-gray-100 px-4 py-2 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="false">No</option>
                <option class="w-full rounded border bg-gray-100 px-4 py-2 text-sm text-black transition focus:border-red-500 focus:ring-red-500" value="true">Yes</option>
            </select>

            <div id="max_guest" class="hidden">
                <input  type="number" name="max_guest"
                class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                value="{{ old('max_guest') }}" placeholder="Eg. 10" />

                @error('max_guest')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>
             <span class="text-xs text-gray-500">Is there a max number of guest? (required)</span>
        </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative">
                <select
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    name="apartment_type" id="">
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'loft' }}"
                        >Loft</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Garden apartment' }}"
                        >Garden apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Duplex' }}"
                        >Duplex</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Railroad apartment' }}"
                       >Railroad apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Micro apartment' }}"
                        >Micro apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Studio apartment' }}"
                        >Studio apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Penthouse' }}"
                        >Penthouse</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Alcove studio' }}"
                        >Alcove studio</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Luxury apartment' }}"
                        >Luxury apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Studio' }}"
                       >Studio</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Convertible apartment' }}"
                        >Convertible apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Low rise apartments' }}"
                        >Low rise apartments
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'BHK apartment' }}"
                        >BHK apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Walkup' }}"
                        >Walkup</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Basement' }}"
                        >Basement</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Co-op apartment' }}"
                        >Co-op apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Condominium' }}"
                        >Condominium</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Convertible studio' }}"
                       >Convertible studio
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'High rise' }}"
                        >High rise</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Apartment hotel' }}"
                        >Apartment hotel</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Convertible flex apartment' }}"
                       >Convertible flex
                        apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Efficiency apartment' }}"
                       >Efficiency apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Walk-up apartment' }}"
                        >Walk-up apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Low rise' }}"
                        >Low rise</option>
                </select>
                <span class="text-xs text-gray-500">Apartment type? (required)</span>
            </div>

            <div class="relative">
                <select
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    name="checking_option" id="">
                    <option value="Self-Check-in" >
                        Self-Check-in</option>
                    <option value="Online Check-in"
                        >Online Check-in</option>
                    <option value="Express Check-in"
                        >Express Check-in</option>
                    <option value="Contactless Check-in"
                        >Contactless Check-in
                    </option>

                </select>
                <span class="text-xs text-gray-500">Guest check-in options? (required)</span>
            </div>

            

            <div class="relative">
                <input type="number" placeholder="Apartment Price?" name="apartment_price" min="0"
                    step="0.01"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('apartment_price') }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/price.svg') }}" alt="price icon">
                <span>
                    <span class="text-xs text-gray-500">Apartment Price</span>
                    <span class="text-xs text-gray-500"> (required)</span>
                </span>
                @error('apartment_price')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
               

                <input
                    class="border-input flex w-full rounded-md border border-blue-300 bg-white text-sm text-gray-400 file:border-0 file:bg-red-800 file:text-sm file:font-medium file:text-white"
                    name="images[]" type="file" id="picture" accept=".jpg, .png, .webp, .jpeg" multiple />
                <span class="text-xs text-gray-500">Attach at least 5 apartment images</span>
                @error('images')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </div>




        <div class="flex flex-col items-center justify-center gap-4 md:flex-row">
            

            <button type="submit"
                class="w-full rounded border border-white bg-red-600 px-6 py-2.5 text-sm text-white transition hover:bg-red-500 md:w-1/2">Create
                Shortlet Listing</button>
        </div>

         <script>

document.getElementById('guest').addEventListener('change', function() {
    var guestValue = this.value;
    var maxGuestInput = document.querySelector('input[name="max_guest"]');
    var maxGuestDiv = document.getElementById('max_guest');

    if (parseInt(maxGuestInput.value) > 1) {
        guestValue = 'true';
    }

    if (guestValue === 'true') {
        maxGuestDiv.classList.remove('hidden');
    } else {
        maxGuestDiv.classList.add('hidden');
        maxGuestInput.value = ''; // Clear the input value
    }
});

    </script>
    </form>

   
@endsection
