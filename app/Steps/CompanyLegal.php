<?php

namespace App\Steps;

use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class CompanyLegal extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'steps.profile.legal';

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'legal_structure' => $this->model->legal_structure,
            'business_type' => $this->model->business_type,
            'other' => $this->model->other,
            'insured' => $this->model->insured,
            'bonded' => $this->model->bonded,
            'licensed' => $this->model->licensed,
            'license_number' => $this->model->license_number,
            'additional_information' => $this->model->additional_information,
            'tin' => $this->model->tin,
        ]);
    }

    /*
    * Step icon 
    */
    public function icon(): string
    {
        return 'adjustments';
    }

    /*
     * When Wizard Form has submitted
     */
    public function save($state)
    {
        $user = $this->model;

        $user->name     = $state['name'];
        $user->email    = $state['email'];

        $user->save();
    }

    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.legal_structure' => ['required'],
                'state.business_type' => ['required'],
                'state.other' => ['string'],
                'state.insured' => ['required'],
                'state.bonded' => ['required'],
                'state.licensed' => ['required'],
                'state.license_number' => ['required'],
                'state.additional_information' => ['required'],
                'state.tin' => ['required'],
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
        return __('Compnay Legals');
    }
}