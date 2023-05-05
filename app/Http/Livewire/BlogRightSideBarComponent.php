<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogRightSideBarComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-right-side-bar-component')->layout('layouts.base');
    }
}
