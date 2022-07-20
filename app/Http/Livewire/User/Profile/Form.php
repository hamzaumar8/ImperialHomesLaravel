<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    public $name;
    public $position;
    public $phone1;
    public $phone2;
    public $id_number;
    public $passport_picture;

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