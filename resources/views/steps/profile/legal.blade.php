<div>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <x-native-select label="Legal Structure" :options="[
            ['value' => '', 'name' => ''],
            ['value' => 'corporation', 'name' => 'Corporation'],
            ['value' => 'partnership', 'name' => 'Partnership'],
            ['value' => 'sole proprietorship', 'name' => 'Sole Proprietorship'],
            ['value' => 'joint venture', 'name' => 'Joint Venture'],
            ['value' => 'franchise', 'name' => 'Franchise'],
            ['value' => 'non-profit', 'name' => 'Non-Profit']]" option-label="name" option-value="value"
                wire:model="state.legal_structure" />
        </div>

        <div class="mb-4">
            <x-native-select label="Business Type?" :options="[
            ['value' =>'', 'name' => ''],
            ['value' =>'retailer', 'name' => 'Retailer'],
            ['value' =>'construction contractor', 'name' => 'Construction contractor'],
            ['value' =>'distributor', 'name' => 'Distributor'],
            ['value' =>'manufacturer', 'name' => 'Manufacturer'],
            ['value' =>'wholesaler', 'name' => 'Wholesaler'],
            ['value' =>'consultant', 'name' => 'Consultant'],
            ['value' =>'freight / transportation', 'name' => 'Freight / Transportation'],
            ['value' =>'service provider', 'name' => 'Service Provider'],
            ['value' =>'other', 'name' => 'Other']
            ]" option-label="name" option-value="value" wire:model="state.business_type" />

            @if ($this->state['business_type'] == 'other')

            <x-input label="Other" id="other" class="block mt-1 w-full" type="text" name="other" required
                wire:model="state.other" />
            @endif
        </div>

        <div class="mb-4">
            <x-native-select label="Insured?" :options="[
                ['name' => '',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model="state.insured" />
        </div>

        <div class="mb-4">
            <x-native-select label="Bonded?" :options="[
                ['name' => '',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model="state.bonded" />
        </div>

        <div class="mb-4">
            <x-native-select label="Licensed?" :options="[
                ['name' => '',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model="state.licensed" />

            @if ($this->state['licensed'] == 'yes')
            <x-input label="License Number" id="license_number" class="block mt-1 w-full" type="text"
                name="license_number" required wire:model="state.license_number" />

            @endif
        </div>

        <div class="mb-4">
            <x-input label="Tax indentification Number" id="tin" class="block mt-1 w-full" type="text" name="tin"
                required wire:model="state.tin" />
        </div>
    </div>


    <div class="mb-4">
        <x-input label="Additional Information" id="additional_information" class="block mt-1 w-full" type="text"
            name="additional_information" required wire:model="state.additional_information" />
    </div>
</div>