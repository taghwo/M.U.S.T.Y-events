<?php

namespace App\Repository\Eloquent;

use App\Models\ImageVote;
use App\Repository\RepositoryAbstract;
use App\Repository\Contracts\ImageVotingInterface;

class ImageVotingEloquent extends RepositoryAbstract implements ImageVotingInterface
{
    public function entity()
    {
        return ImageVote::class;
    }
}
