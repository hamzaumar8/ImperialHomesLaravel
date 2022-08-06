<div>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <x-native-select label="Legal Structure" :options="[
            ['value' => '', 'name' => 'Choose one'],
            ['value' => 'corporation', 'name' => 'Corporation'],
            ['value' => 'partnership', 'name' => 'Partnership'],
            ['value' => 'sole proprietorship', 'name' => 'Sole Proprietorship'],
            ['value' => 'joint venture', 'name' => 'Joint Venture'],
            ['value' => 'franchise', 'name' => 'Franchise'],
            ['value' => 'non-profit', 'name' => 'Non-Profit']]" option-label="name" option-value="value" wire:model.defer="state.legal_structure" />
        </div>

        <div class="mb-4">
            <x-native-select label="Business Type?" :options="[
            ['value' =>'', 'name' => 'Choose one'],
            ['value' =>'retailer', 'name' => 'Retailer'],
            ['value' =>'construction contractor', 'name' => 'Construction contractor'],
            ['value' =>'distributor', 'name' => 'Distributor'],
            ['value' =>'manufacturer', 'name' => 'Manufacturer'],
            ['value' =>'wholesaler', 'name' => 'Wholesaler'],
            ['value' =>'consultant', 'name' => 'Consultant'],
            ['value' =>'freight / transportation', 'name' => 'Freight / Transportation'],
            ['value' =>'service provider', 'name' => 'Service Provider'],
            ['value' =>'other', 'name' => 'Other']
            ]" option-label="name" option-value="value" wire:model.defer="state.business_type" />

            @if ($this->state['business_type'] == 'other')

            <div class="mt-2">
                <x-input label="Other" type="text" required wire:model.defer="state.other" placeholder="" />
            </div>
            @endif
        </div>

        <div class="mb-4">
            <x-native-select label="Insured?" :options="[
                ['name' => 'Choose one',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model.defer="state.insured" />
        </div>

        <div class="mb-4">
            <x-native-select label="Bonded?" :options="[
                ['name' => 'Choose one',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model.defer="state.bonded" />
        </div>

        <div class="mb-4">
            <x-native-select label="Licensed?" :options="[
                ['name' => 'Choose one',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model.defer="state.licensed" />

            @if ($this->state['licensed'] == 'yes')
            <x-input label="License Number" placeholder="License Number" required wire:model.defer="state.license_number" />

            @endif
        </div>

        <div class="mb-4">
            <x-input label="Tax indentification Number" placeholder="Tax indentification Number" type="text" required wire:model.defer="state.tin" />
        </div>
    </div>

    <div class="mb-4">
        <x-textarea label="Additional Information" placeholder="Additional Information" required wire:model.defer="state.additional_information" />
    </div>
</div>