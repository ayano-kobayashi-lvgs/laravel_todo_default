<?php

namespace App\Providers;

use App\Models\Todo;
use App\Models\User;
use App\Policies\TodoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

/**
 * AppServiceProvider
 */
class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Todo::class  => TodoPolicy::class,
    ];

    /**
     * register
     */
    public function register()
    {
    }

    /**
     * ゲートの定義
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function (User $user) {
            return $user->role === 'admin';
        });
    }
}
