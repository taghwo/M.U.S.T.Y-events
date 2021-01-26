<?php

namespace App\Http\Controllers;

use App\Repository\Contracts\EventInterface;

class AdminEventController extends Controller
{
    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }
    public function show($id)
    {
        $event = $this->event->withModels(['voters','images.imagevotes','votes'])->find($id);

        return view('admin.events.show', ['event'=> $event]);
    }
}
