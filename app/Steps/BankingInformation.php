<?php

namespace App\Steps;

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
     * When Wizard Form has submitted
     */
    public function save($state)
    {
        $company = $this->model;

        // $user->name = $state['name'];
        // $user->email = $state['email'];

        // $user->save();
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
                'state.account_number'    => ['required', 'numeric'],
            ],
            [],
            [
                'state.name'     => __('Bank Name'),
                'state.email'    => __('Bank Address'),
                'state.email'    => __('Beneficiary Name'),
                'state.email'    => __('Account Number'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('Banking information');
    }
}