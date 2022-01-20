<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OpinionCard extends Component
{
    public $opinion;

    public function render()
    {
        return view('livewire.opinion-card');
    }
}
