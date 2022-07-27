<x-guest-layout>
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input label="Name" id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input label="Phone Number" id="phone" :value="old('phone')" name="phone" required />
            </div>

            <!-- Phone Number -->
            <div class="mt-4">
                <x-input label="Email" id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input label="Password" id="password" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input label="Confirm Password" id="password_confirmation" type="password"
                    name="password_confirmation" required />
            </div>


            <div class="flex items-center justify-center mt-4">
                <x-button type="submit" rose class="w-full" :label="__('Register')" />
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('login'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }} <span class="font-bold">{{ __('Login')}}
                </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>