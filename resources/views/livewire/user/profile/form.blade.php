<div>
    <form method="POST" wire:submit.prevent="sendInvite">
        @csrf
        <div class="mb-4 text-xl font-semibold text-gray-700">
            {{ __('Contact Person') }}
        </div>
        <div class="mb-4">
            <x-input label="Full Name" id=" name" class="block mt-1 w-full" type="text" name="name" required
                wire:model.lazy="name" />
            @error('name') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <x-input label="Position/Title" id="position" class="block mt-1 w-full" type="text" name="position" required
                wire:model.lazy="position" />
            @error('position') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <x-input label="Phone No. 1" id="phone1" class="block mt-1 w-full" type="tel" name="phone1" required
                wire:model.lazy="phone1" />
            @error('phone1') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <x-input label="Phone No. 2 (optional)" id="phone2" class="block mt-1 w-full" type="tel" name="phone2"
                wire:model.lazy="phone2" />
            @error('phone2') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="mb-4">
            <x-input label="ID Number (Ghana Card Only)" id="id_number" class="block mt-1 w-full" type="tel"
                name="id_number" required wire:model.lazy="id_number" />
            @error('id_number') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button type='submit'>
                {{ __('Send Invite') }}
            </x-button>
        </div>
    </form>
</div>