<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopCartComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-cart-component')->layout('layouts.basef1');
    }
}
