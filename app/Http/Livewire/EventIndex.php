<?php

namespace App\Http\Livewire;

use App\Repository\Contracts\EventInterface;
use App\Repository\Contracts\ImageVotingInterface;
use Livewire\Component;
use Livewire\WithPagination;

class EventIndex extends Component
{
    use WithPagination;

    public function render()
    {
        $event = app()->make(EventInterface::class);

        return view('livewire.event-index', [
            'events' => $event->withModels(['images'])->fetchPaginated(6),
        ]);
    }

    public function vote($payload)
    {
        if (!auth()->check()) {
            return  redirect('/login');
        }
        $imageVote = app()->make(ImageVotingInterface::class);

        try {
            if ($this->blockDuplicateVoting($payload) === null) {
                $imageVote->createModel([
                    "image_id" => $payload[1],
                    "event_id" => $payload[0],
                    "user_id" => auth()->id()
                    ]);
                session()->flash('success', 'Vote submitted.');
            } else {
                session()->flash('error', 'You have already voted for this event');
            }
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
    }

    public function blockDuplicateVoting($payload)
    {
        $imageVote = app()->make(ImageVotingInterface::class);

        return $imageVote->findFirstWhere(['user_id' => auth()->id(), 'event_id' => $payload[0]]);
    }
}
