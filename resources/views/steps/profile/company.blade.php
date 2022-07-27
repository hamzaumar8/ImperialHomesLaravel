<div>
    <div class="mb-4">
        <x-input label="Company Name" type="text" placeholder="Enter Company Name" required
            wire:model.lazy="state.name" />
    </div>

    <div class="grid grid-cols-2 gap-4">
        <!--  -->
        <div class="mb-4">
            <x-input label="Company Email" type="email" placeholder="Company Email" required
                wire:model.lazy="state.email" />
        </div>

        <div class="mb-4">
            <x-input label="Website" type="url" placeholder="Compnay Website Url" required
                wire:model.lazy="state.website" />
        </div>

        <!--  -->
        <div class="mb-4">
            <x-inputs.maskable label="Phone Number 1" mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']"
                placeholder="Phone number 1" required wire:model.lazy="state.phone1" />
        </div>

        <div class="mb-4">
            <x-inputs.maskable label="Phone Number 2 (Optional)"
                mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Phone number 2" required
                wire:model.lazy="state.phone2" />
        </div>

        <div class="mb-4">
            <x-input label="Establiment Date" type="date" required wire:model.lazy="state.established_date" />
        </div>

        <div class="mb-4">
            <x-input label="Gross Annual Sale" placeholder="Gross Annual Sale" type="text" required
                wire:model.lazy="state.gross_annual_sale" />
        </div>

        <div class="mb-4">
            <x-native-select label="Previously Work With IHL" :options="[
                ['name' => 'Choose one',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model.lazy="state.prev_work_status" />
        </div>

        <div class="mb-4">
            <x-input label="Geographical Area" placeholder="Geographical Area" type="text" required
                wire:model.lazy="state.geographical_area" />
        </div>

        <!--  -->
        <div class="mb-4">
            <x-textarea wire:model.lazy="state.mailing_address" label="Mailing address"
                placeholder="Company Mailing Address" placeholder="Enter Mailing address" required />
        </div>

        <div class="mb-4">
            <x-textarea label="General Details Of Service / Goods" required
                placeholder="General Details Of Service / Goods" wire:model.lazy="state.details_of_service_goods" />
        </div>

    </div>
</div>