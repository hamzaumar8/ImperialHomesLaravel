<?php

namespace App\Steps;

use Illuminate\Support\Facades\Auth;
use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class BankingInformation extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'steps.profile.banking';

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'bank_name' => $this->model->bank_name,
            'bank_address' => $this->model->bank_address,
            'beneficiary_name' => $this->model->beneficiary_name,
            'account_number' => $this->model->account_number,
        ]);
    }

    /*
    * Step icon 
    */
    public function icon(): string
    {
        return 'cash';
    }

    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.bank_name'     => ['required'],
                'state.bank_address'    => ['required',],
                'state.beneficiary_name'    => ['required',],
                'state.account_number'    => ['required',],
            ],
            [],
            [
                'state.name'     => __('Bank Name'),
                'state.bank_address'    => __('Bank Address'),
                'state.beneficiary_name'    => __('Beneficiary Name'),
                'state.account_number'    => __('Account Number'),
            ],
        ];
    }

    /*
     * When Wizard Form has submitted
     */
    public function save($state)
    {

        // dd($this->model, $state);
        $company = $this->model;

        $company->user_id = Auth::user()->id;
        $company->name = $state['name'];
        $company->email = $state['email'];
        $company->mailing_address = $state['mailing_address'];
        $company->phone1 = $state['phone1'];
        $company->phone2 = $state['phone2'];
        $company->website = $state['website'];
        $company->details_of_service_goods = $state['details_of_service_goods'];
        $company->established_date = $state['established_date'];
        $company->gross_annual_sale = $state['gross_annual_sale'];
        $company->prev_work_status = $state['prev_work_status'];
        $company->geographical_area = $state['geographical_area'];

        $company->legal_structure = $state['legal_structure'];
        $company->business_type = $state['business_type'];
        $company->insured = $state['insured'];
        $company->bonded = $state['bonded'];
        $company->licensed = $state['licensed'];
        $company->tin = $state['tin'];

        $company->bank_name = $state['bank_name'];
        $company->bank_address = $state['bank_address'];
        $company->beneficiary_name = $state['beneficiary_name'];
        $company->account_number = $state['account_number'];

        $company->save();

        return redirect()->route('profile');
    }



    /*
     * Step Title
     */
    public function title(): string
    {
        return __('Banking information');
    }
}