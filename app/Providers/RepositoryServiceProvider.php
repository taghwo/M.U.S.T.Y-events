<?php

namespace App\Providers;

use App\Repository\Contracts\EventImageInterface;
use App\Repository\Contracts\EventInterface;
use App\Repository\Contracts\ImageVotingInterface;
use App\Repository\Eloquent\EventEloquent;
use App\Repository\Eloquent\EventImageEloquent;
use App\Repository\Eloquent\ImageVotingEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EventInterface::class, EventEloquent::class);
        $this->app->bind(EventImageInterface::class, EventImageEloquent::class);
        $this->app->bind(ImageVotingInterface::class, ImageVotingEloquent::class);
    }
}
