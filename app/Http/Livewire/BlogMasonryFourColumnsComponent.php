<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogMasonryFourColumnsComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-masonry-four-columns-component')->layout('layouts.base');
    }
}
