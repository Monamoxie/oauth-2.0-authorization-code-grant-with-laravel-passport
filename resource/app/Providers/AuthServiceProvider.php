<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        // By default, client should only be able to do this and nothing more, except explitly stated in the scopes param
        Passport::setDefaultScope([
            'view-posts'
        ]);

        Passport::tokensCan([
            'view-posts' => 'View Article posts',
            'view-users' => 'View a list of all the users on the resource'
        ]);

        Passport::tokensExpireIn(now()->addDays(1));

    }
}
