<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Edit extends Component
{
    use Actions;
    use WithFileUploads;
    public Profile $profile;
    public $name, $email, $position, $phone1, $phone2, $id_number, $passport_picture, $newimage;

    public function mount($profile)
    {
        $this->name = $profile->user->name;
        $this->email = $profile->user->email;
        $this->position = $profile->position;
        $this->phone1 = $profile->phone1;
        $this->phone2 = $profile->phone2;
        $this->id_number = $profile->id_number;
        $this->passport_picture = $profile->passport_picture;
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone1' => 'required|string|max:20',
            'id_number' => 'required|string|max:20',
            // 'passport_picture' => 'required|mimes:webp,jpeg,jpg,png',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function updateProfile()
    {

        $this->validate();

        // if ($this->newimage) {
        //     if ($this->passport_picture) {
        //         unlink('public/assets/img/profile/' . $this->passport_picture);
        //     }
        //     $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
        //     $this->newimage->storeAs('profile', $imageName);
        //     $this->profile->passport_picture = $imageName;
        // }
        $this->profile->position = $this->position;
        $this->profile->phone1 = $this->phone1;
        $this->profile->phone2 = $this->phone2;
        $this->profile->id_number = $this->id_number;
        $this->profile->save();

        $this->profile->user->name = $this->name;
        $this->profile->user->save();

        $this->notification()->success(
            $title = 'Profile saved',
            $description = 'Your profile was successfull saved'
        );

        // return redirect('/dashboard')->with('status', 'Profile updated!');
    }

    public function render()
    {
        return view('livewire.user.profile.edit');
    }
}