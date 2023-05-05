<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-left-sidebar-component')->layout('layouts.base');
    }
}
