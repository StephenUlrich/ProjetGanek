<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogStandardLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-standard-left-sidebar-component')->layout('layouts.base');
    }
}
