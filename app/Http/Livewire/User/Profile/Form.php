<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Form extends Component
{
    use Actions;
    use WithFileUploads;
    public $name, $email, $position, $phone1, $phone2, $id_number, $passport_picture;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone1' => 'required|string|max:20',
            'id_number' => 'required|string|max:20',
            'passport_picture' => 'required|mimes:webp,jpeg,jpg,png',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function save()
    {
        $this->validate();

        $profile = new Profile();
        $profile->user_id = Auth::user()->id;
        $profile->position = $this->position;
        $profile->phone1 = $this->phone1;
        $profile->phone2 = $this->phone2;
        $profile->id_number = $this->id_number;
        $imageName = Carbon::now()->timestamp . '.' . $this->passport_picture->extension();
        $this->passport_picture->storeAs('profile', $imageName);
        $profile->passport_picture = $imageName;
        $profile->save();

        $profile->user->name = $this->name;
        $profile->user->save();

        return redirect('/dashboard')->with('status', 'Profile updated!');
    }

    public function render()
    {
        return view('livewire.user.profile.form');
    }
}