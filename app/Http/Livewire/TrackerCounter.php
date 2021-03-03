<?php

namespace App\Http\Livewire;

use App\Models\TrackCounter;
use Livewire\Component;

class TrackerCounter extends Component
{
    public TrackCounter $tracker;

    public function increment()
    {
        $this->tracker->increment('value');
    }

    public function decrement()
    {
        $this->tracker->decrement('value');
    }

    public function render()
    {
        
        return view('livewire.tracker-counter');
    }
}
