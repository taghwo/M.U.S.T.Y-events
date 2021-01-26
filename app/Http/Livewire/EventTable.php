<?php

namespace App\Http\Livewire;

use App\Repository\Contracts\EventInterface;
use Livewire\Component;
use Livewire\WithPagination;

class EventTable extends Component
{
    use WithPagination;

    public $listeners = ['newEvent' => 'render'];

    public function render()
    {
        $event = app()->make(EventInterface::class);

        return view('livewire.event-table', [
            'events' => $event->fetchPaginated(10),
        ]);
    }
}
