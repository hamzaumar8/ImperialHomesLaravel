<div>
    <div class="mb-4">
        <x-input label="Bank Name" type="text" placeholder="Bank Name" required wire:model.lazy="state.bank_name" />
    </div>

    <div class="mb-4">
        <x-input label="Bank Address" type="text" placeholder="Bank Address" required
            wire:model.lazy="state.bank_address" />
    </div>

    <div class="mb-4">
        <x-input label="Beneficiary Name" type="tel" placeholder="Beneficiary Name" required
            wire:model.lazy="state.beneficiary_name" />
    </div>

    <div class="mb-4">
        <x-input label="Account Number" type="tel" placeholder="Account Number" required
            wire:model.lazy="state.account_number" />
    </div>
</div>