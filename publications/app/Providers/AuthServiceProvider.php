<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Publication;
use App\Policies\PublicationPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Publication::class => PublicationPolicy::class,
    ]; 

    public function boot(): void
    {
        Gate::define('admin-access', function () {
            $correctPassword = 29061978;
            $getPassword = request()->query('secret');
            if($getPassword == $correctPassword) {
                return true;
            }
            return false;
         });
    }
}
