<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopQuickViewComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-quick-view-component')->layout('layouts.base');
    }
}
