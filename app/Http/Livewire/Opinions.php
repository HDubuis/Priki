<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Opinions extends Component
{
    public $practice;
    public $opinions;

    public function render()
    {
        $this->opinions = $this->practice->opinions;
        return view('livewire.opinions');
    }
}
