<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogStandardRightSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-standard-right-sidebar-component')->layout('layouts.base');
    }
}
