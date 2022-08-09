<div>
    <style>
    body {
        margin-top: 40px;
    }

    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }

    .displayNone {
        display: none;
    }
    </style>
    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button"
                    class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button"
                    class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button"
                    class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">

        <h3> Step 1</h3>

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
                    <x-input label="Website" type="url" placeholder="Compnay Website Url eg:https://example.com"
                        required wire:model.defer="website" />
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
                        required wire:model.defer="phone2" />
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
                                ['name' => 'No',  'value' => 'no'], ]" option-label="name" option-value="value"
                        wire:model.defer="prev_work_status" />
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

        <x-button rose right-icon="chevron-right" wire:click="firstStepSubmit" spinner="firstStepSubmit"
            :label="__('Next')" />
    </div>

    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>

                <div class="form-group">
                    <label for="description">Product Status</label><br />
                    <label class="radio-inline"><input type="radio" wire:model="status" value="1"
                            {{{ $status == '1' ? "checked" : "" }}}> Active</label>
                    <label class="radio-inline"><input type="radio" wire:model="status" value="0"
                            {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>
                    @error('status') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="description">Product Stock</label>
                    <input type="text" wire:model="stock" class="form-control" id="productAmount" />
                    @error('stock') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button"
                    wire:click="back(1)">Back</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>

                <table class="table">
                    <tr>
                        <td>Product Name:</td>
                        <td><strong>{{$name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product Amount:</td>
                        <td><strong>{{$amount}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product status:</td>
                        <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product Description:</td>
                        <td><strong>{{$description}}</strong></td>
                    </tr>
                    <tr>
                        <td>Product Stock:</td>
                        <td><strong>{{$stock}}</strong></td>
                    </tr>
                </table>

                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button"
                    wire:click="back(2)">Back</button>
            </div>
        </div>
    </div>
</div>