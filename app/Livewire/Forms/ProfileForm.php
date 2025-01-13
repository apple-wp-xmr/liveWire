<?php

namespace App\Livewire\Forms;

use App\Enums\Country;
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
    public $receive_emails = '';
    public $receive_updates = '';
    public $receive_offers = '';


    public function setUser(User $user){
        $this->user = $user;
        $this->username = $user->username;
        $this->bio = $user->bio;
        $this->receive_emails = $user->receive_emails;
        $this->receive_updates = $user->receive_updates;
        $this->receive_offers = $user->receive_offers;

        
    }

    public function update(){
        $this->validate();
        $this->user->username = $this->username;
        $this->user->bio = $this->bio;
        $this->user->receive_emails = $this->receive_emails;
        $this->user->receive_updates = $this->receive_updates;
        $this->user->receive_offers = $this->receive_offers;

        $this->user->save();
    }

    public function rules(){
        return [
            'username' => ['required', Rule::unique('users', 'username')->ignore($this->user)]
        ];
    }



}
