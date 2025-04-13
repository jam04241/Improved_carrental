<x-guest-layout>
    <header class="text-white text-4xl font-bold text-center mb-6">Register</header>

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Column 1-->
        <div class="grid grid-cols-3 gap-4">
            <!-- First Name -->
            <div class="mb-4">
                <x-text-input id="firstname" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                    name="firstname" :value="old('firstname')" required autofocus placeholder="First Name" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>

            <!-- Middle Name -->
            <div class="mb-4">
                <x-text-input id="middlename" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                    name="middlename" :value="old('middlename')" required autofocus placeholder="Middle Name" />
                <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div class="mb-4">
                <x-text-input id="lastname" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                    name="lastname" required placeholder="Last Name" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>
        </div>

        <!-- Column 2-->
        <div x-data="{ 
            provinces: [], 
            cities: [], 
            barangays: [], 
            selectedProvince: '', 
            selectedCity: ''
        }" x-init="fetch('https://psgc.gitlab.io/api/provinces')
        .then(response => response.json())
        .then(data => provinces = data)">
            <div class="grid grid-cols-3 gap-4">
                <!-- Province -->
                <div class="mb-4">
                    <select id="province" name="province" class="w-full px-4 py-3 border rounded-md text-black" @change="selectedProvince = $event.target.value;
                fetch(`https://psgc.gitlab.io/api/provinces/${selectedProvince}/cities-municipalities`)
                .then(response => response.json())
                .then(data => cities = data)">
                        <option value="">Select Province</option>
                        <template x-for="province in provinces" :key="province . code">
                            <option :value="province . code" x-text="province.name"></option>
                        </template>
                    </select>
                    <x-input-error :messages="$errors->get('province')" class="mt-2" />
                </div>

                <!-- City -->
                <div class="mb-4">
                    <select id="city" name="city" class="w-full px-4 py-3 border rounded-md text-black" @change="selectedCity = $event.target.value;
                    fetch(`https://psgc.gitlab.io/api/cities-municipalities/${selectedCity}/barangays`)
                    .then(response => response.json())
                    .then(data => barangays = data);
        
                    fetch(`https://psgc.gitlab.io/api/cities-municipalities/${selectedCity}`)
                    .then(response => response.json())
                    .then(data => zipcode = data.zip_code || '')">
                        <option value="">Select City</option>
                        <template x-for="city in cities" :key="city . code">
                            <option :value="city . code" x-text="city.name"></option>
                        </template>
                    </select>

                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>
                <!-- Barangay -->
                <div class="mb-4">
                    <select id="barangay" name="barangay" class="w-full px-4 py-3 border rounded-md text-black">
                        <option value="">Select Barangay</option>
                        <template x-for="barangay in barangays" :key="barangay . code">
                            <option :value="barangay . code" x-text="barangay.name"></option>
                        </template>
                    </select>

                    <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
                </div>
            </div>

            <!-- Column 3-->
            <div class="grid grid-cols-2 gap-4">
                <!-- Address -->
                <div class="mb-4">
                    <x-text-input id="address" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                        name="address" :value="old('address')" required autofocus placeholder="Address" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
                <!-- Phone Number -->
                <div class="mb-4">
                    <x-text-input id="phone_number" class="w-full px-4 py-3 border rounded-md text-black" type="number"
                        name="phone_number" :value="old('phone_number')" required autofocus placeholder="+639" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>
            </div>

        </div>

        <!-- Column 5-->
        <div class="grid grid-cols-3 gap-4">
            <!-- Driver License Number -->
            <div class="mb-4">
                <label> ‎Driver License No.</label>
                <x-text-input id="driver_license" class="w-full px-4 py-3 border rounded-md text-black" type="text"
                    name="driver_license" :value="old('driver_license')" required autofocus
                    placeholder="L0X-XX-XXXXXX" />
                <x-input-error :messages="$errors->get('driver_license')" class="mt-2" />
            </div>
            <!-- License Expiration Date -->
            <div class="mb-4">
                <label> License Expiration Date</label>
                <x-text-input id="licence_exp" class="w-full px-4 py-3 border rounded-md text-black" type="date"
                    name="licence_exp" :value="old('licence_exp')" required autofocus placeholder="Expiration Date" />
                <x-input-error :messages="$errors->get('licence_exp')" class="mt-2" />
            </div>
            <!-- Upload License -->
            <div class="mb-4">
                <label> Upload License Image </label>
                <x-text-input id="driverlicense" class="w-full px-4 py-3 border rounded-md text-black bg-white"
                    type="file" name="upload_img" required autofocus placeholder="Upload License" />
                <x-input-error :messages="$errors->get('upload_img')" class="mt-2" />
            </div>
        </div>

        <!-- Column 6-->
        <div class="grid grid-cols-3 gap-4">
            <!-- Email -->
            <div class="mb-4">
                <x-text-input id="email" class="w-full px-4 py-3 border rounded-md text-black" type="email" name="email"
                    :value="old('email')" required autofocus placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mb-4">
                <x-text-input id="password" class="w-full px-4 py-3 border rounded-md text-black" type="password"
                    name="password" required autofocus placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Confirm Password -->
            <div class="mb-4">
                <x-text-input id="confirmpassword" class="w-full px-4 py-3 border rounded-md text-black bg-white"
                    type="password" name="password_confirmation" required autofocus placeholder="Confirm Password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-white hover:text-gray-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>

            <input type="hidden" name="is_banned" value="0" />
        </div>
    </form>
</x-guest-layout>
<style>
    label {
        color: white;
    }
</style>



<!-- Name -->
{{-- <div>
    <x-input-label for="name" :value="__('Name')" class="!text-white" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-input-label for="email" :value="__('Email')" class="!text-white" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" class="!text-white" />

    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div> --}}