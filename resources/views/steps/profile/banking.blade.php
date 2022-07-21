<div>

    <div class="mb-4 text-xl font-semibold text-gray-700">
        {{ __('Contact Person') }}
    </div>

    <div class="mb-4">
        <x-input label="Bank Name" id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" required
            wire:model="state.bank_name" />
    </div>

    <div class="mb-4">
        <x-input label="Bank Address" id="bank_address" class="block mt-1 w-full" type="email" name="bank_address"
            required wire:model="state.bank_address" />
    </div>

    <div class="mb-4">
        <x-input label="Beneficiary Name" id="beneficiary_name" class="block mt-1 w-full" type="tel"
            name="beneficiary_name" required wire:model="state.beneficiary_name" />
    </div>

    <div class="mb-4">
        <x-input label="Account Number" id="account_number" class="block mt-1 w-full" type="tel" name="account_number"
            required wire:model="state.account_number" />
    </div>
</div>