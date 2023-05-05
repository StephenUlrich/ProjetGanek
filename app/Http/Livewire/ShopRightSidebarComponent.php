<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopRightSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-right-sidebar-component')->layout('layouts.base');
    }
}
