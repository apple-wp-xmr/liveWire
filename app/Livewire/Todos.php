<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]

class Todos extends Component
{   
    public $todo = '';

    public $todos = [];

    public function mount(){
        $this->todos = [
            'Take out trash',
            'Do dishes'
        ];
    }

    // or you can do updatedTodo
    public function updated($property, $value){
        if($property == 'todo'){
            $this->todo = strtoupper($value);
            //$this->validate();
        }
    }

    public function add(){
        $this->todos[] = $this->todo;
        $this->todo = '';
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
