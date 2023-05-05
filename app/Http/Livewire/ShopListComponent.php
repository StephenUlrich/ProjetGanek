<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopListComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-list-component')->layout('layouts.base');
    }
}
