<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogListLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-list-left-sidebar-component')->layout('layouts.base');
    }
}
