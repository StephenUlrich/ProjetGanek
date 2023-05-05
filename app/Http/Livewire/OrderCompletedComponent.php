<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderCompletedComponent extends Component
{
    public function render()
    {
        return view('livewire.order-completed-component')->layout('layouts.basef1');
    }
}
