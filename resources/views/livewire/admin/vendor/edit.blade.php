<div>
    <form method="POST" wire:submit.prevent="updateCompany">
        @csrf
        <!-- Compnay Profile -->
        <div>
            <div class="mb-4">
                <x-input label="Company Name" type="text" placeholder="Enter Company Name" required
                    wire:model.defer="name" />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!--  -->
                <div class="mb-4">
                    <x-input label="Company Email" type="email" placeholder="Company Email" required
                        wire:model.defer="email" />
                </div>

                <div class="mb-4">
                    <x-input label="Website" type="url" placeholder="Compnay Website Url" required
                        wire:model.defer="website" />
                </div>

                <!--  -->
                <div class="mb-4">
                    <x-inputs.maskable label="Phone Number 1"
                        mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Phone number 1"
                        required wire:model.defer="phone1" />
                </div>

                <div class="mb-4">
                    <x-inputs.maskable label="Phone Number 2 (Optional)"
                        mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Phone number 2"
                        wire:model.defer="phone2" />
                </div>

                <div class="mb-4">
                    <x-input label="Establiment Date" type="date" required wire:model.defer="established_date" />
                </div>

                <div class="mb-4">
                    <x-inputs.currency label="Gross Annual Sale" placeholder="Gross Annual Sale" prefix="¢" required
                        class="pl-3" wire:model.defer="gross_annual_sale" />
                </div>

                <div class="mb-4">
                    <x-native-select label="Previously Work With IHL" :options="[
                ['name' => 'Choose one',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model.defer="prev_work_status" />
                </div>

                <div class="mb-4">
                    <x-input label="Geographical Area" placeholder="Geographical Area" type="text" required
                        wire:model.defer="geographical_area" />
                </div>

                <!--  -->
                <div class="mb-4">
                    <x-textarea wire:model.defer="mailing_address" label="Mailing address"
                        placeholder="Company Mailing Address" placeholder="Enter Mailing address" required />
                </div>

                <div class="mb-4">
                    <x-textarea label="General Details Of Service / Goods" required
                        placeholder="General Details Of Service / Goods" wire:model.defer="details_of_service_goods" />
                </div>

            </div>
        </div>
        <!-- Compnay Legal Information -->
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
            ['value' => 'non-profit', 'name' => 'Non-Profit']]" option-label="name" option-value="value"
                        wire:model.defer="legal_structure" />
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
            ]" option-label="name" option-value="value" wire:model.defer="business_type" />

                    @if ($this->business_type == 'other')

                    <div class="mt-2">
                        <x-input label="Other" type="text" required wire:model.defer="other" placeholder="" />
                    </div>
                    @endif
                </div>

                <div class="mb-4">
                    <x-native-select label="Insured?" :options="[
                ['name' => 'Choose one',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model.defer="insured" />
                </div>

                <div class="mb-4">
                    <x-native-select label="Bonded?" :options="[
                ['name' => 'Choose one',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model.defer="bonded" />
                </div>

                <div class="mb-4">
                    <x-native-select label="Licensed?" :options="[
                ['name' => 'Choose one',  'value' => ''],
                ['name' => 'Yes',  'value' => 'yes'],
                ['name' => 'No',  'value' => 'no'],
                ]" option-label="name" option-value="value" wire:model.defer="licensed" />

                    @if ($this->licensed == 'yes')
                    <x-input label="License Number" placeholder="License Number" required
                        wire:model.defer="license_number" />

                    @endif
                </div>

                <div class="mb-4">
                    <x-input label="Tax indentification Number" placeholder="Tax indentification Number" type="text"
                        required wire:model.defer="tin" />
                </div>
            </div>

            <div class="mb-4">
                <x-textarea label="Additional Information" placeholder="Additional Information" required
                    wire:model.defer="additional_information" />
            </div>
        </div>

        <!-- Bank Info -->
        <div>
            <div class="mb-4">
                <x-input label="Bank Name" type="text" placeholder="Bank Name" required wire:model.defer="bank_name" />
            </div>

            <div class="mb-4">
                <x-input label="Bank Address" type="text" placeholder="Bank Address" required
                    wire:model.defer="bank_address" />
            </div>

            <div class="mb-4">
                <x-input label="Beneficiary Name" type="tel" placeholder="Beneficiary Name" required
                    wire:model.defer="beneficiary_name" />
            </div>

            <div class="mb-4">
                <x-input label="Account Number" type="tel" placeholder="Account Number" required
                    wire:model.defer="account_number" />
            </div>
        </div>

        <div>
            <x-button rose type="submit" spinner="updateCompany" :label="__('Update')" />
        </div>
    </form>
</div>