<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Validation\Rule;

class PostForm extends Form
{
    public $title;
    public $content;

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->title = '';
        $this->content = '';
    }

    public function update($post)
    {
        $this->validate();
        $post->update([
            'title' => $this->title,
            'content' => $this->content
        ]);
    }

    public function rules()
    {
        return [
            'title' => ['required'],
            'content' => ['required']
        ];
    }
}
