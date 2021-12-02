<?php

namespace App\Http\Livewire;

use App\Models\Practice;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class PracticesHome extends Component
{
    public $nbDays;
    public Collection $practices;
    public function render()
    {
        $this->practices = Practice::publishedModifiedOnes($this->nbDays);
        return view('livewire.practices-home');
    }
}
