<?php

namespace App\Repository\Eloquent;

use App\Models\EventImage;
use App\Repository\Contracts\EventImageInterface;
use App\Repository\RepositoryAbstract;

class EventImageEloquent extends RepositoryAbstract implements EventImageInterface
{
    public function entity()
    {
        return EventImage::class;
    }
}
