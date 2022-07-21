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
        return 'check';
    }

    /*
     * When Wizard Form has submitted
     */
    public function save($state)
    {
        $user = $this->model;

        $user->name = $state['name'];
        $user->email = $state['email'];

        $user->save();
    }

    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.name'     => ['required', Rule::unique('users', 'name')->ignoreModel($this->model)],
                'state.email'    => ['required', Rule::unique('users', 'email')->ignoreModel($this->model)],
            ],
            [],
            [
                'state.name'     => __('Name'),
                'state.email'    => __('Email'),
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