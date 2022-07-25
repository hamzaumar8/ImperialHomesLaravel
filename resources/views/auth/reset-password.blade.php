<x-guest-layout>
    <x-auth-card>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input label="Email" id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input label="Password" id="password" class="block mt-1 w-full" type="password" name="password"
                    required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input label="Confirm Password" id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex  mt-4">
                <x-button type="submit" rose class="w-full" :label="__('Reset Password')" />
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>