<div>
    <form wire:submit.prevent="save">
        @csrf
        <div class="mb-4 text-xl font-semibold text-gray-700">
            {{ __('Contact Person') }}
        </div>

        <div class="grid grid-cols-4 gap-4">
            <div class="">
                <div class="shadow-md p-2 mb-4 rounded">
                    @if($passport_picture)
                    <img src="{{$passport_picture->temporaryUrl()}}" class="max-w-full max-h-[150px] text-center"
                        alt="">
                    @else
                    <img src="{{asset('assets/img/profile/default.png')}}" class="max-w-full max-h-[150px] text-center"
                        alt="default profile">
                    @endif
                </div>
                <div class="mb-4">
                    <x-input label="Passport Picture" type="file" wire:model="passport_picture" required />
                </div>
            </div>
            <div class="col-span-3">
                <div class="grid grid-cols-2 gap-4">
                    <x-input label="Full Name" type="text" placeholder="Full Name" required wire:model="name" />

                    <x-input label="Email" type="text" required wire:model="email" disabled />

                    <x-input label="Position/Title" id="position" type="text" placeholder="Position or Title" required
                        wire:model="position" />

                    <x-inputs.maskable label="Phone No. 1"
                        mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Phone number 1"
                        required wire:model="phone1" />

                    <x-inputs.maskable label="Phone No. 2 (optional)"
                        mask="['(###) ###-####', '+# ### ###-####', '+## ## ####-####']" placeholder="Phone number 2"
                        wire:model="phone2" />

                    <x-inputs.maskable label="ID Number (Ghana Card Only)" mask="AAA-#########-#"
                        placeholder="GHA-000000000-0" required wire:model="id_number" />

                </div>
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-button rose type="submit" spinner="submit" :label="__('Save')" />
        </div>
    </form>
</div>