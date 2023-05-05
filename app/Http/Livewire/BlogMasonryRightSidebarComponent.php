<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogMasonryRightSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-masonry-right-sidebar-component')->layout('layouts.base');
    }
}
