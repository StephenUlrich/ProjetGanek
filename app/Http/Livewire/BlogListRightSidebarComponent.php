<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogListRightSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-list-right-sidebar-component')->layout('layouts.base');
    }
}
