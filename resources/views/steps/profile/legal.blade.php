<div>
    <div class="mb-4">
        <select id="legal_structure" class="block mt-1 w-full bg-white rounded-[4px] shadow-sm
        border-gray-200 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50 capitalize"
            name="legal_structure" required wire:model="state.legal_structure">
            <option value=""></option>
            <option value="corporation">Corporation</option>
            <option value="partnership">Partnership</option>
            <option value="sole proprietorship">Sole Proprietorship</option>
            <option value="joint venture">Joint Venture</option>
            <option value="franchise">Franchise</option>
            <option value="non-profit">Non-Profit</option>
        </select>
    </div>
    <div class="mb-4">
        <select id="business_type" class="block mt-1 w-full bg-white rounded-[4px] shadow-sm
        border-gray-200 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50 capitalize"
            name="business_type" required wire:model="state.business_type">
            <option value=""></option>
            <option value="retailer">Retailer</option>
            <option value="construction contractor">Construction contractor</option>
            <option value="distributor">Distributor</option>
            <option value="manufacturer">Manufacturer</option>
            <option value="wholesaler">Wholesaler</option>
            <option value="consultant">Consultant</option>
            <option value="freight / transportation">Freight / Transportation</option>
            <option value="service provider">Service Provider</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="mb-4">
        <x-input id="other" class="block mt-1 w-full" type="text" name="other" required wire:model="state.other" />
    </div>
    <div class="mb-4">
        <select id="insured" name="insured" required wire:model="state.insured" class="block mt-1 w-full bg-white rounded-[4px] shadow-sm
        border-gray-200 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
            <option value=" yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="mb-4">
        <select id="bonded" name="bonded" required wire:model="state.bonded" class="block mt-1 w-full bg-white rounded-[4px] shadow-sm
        border-gray-200 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
            <option value=" yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="mb-4">
        <select id="licensed" name="licensed" required wire:model="state.licensed" class="block mt-1 w-full bg-white rounded-[4px] shadow-sm
        border-gray-200 focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50">
            <option value=" yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="mb-4">
        <x-input id="license_number" class="block mt-1 w-full" type="text" name="license_number" required
            wire:model="state.license_number" />
    </div>
    <div class="mb-4">
        <x-input id="tin" class="block mt-1 w-full" type="text" name="tin" required wire:model="state.tin" />
    </div>
</div>