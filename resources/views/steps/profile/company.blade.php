<div>
    <div class="mb-4">
        <x-input label="Company Name" id="name" class="block mt-1 w-full" type="text" name="name" required
            wire:model="state.name" />
    </div>

    <div class="mb-4">
        <x-input label="Mailing address" id="mailing_address" class="block mt-1 w-full" type="text"
            name="mailing_address" required wire:model="state.mailing_address" />
    </div>
    <!--  -->
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <x-input label="Company Email" id="email" class="block mt-1 w-full" type="email" name="email" required
                wire:model="state.email" />
        </div>
        <div class="mb-4">
            <x-input label="Website" id="website" class="block mt-1 w-full" type="url" name="website" required
                wire:model="state.website" />
        </div>
    </div>

    <!--  -->
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <x-input label="Phone Number" id="phone1" class="block mt-1 w-full" type="text" name="phone1" required
                wire:model="state.phone1" />
        </div>
        <div class="mb-4">
            <x-input label="Phone Number 2" id="phone2" class="block mt-1 w-full" type="text" name="phone2"
                wire:model="state.phone2" />
        </div>
    </div>


    <div class="mb-4">
        <x-input label="General Details Of Service / Goods" id="details_of_service_goods" class="block mt-1 w-full"
            type="text" name="details_of_service_goods" required wire:model="state.details_of_service_goods" />
    </div>

    <!--  -->
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <x-input label="Establiment Date" id="established_date" class="block mt-1 w-full" type="date"
                name="established_date" required wire:model="state.established_date" />
        </div>
        <div class="mb-4">
            <x-input label="Gross Annual Sale" id="gross_annual_sale" class="block mt-1 w-full" type="text"
                name="gross_annual_sale" required wire:model="state.gross_annual_sale" />
        </div>
    </div>

    <!--  -->
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <x-native-select label="Previously work With IHL" :options="[
                ['name' => '',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model="state.prev_work_status" />
        </div>
        <div class="mb-4">
            <x-input label="Geographical Area" id="geographical_area" class="block mt-1 w-full" type="text"
                name="geographical_area" required wire:model="state.geographical_area" />
        </div>

    </div>
</div>