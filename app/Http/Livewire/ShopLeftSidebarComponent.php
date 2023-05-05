<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-left-sidebar-component')->layout('layouts.base');
    }
}
