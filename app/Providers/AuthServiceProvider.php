<?php

namespace App\Providers;

// * Add as GateContract
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isAdmin',function($user){
            return $user->user_type=='admin';
        });
        
        $gate->define('isCasher',function($user){
            return $user->user_type=='casher';
        });

        
        $gate->define('isWaiter',function($user){
            return $user->user_type=='waiter';
        });

        $gate->define('isCooker',function($user){
            return $user->user_type=='cooker';
        });

  
        //
    }
}
