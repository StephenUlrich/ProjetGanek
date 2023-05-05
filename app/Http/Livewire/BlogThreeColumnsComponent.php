<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogThreeColumnsComponent extends Component
{
    public function render()
    {
        return view('livewire.blog-three-columns-component')->layout('layouts.base');
    }
}
