<?php

namespace App\Livewire;

use App\Livewire\Forms\CreatePost;
use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{

    public CreatePost $form;
    public $showAddPostDialog = false;


    public function add(){
        $this->form->save();
        $this->showAddPostDialog = false;
    }

    public function delete(Post $post){
        $post->delete();
    }
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all()
        ]);
    }

}
