<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\Company;
use App\Steps\BankingInformation;
use App\Steps\CompanyLegal;
use App\Steps\CompanyProfile;
use Vildanbina\LivewireWizard\WizardComponent;

class FormWizard extends WizardComponent
{
    // My custom class property
    public Company $compnay;


    public array $steps = [
        CompanyProfile::class,
        CompanyLegal::class,
        BankingInformation::class,
    ];

    /*
      * Will return App\Models\User instance or will create empty User (based on $userId parameter) 
      */
    public function model(): Company
    {
        return new Company();
    }
}