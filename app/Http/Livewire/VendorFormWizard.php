<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;
use Illuminate\Validation\Rule;

class VendorFormWizard extends Component
{
    public $currentStep = 1;
    public $amount, $description, $status = 1, $stock;
    // 
    public $name, $email, $mailing_address, $phone1, $phone2, $website, $details_of_service_goods, $established_date, $gross_annual_sale, $prev_work_status, $geographical_area;

    public $successMessage = '';

    public function render()
    {
        return view('livewire.vendor-form-wizard');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name'     => 'required|string|unique:companies',
            'email'    => 'required|string|email|max:255|unique:companies',
            'mailing_address'    => 'required|string|max:255',
            'phone1'    => 'required|max:20',
            'phone2'    => 'max:20',
            'website'    => 'url|max:255',
            'details_of_service_goods'    => 'required|max:255',
            'established_date'    => 'required|max:255',
            'gross_annual_sale'    => 'required|numeric',
            'prev_work_status'    => 'required|max:255',
            'geographical_area'    => 'required|max:255',
        ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Company::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'description' => $this->description,
            'stock' => $this->stock,
            'status' => $this->status,
        ]);

        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
    }
}