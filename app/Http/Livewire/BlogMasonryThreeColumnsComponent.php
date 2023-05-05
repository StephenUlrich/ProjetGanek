<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogMasonryThreeColumnsComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-masonry-three-columns-component')->layout('layouts.base');
    }
}
