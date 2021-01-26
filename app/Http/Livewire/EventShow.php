<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventShow extends Component
{
    public $event;

    public function render()
    {
        return view('livewire.event-show');
    }
}
