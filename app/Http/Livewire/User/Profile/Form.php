<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Vildanbina\LivewireWizard\WizardComponent;
use Livewire\Component;

class Form extends Component
{
    public User $user;
    public $name, $position, $phone1, $phone2, $id_number, $passport_picture;

    public function mount()
    {
        $this->name = Auth::user()->name;

        $profile = Profile::where('user_id', Auth::user()->id)->first();
        if ($profile) {
            $this->position = $profile->position;
        }
    }



    public function render()
    {
        return view('livewire.user.profile.form');
    }
}