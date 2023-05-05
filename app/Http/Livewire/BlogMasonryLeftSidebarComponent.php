<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogMasonryLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-masonry-left-sidebar-component')->layout('layouts.base');
    }
}
