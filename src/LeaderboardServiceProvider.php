<?php

namespace DraperStudio\Leaderboard;

use Illuminate\Support\ServiceProvider;

/**
 * Class LeaderboardServiceProvider.
 */
class LeaderboardServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => base_path('/database/migrations'),
        ], 'migrations');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind(
            'DraperStudio\Leaderboard\Contracts\BoardRepository',
            'DraperStudio\Leaderboard\Repositories\EloquentBoardRepository'
        );
    }
}
