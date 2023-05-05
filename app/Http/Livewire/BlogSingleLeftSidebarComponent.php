<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogSingleLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-single-left-sidebar-component')->layout('layouts.base');
    }
}
