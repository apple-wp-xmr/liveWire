<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfile extends Component
{

    public User $user;

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
        sleep(1);
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
