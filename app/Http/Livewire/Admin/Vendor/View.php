<?php

namespace App\Http\Livewire\Admin\Vendor;

use App\Models\Company;
use Livewire\Component;

class View extends Component
{
    public Company $company;
    public function render()
    {
        return view('livewire.admin.vendor.view');
    }
}