<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input label="Email / Phone Number" id="emailphone" class="block mt-1 w-full" type="text"
                    placeholder="Enter your Email or Phone number" name="emailphone" :value="old('emailphone')" required
                    autofocus />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-input label="Password" id="password" class="block mt-1 w-full" type="password" name="password"
                    required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-5">
                <div class="block">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>

            <div class="flex items-center justify-end mt-5">
                <x-button rose class="w-full" type="submit" :label="__('Log in')" />
            </div>

            <div class=" flex items-center justify-center mt-4">
                @if (Route::has('register'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Not a member?') }} <span class="font-bold">{{ __('Create one')}}
                </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>