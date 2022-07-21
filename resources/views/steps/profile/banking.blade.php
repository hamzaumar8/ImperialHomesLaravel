<div>

    <div class="mb-4 text-xl font-semibold text-gray-700">
        {{ __('Contact Person') }}
    </div>
    <div class="mb-4">
        <x-label for="bank_name" :value="__('Full bank_name')" />
        <x-input id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" required
            wire:model.lazy="bank_name" />
    </div>

    <div class="mb-4">
        <x-label for="bank_address" :value="__('bank_address/Title')" />
        <x-input id="bank_address" class="block mt-1 w-full" type="email" name="bank_address" required
            wire:model.lazy="bank_address" />
    </div>

    <div class="mb-4">
        <x-label for="phone1" :value="__('Phone No. 1')" />
        <x-input id="phone1" class="block mt-1 w-full" type="tel" name="phone1" required wire:model.lazy="phone1" />
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
</div>