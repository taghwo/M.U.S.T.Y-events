<?php

namespace App\Http\Controllers;

use App\Repository\Contracts\EventInterface;

class EventController extends Controller
{
    protected $event;
    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("events.index");
    }
}
