<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use Livewire\Form;

class ProfileForm extends Form
{    
    public User $user;
    #[Validate]
    public $username = '';
    public $bio = '';
    public $receive_emails;

    public function setUser(User $user){
        $this->user = $user;
        $this->username = $user->username;
        $this->bio = $user->bio;
        $this->receive_emails = false;
    }

    public function update(){
        $this->validate();
        $this->user->username = $this->username;
        $this->user->bio = $this->bio;
        $this->user->save();
    }

    public function rules(){
        return [
            'username' => ['required', Rule::unique('users', 'username')->ignore($this->user)]
        ];
    }



}
