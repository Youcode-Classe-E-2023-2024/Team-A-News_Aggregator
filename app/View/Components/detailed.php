<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class detailed extends Component
{
    /**
     * Create a new component instance.
     */
    public $user_id;
    public $news;
    public $likes;

    public function __construct($news, $likes)
    {
        $this->user_id = auth()->user()->id ?? null;
        $this->news = $news;
        $this->likes = $likes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.detailed');
    }
}
