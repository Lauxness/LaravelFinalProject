<x-guest-layout>
    <div class="mt-1 mb-1" style="width: 100%; font-size: 20px; font-weight:bold;text-align:center">
        <h1 class="text font-bold  text-white">Apply as a Tenant</h1>
    </div>

    <form method="POST" action="{{ route('tenants.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="companyName" :value="__('Company Name')" />
            <x-text-input id="companyName" class="block mt-1 w-full" type="text" name="companyName" :value="old('companyName')" required autofocus autocomplete="companyName" />
            <x-input-error :messages="$errors->get('companyName')" class="mt-2" />
        </div>
        <input type="hidden" name="isPaused" value="0">

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Domain Name -->
        <div class="mt-4">
            <x-input-label for="domain" :value="__('Domain Name')" />
            <x-text-input id="domain" class="block mt-1 w-full " type="text" name="domain" :value="old('domain')" required autocomplete="domain" />
            <x-input-error :messages="$errors->get('domain')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="domain" :value="__('Domain Name')" />
            <select id="domain" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="select" name="plan" required>
                <option value="free">Free</option>
                <option value="standard">Standard</option>
                <option value="premium">Premium</option>
            </select>
            <x-input-error :messages="$errors->get('domain')" class="mt-2" />
        </div>

        <div class="flex items-center mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Apply') }}
            </x-primary-button>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(\Session::has('success'))
    <script>
        Swal.fire({
            title: "Success",
            text: "{{\Session::get('success')}}",
            icon: "success",

        });
    </script>
    @endif
    @if ($errors->any())
    <script>
        Swal.fire({
            title: "Validation Error",
            html: "{!! implode('<br>', $errors->all()) !!}",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>
    @endif
</x-guest-layout>