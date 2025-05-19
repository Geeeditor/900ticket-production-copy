@extends('layouts.admin')

@section('title', 'Update a Shortlet')

@section('content')

    <form method="post" action="{{route('admin.shortlet.edit.update', [ 'id' => $shortlet->id ])}}" class="mx-auto flex max-w-4xl flex-col gap-4 p-5 font-sans"
        enctype="multipart/form-data" >
        @csrf

        @method('PUT')
        <div class="mb-5 text-center text-2xl font-bold">
            UPDATE SHORTLET LISTING
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
                    value="{{ old('apartment_title') ? old('apartment_title') : $shortlet->apartment_title }}" />
                <img class="absolute right-3 top-3 w-4" src="{{ asset('image/title.svg') }}" alt="title icon">
                <span class="text-xs text-gray-500">Add a title for this apartment (required)</span>
                @error('apartment_title')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="text" name="address"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('address') ? old('address') : $shortlet->address }}"
                    placeholder="Where's this apartment located" />
                <span class="text-xs text-gray-500">Provide an apartment address (required)</span>
                @error('address')
                    <div class="mt-1 text-xs text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="relative">
                <textarea placeholder="Describe the apartment" name="description"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500">{{ old('description') ? old('description') : $shortlet->description }}</textarea>
                <span class="text-xs text-gray-500">Provide detailed apartment description (required)</span>
                @error('description')
                    <div class="mt-1 text-xs text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="relative">
                <input type="number" name="bedrooms"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('bedrooms') ? old('bedrooms') : $shortlet->bedrooms }}" placeholder="Eg. 1 " />
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
                    value="{{ old('bathrooms') ? old('bathrooms') : $shortlet->bathrooms }}" placeholder="Eg. 1 " />
                <span class="text-xs text-gray-500">How many bathrooms does this apartment have? (required)</span>
                @error('bathrooms')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative flex flex-col gap-2">

                <div>
                    <select name="guest" id="guest"
                        class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500">
                        <option
                            class="w-full rounded border bg-gray-100 px-4 py-2 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                            value="false" {{ $shortlet->max_guest > 0 ? 'selected' : '' }}>No</option>
                        <option
                            class="w-full rounded border bg-gray-100 px-4 py-2 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                            value="true" {{ $shortlet->max_guest > 0 ? 'selected' : '' }}>Yes</option>
                    </select>
                    <span class="text-xs text-gray-500">Is there a max number of guest? (optional)</span>
                </div>


                <div id="max_guest" class="{{ $shortlet->max_guest > 0 ? '' : 'hidden' }}">
                    <input type="number" name="max_guest"
                        class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                        value="{{ old('max_guest') ? old('max_guest') : $shortlet->max_guest }}" placeholder="Eg. 10" />
                    <span class="text-xs text-gray-500">How many guest are allowed? (required)</span>
                    @error('max_guest')
                        <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="relative">
                <select class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    name="apartment_type" id="">

                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'loft' }}"
                        {{ $shortlet->apartment_type !== 'loft' ? '' : 'selected' }}>Loft</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Garden apartment' }}"
                        {{ $shortlet->apartment_type !== 'Garden apartment' ? '' : 'selected' }}>Garden apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Duplex' }}"
                        {{ $shortlet->apartment_type !== 'Duplex' ? '' : 'selected' }}>Duplex</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Railroad apartment' }}"
                        {{ $shortlet->apartment_type !== 'Railroad apartment' ? '' : 'selected' }}>Railroad apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Micro apartment' }}"
                        {{ $shortlet->apartment_type !== 'Micro apartment' ? '' : 'selected' }}>Micro apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Studio apartment' }}"
                        {{ $shortlet->apartment_type !== 'Studio apartment' ? '' : 'selected' }}>Studio apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Penthouse' }}"
                        {{ $shortlet->apartment_type !== 'Penthouse' ? '' : 'selected' }}>Penthouse</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Alcove studio' }}"
                        {{ $shortlet->apartment_type !== 'Alcove studio' ? '' : 'selected' }}>Alcove studio</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Luxury apartment' }}"
                        {{ $shortlet->apartment_type !== 'Luxury apartment' ? '' : 'selected' }}>Luxury apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Studio' }}"
                        {{ $shortlet->apartment_type !== 'Studio' ? '' : 'selected' }}>Studio</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Convertible apartment' }}"
                        {{ $shortlet->apartment_type !== 'Convertible apartment' ? '' : 'selected' }}>Convertible apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Low rise apartments' }}"
                        {{ $shortlet->apartment_type !== 'Low rise apartments' ? '' : 'selected' }}>Low rise apartments
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'BHK apartment' }}"
                        {{ $shortlet->apartment_type !== 'BHK apartment' ? '' : 'selected' }}>
                        BHK apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Walkup' }}"
                        {{ $shortlet->apartment_type !== 'Walkup' ? '' : 'selected' }}>Walkup</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Basement' }}"
                        {{ $shortlet->apartment_type !== 'Basement' ? '' : 'selected' }}>Basement</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Co-op apartment' }}"
                        {{ $shortlet->apartment_type !== 'Co-op apartment' ? '' : 'selected' }}>Co-op apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Condominium' }}"
                        {{ $shortlet->apartment_type !== 'Condominium' ? '' : 'selected' }}>Condominium</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Convertible studio' }}"
                        {{ $shortlet->apartment_type !== 'Convertible studio' ? '' : 'selected' }}>Convertible studio
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'High rise' }}"
                        {{ $shortlet->apartment_type !== 'High rise' ? '' : 'selected' }}>High rise</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Apartment hotel' }}"
                        {{ $shortlet->apartment_type !== 'Apartment hotel' ? '' : 'selected' }}>Apartment hotel</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Convertible flex apartment' }}"
                        {{ $shortlet->apartment_type !== 'Convertible flex apartment' ? '' : 'selected' }}>Convertible flex
                        apartment</option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Efficiency apartment' }}"
                        {{ $shortlet->apartment_type !== 'Efficiency apartment' ? '' : 'selected' }}>Efficiency apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Walk-up apartment' }}"
                        {{ $shortlet->apartment_type !== 'Walk-up apartment' ? '' : 'selected' }}>Walk-up apartment
                    </option>
                    <option value="{{ old('apartment_type') ? old('apartment_type') : 'Low rise' }}"
                        {{ $shortlet->apartment_type !== 'Low rise' ? '' : 'selected' }}>Low rise</option>
                </select>
                <span class="text-xs text-gray-500">Apartment type? (required)</span>
            </div>

            <div class="relative">
                <select
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    name="checking_option" id="">
                    <option value="Self-Check-in" {{ $shortlet->checking_option !== 'Self-Check-in' ? '' : 'selected' }}>
                        Self-Check-in</option>
                    <option value="Online Check-in"
                        {{ $shortlet->checking_option !== 'Online Check-in' ? '' : 'selected' }}>Online Check-in</option>
                    <option value="Express Check-in"
                        {{ $shortlet->checking_option !== 'Express Check-in' ? '' : 'selected' }}>Express Check-in</option>
                    <option value="Contactless Check-in"
                        {{ $shortlet->checking_option !== 'Contactless Check-in' ? '' : 'selected' }}>Contactless Check-in
                    </option>

                </select>
                <span class="text-xs text-gray-500">Guest check-in options? (required)</span>
            </div>

            <div class="relative">
                <select class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                name="apartment_availability" id="">
                <option value="1" {{ $shortlet->apartment_availability == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ $shortlet->apartment_availability == '0' ? 'selected' : '' }}>No</option>
            </select>
                <span class="text-xs text-gray-500">Is this apartment available for rent? (optional)</span>
                @error('apartment_availability')
                    <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <input type="number" placeholder="Apartment Price?" name="apartment_price" min="0"
                    step="0.01"
                    class="w-full rounded border bg-gray-100 px-4 py-3 text-sm text-black transition focus:border-red-500 focus:ring-red-500"
                    value="{{ old('apartment_price') !== null ? old('apartment_price') : $shortlet->apartment_price }}" />
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
                @php
                    $image = $shortlet->images === null ? [] : json_decode($shortlet->images);
                @endphp

                <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                    @foreach($image as $imageName)
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="{{ asset('/image/shortlet/' . basename($imageName)) }}" alt="Image" class="object-cover">
                        </div>
                        <input class="h-[15px]" type="checkbox" name="deleted_image[]" value="{{ $imageName }}"> Delete Image
                    @endforeach
                </div>

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
                class="w-full rounded border border-white bg-red-600 px-6 py-2.5 text-sm text-white transition hover:bg-red-500 md:w-1/2">
                Update Shortlet Listing
            </button>

        </div>

         <script>
            document.getElementById('guest').addEventListener('change', function() {
                let guestValue = this.value;

                /* var e = document.getElementById("ddlViewBy");
                var value = e.value;
                var text = e.options[e.selectedIndex].text; */

                const e = document.getElementById("guest");
                const valueI = e.value;
                console.log(valueI);

                const maxGuestInput = document.querySelector('input[name="max_guest"]');
                const maxGuestDiv = document.getElementById('max_guest');

                if (parseInt(maxGuestInput.value) > 1) {
                    guestValue = 'true';
                }

                if (guestValue === 'true') {
                    maxGuestDiv.classList.remove('hidden');
                } else {
                    maxGuestDiv.classList.add('hidden');
                    maxGuestInput.value = ''; // Clear the input value
                }

                if (valueI === 'false') {
                    maxGuestDiv.classList.add('hidden');
                    maxGuestInput.value = ''; // Clear the input value
                } else {

                }
            });
        </script>
    </form>




@endsection
