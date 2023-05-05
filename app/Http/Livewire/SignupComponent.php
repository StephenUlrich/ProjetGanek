<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SignupComponent extends Component
{
    public function render()
    {
        return view('livewire.signup-component')->layout('layouts.basef1');
    }
}
