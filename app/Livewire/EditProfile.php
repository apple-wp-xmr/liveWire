<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfileForm;
use Livewire\Component;

class EditProfile extends Component
{
    public ProfileForm $form;
    public $isFormSuccess = false;

    public function mount(){
        $this->form->setUser(auth()->user());
    }

    public function save(){
        $this->form->update();
        $this->isFormSuccess = true;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
