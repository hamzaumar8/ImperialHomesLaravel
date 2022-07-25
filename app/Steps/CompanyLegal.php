<?php

namespace App\Steps;


use Vildanbina\LivewireWizard\Components\Step;


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
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.legal_structure' => ['required'],
                'state.business_type' => ['required'],
                'state.insured' => ['required'],
                'state.bonded' => ['required'],
                'state.licensed' => ['required'],
                'state.tin' => ['required'],
            ],
            [],
            [
                'state.legal_structure' => __('Legal Structure'),
                'state.business_type' => __('Business Type'),
                'state.insured' => __('Insured'),
                'state.bonded' => __('Bonded'),
                'state.licensed' => __('Licensed'),
                'state.tin' => __('Tax indentification Number'),
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


    // TODO::Others validate
    public function updatedStateBusinessType($name, $value)
    {

        if ($name == 'other') {
            $this->validate(['state.other' => ['required'],]);
            // dd('hamza out', $name, $value);
        }
        // Something you want
    }
    // TODO::Others validate
    public function updatedStateLicensed($name, $value)
    {

        if ($name == 'yes') {
            // dd('hamza out', $name, $value);
        }
        // Something you want
    }
}