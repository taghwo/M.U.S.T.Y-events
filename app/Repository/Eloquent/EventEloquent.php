<?php

namespace App\Repository\Eloquent;

use App\Models\Event;
use App\Repository\RepositoryAbstract;
use App\Repository\Contracts\EventInterface;

class EventEloquent extends RepositoryAbstract implements EventInterface
{
    public function entity()
    {
        return Event::class;
    }
}
