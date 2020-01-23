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

        Gate::define('all-users', function($user)
        {
            return $user->hasAnyRoles(['admin', 'author', 'user']); //Cheque si el usuario tiene rol de admin o author

        });

        Gate::define('manage-users', function($user)
        {
            return $user->hasAnyRoles(['admin', 'author']); //Cheque si el usuario tiene rol de admin o author

        });

        Gate::define('edit-users', function($user)
        {
            return $user->hasRole('admin'); //Cheque si el usuario tiene rol de admin

        });

        Gate::define('delete-users', function($user)
        {
            return $user->hasRole('admin'); //Cheque si el usuario tiene rol de admin

        });

        Gate::define('adminonly-users', function($user)
        {
            return $user->hasRole('admin'); //Cheque si el usuario tiene rol de admin

        });

        Gate::define('generic-users', function($user)
        {
            return $user->hasRole('user'); //Cheque si el usuario tiene rol de admin

        });
        //
    }
}
