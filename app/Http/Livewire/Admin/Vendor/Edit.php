<?php

namespace App\Http\Livewire\Admin\Vendor;

use App\Models\Company;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public Company $company;
    public $name, $email, $mailing_address, $phone1, $phone2, $website, $details_of_service_goods, $established_date, $gross_annual_sale, $prev_work_status, $geographical_area;

    public $legal_structure, $business_type, $other, $insured, $bonded, $licensed, $license_number, $additional_information, $tin;

    public $bank_name, $bank_address, $beneficiary_name, $account_number;

    public function mount($company)
    {
        $this->name = $company->name;
        $this->email = $company->email;
        $this->mailing_address = $company->mailing_address;
        $this->phone1 = $company->phone1;
        $this->phone2 = $company->phone2;
        $this->website = $company->website;
        $this->details_of_service_goods = $company->details_of_service_goods;
        $this->established_date = $company->established_date;
        $this->gross_annual_sale = $company->gross_annual_sale;
        $this->prev_work_status = $company->prev_work_status;
        $this->geographical_area = $company->geographical_area;

        $this->legal_structure = $company->legal_structure;
        $this->business_type = $company->business_type;
        $this->other = $company->other;
        $this->insured = $company->insured;
        $this->bonded = $company->bonded;
        $this->licensed = $company->licensed;
        $this->license_number = $company->license_number;
        $this->additional_information = $company->additional_information;
        $this->tin = $company->tin;

        $this->bank_name = $company->bank_name;
        $this->bank_address = $company->bank_address;
        $this->beneficiary_name = $company->beneficiary_name;
        $this->account_number = $company->account_number;
    }

    protected function rules()
    {
        return [
            'name'     => 'required|string|unique:companies,name,' . $this->company->id,
            'email' => 'required|string|email|max:255||unique:companies,email,' . $this->company->id,
            'mailing_address' => 'required|string|max:255',
            'phone1' => 'required|max:20',
            'phone2' => 'max:20',
            'website' => 'url|max:255',
            'details_of_service_goods' => 'required|max:255',
            'established_date' => 'required|max:255',
            'gross_annual_sale' => 'required|numeric',
            'prev_work_status' => 'required|max:255',
            'geographical_area' => 'required|max:255',
            'legal_structure' => 'required',
            'business_type' => 'required',
            'insured' => 'required',
            'bonded' => 'required',
            'licensed' => 'required',
            'tin' => 'required',
            'bank_name'  => 'required',
            'bank_address' => 'required',
            'beneficiary_name' => 'required',
            'account_number' => 'required',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function updateCompany()
    {
        // Validate the fields before updating.
        $this->validate();
        $this->company->name = $this->name;
        $this->company->email = $this->email;
        $this->company->mailing_address = $this->mailing_address;
        $this->company->phone1 = $this->phone1;
        $this->company->phone2 = $this->phone2;
        $this->company->website = $this->website;
        $this->company->details_of_service_goods = $this->details_of_service_goods;
        $this->company->established_date = $this->established_date;
        $this->company->gross_annual_sale = $this->gross_annual_sale;
        $this->company->prev_work_status = $this->prev_work_status;
        $this->company->geographical_area = $this->geographical_area;

        $this->company->legal_structure = $this->legal_structure;
        $this->company->business_type = $this->business_type;
        $this->company->other = $this->other;
        $this->company->insured = $this->insured;
        $this->company->bonded = $this->bonded;
        $this->company->licensed = $this->licensed;
        $this->company->license_number = $this->license_number;
        $this->company->additional_information = $this->additional_information;
        $this->company->tin = $this->tin;

        $this->company->bank_name = $this->bank_name;
        $this->company->bank_address = $this->bank_address;
        $this->company->beneficiary_name = $this->beneficiary_name;
        $this->company->account_number = $this->account_number;

        $this->company->save();

        return redirect()->route('admin.vendors');
    }

    public function render()
    {
        return view('livewire.admin.vendor.edit');
    }
}