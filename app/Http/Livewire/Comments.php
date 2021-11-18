<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $comments;
    
    public function mount(){
        $comments = Comment::all();
        $this->comments = $comments;
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
