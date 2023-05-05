<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopProductDetailComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-product-detail-component')->layout('layouts.base');
    }
}
