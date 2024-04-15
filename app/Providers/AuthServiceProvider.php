<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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
        Gate::define('UserAccess' , function (User $user){
            return $user->type_id == 1;
        });
        Gate::define('BarberAccess' , function (User $user){
            return $user->type_id == 2;
        });
        Gate::define('BossAccess' , function (User $user){
            return $user->type_id == 3;
        });
        Gate::define('AdminAccess' , function (User $user){
            return $user->type_id == 4;
        });
        //
    }
}
