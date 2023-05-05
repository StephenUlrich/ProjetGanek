<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopProductDetailLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-product-detail-left-sidebar-component')->layout('layouts.base');
    }
}
