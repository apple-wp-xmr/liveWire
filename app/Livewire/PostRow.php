<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;
    public bool $showEditDiaolg = false;
    public PostForm $form;

    public function mount($post)
    {
        $this->post = $post;
        $this->form->title = $this->post->title;
        $this->form->content = $this->post->content;
    }

    public function save()
    {
        $this->form->update($this->post);
        $this->showEditDiaolg = false;
    }

    public function archive()
    {
        $this->post->archive();
    }

    public function render()
    {
        return view('livewire.post-row');
    }
}
