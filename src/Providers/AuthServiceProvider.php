<?php

namespace Laraecart\Ecommerce\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind Category policy
        'Laraecart\Ecommerce\Models\Category' => \Laraecart\Ecommerce\Policies\CategoryPolicy::class,
// Bind Brand policy
        'Laraecart\Ecommerce\Models\Brand' => \Laraecart\Ecommerce\Policies\BrandPolicy::class,
// Bind Product policy
        'Laraecart\Ecommerce\Models\Product' => \Laraecart\Ecommerce\Policies\ProductPolicy::class,
// Bind Review policy
        'Laraecart\Ecommerce\Models\Review' => \Laraecart\Ecommerce\Policies\ReviewPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
