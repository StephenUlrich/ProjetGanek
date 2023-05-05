<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogSingleComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-single-component')->layout('layouts.base');
    }
}
