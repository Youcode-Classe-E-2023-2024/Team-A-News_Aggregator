<?php

namespace App\Livewire;

use Livewire\Component;

class CommentsSection extends Component
{
    public $comments = [];
    public $news;

    function addComment() {
            $this->comments = [1];
    }

    public function mount($news)
    {
        $this->news = $news;
    }

    public function render()
    {
        return view('livewire.comments-section');
    }
}
