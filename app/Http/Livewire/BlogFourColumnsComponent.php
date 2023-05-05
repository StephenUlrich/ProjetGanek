<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogFourColumnsComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-four-columns-component')->layout('layouts.base');
    }
}
