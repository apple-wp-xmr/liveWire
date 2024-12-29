<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfile extends Component
{

    public User $user;
    public $isFormSuccess = false;
    #[Validate]
    public $username = '';
    public $bio = '';


    public function mount(){
        $this->user = auth()->user();
        $this->username = $this->user->username;
        $this->bio = $this->user->bio;
    }

    public function save(){
        $this->validate();
        $this->user->username = $this->username;
        $this->user->bio = $this->bio;
        $this->user->save();
        $this->isFormSuccess = true;
        // sleep(1);
    }

    public function rules(){
        return [
            'username' => ['required', Rule::unique('users', 'username')->ignore($this->user)]
        ];
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
