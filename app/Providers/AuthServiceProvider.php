<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();
        // Gate::define('own-porfolio', function ($user, $portfolio) {
        //     error_log('ayy nig chris has a small dick');

        //     return $user->id == $portfolio->user_id || $user->role == 'admin';
        // });

        Gate::define('own-porfolio', function ($user) {
            error_log('ayy nig chris has a small dick');

            return $user->id == 22;
        });
    }
}
