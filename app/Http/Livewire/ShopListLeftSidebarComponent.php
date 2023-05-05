<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopListLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-list-left-sidebar-component')->layout('layouts.base');
    }
}
