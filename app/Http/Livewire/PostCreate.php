<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostCreate extends Component
{
    public $body;

    public function addPost()
    {
        // Post::create([
        //     'body' => $this->body,
        //     'user_id' => Auth::id()
        // ]);

        auth()->user()->posts()->create([
            'body' => $this->body
        ]);

        $this->body = ""; 
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
