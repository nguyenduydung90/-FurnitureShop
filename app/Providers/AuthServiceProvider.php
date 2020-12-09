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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('admin.home',function ($user){
           if ($user->roles=='admin'){
               return true;
           }
           return false;
        });

        Gate::define('customer.homeCustomer',function ($user){
            if ($user->roles=='user'|| $user->roles=='admin'){
                return true;
            }
            return false;
        });
    }
}
