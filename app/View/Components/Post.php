<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    public $post;
    /**
     * Create a new component instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.post');
    }
}
