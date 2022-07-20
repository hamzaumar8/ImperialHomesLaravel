<div>
    <form method="POST" wire:submit.prevent="sendInvite">
        @csrf
        <div class="mb-4 text-xl font-semibold text-gray-700">
            {{ __('Contact Person') }}
        </div>
        <div class="mb-4">
            <x-label for="name" :value="__('Full Name')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required wire:model.lazy="name" />
            @error('name') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <x-label for="position" :value="__('Position/Title')" />
            <x-input id="position" class="block mt-1 w-full" type="email" name="position" required
                wire:model.lazy="position" />
            @error('position') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <x-label for="phone1" :value="__('Phone No. 1')" />
            <x-input id="phone1" class="block mt-1 w-full" type="tel" name="phone1" required wire:model.lazy="phone1" />
            @error('phone1') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <x-label for="phone2" :value="__('Phone No. 2 (optional)')" />
            <x-input id="phone2" class="block mt-1 w-full" type="tel" name="phone2" wire:model.lazy="phone2" />
            @error('phone2') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <x-label for="id_number" :value="__('ID Number (Ghana Card Only)')" />
            <x-input id="id_number" class="block mt-1 w-full" type="tel" name="id_number" required
                wire:model.lazy="id_number" />
            @error('id_number') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button>
                <div wire:loading wire:target="sendInvite" class="spinner"></div>
                <svg wire:loading wire:target="sendInvite" class="w-5 h-5 mr-5 -ml-1 text-white animate-spin "
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg> {{ __('Send Invite') }}
            </x-button>
        </div>
    </form>
</div>