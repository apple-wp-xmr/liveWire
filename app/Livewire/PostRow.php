<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;
    public bool $showEditDialog = false;

    public PostForm $form;

    public function save()
    {
        $this->form->update($this->post);
        $this->showEditDialog = false;
    }

    public function mount($post)
    {
        $this->post = $post;
        $this->form->title = $post->title;
        $this->form->content = $post->content;
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
