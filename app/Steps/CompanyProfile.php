<?php

namespace App\Steps;

use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class CompanyProfile extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'steps.profile.company';

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'name' => $this->model->name,
            'email' => $this->model->email,
            'mailing_address' => $this->model->mailing_address,
            'phone1' => $this->model->phone1,
            'phone2' => $this->model->phone2,
            'website' => $this->model->website,
            'details_of_service_goods' => $this->model->details_of_service_goods,
            'established_date' => $this->model->established_date,
            'gross_annual_sale' => $this->model->gross_annual_sale,
            'prev_work_status' => $this->model->prev_work_status,
            'geographical_area' => $this->model->geographical_area,
        ]);
    }

    /*
    * Step icon 
    */
    public function icon(): string
    {
        return 'office-building';
    }


    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.name'     => ['required', 'string', Rule::unique('companies', 'name')->ignoreModel($this->model)],
                'state.email'    => ['required', 'string', 'email', 'max:255', Rule::unique('companies', 'email')->ignoreModel($this->model)],
                'state.mailing_address'    => ['required', 'string', 'max:255'],
                'state.phone1'    => ['required', 'max:20'],
                'state.phone2'    => ['max:20'],
                'state.website'    => ['max:255'],
                'state.details_of_service_goods'    => ['required', 'max:255'],
                'state.established_date'    => ['required', 'max:255'],
                'state.gross_annual_sale'    => ['required', 'numeric', 'max:255'],
                'state.prev_work_status'    => ['required', 'max:255'],
                'state.geographical_area'    => ['required', 'max:255'],
            ],
            [],
            [
                'state.name'     => __('Company Name'),
                'state.email'    => __('Company Email'),
                'state.mailing_address'    => __('Mailing address'),
                'state.phone1'    => __('Phone Number'),
                'state.phone2'    => __('Phone Number 2'),
                'state.website'    => __('Website'),
                'state.details_of_service_goods'    => __('General Details Of Service / Goods'),
                'state.established_date'    => __('Establiment Date'),
                'state.gross_annual_sale'    => __('Gross Annual Sale'),
                'state.prev_work_status'    => __('Previously work With IHL'),
                'state.geographical_area'    => __('Geographical Area'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('Compnay Profile');
    }
}