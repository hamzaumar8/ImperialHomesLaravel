<?php

namespace App\Http\Livewire\Admin\Vendor;

use Livewire\Component;

class Edit extends Component
{
    public $bank_name, $bank_address, $beneficiary_name, $account_number;

    public function mount($company)
    {
        $this->bank_name = $company->bank_name;
        $this->bank_address = $company->bank_address;
        $this->beneficiary_name = $company->beneficiary_name;
        $this->account_number = $company->account_number;
    }

    public function render()
    {
        return view('livewire.admin.vendor.edit');
    }
}