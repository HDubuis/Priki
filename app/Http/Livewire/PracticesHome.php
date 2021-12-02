<?php

namespace App\Http\Livewire;

use App\Models\Practice;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class PracticesHome extends Component
{
    public $nbDays;
    public Collection $practices;
    public function render()
    {

        $practices = Practice::whereHas(
            'publicationState',
            function ($publicationState) {
                return $publicationState->where('slug', 'PUB');
            }
        );

        if(isset($this->nbDays)){
            $practices = $practices->where('updated_at','>=',Carbon::now()->subDays((int)$this->nbDays)->toDateTimeString());
        }

        $this->practices = $practices->get();
        return view('livewire.practices-home');
    }
}
