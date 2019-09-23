<?php

namespace Laraecart\Ecommerce\Policies;

use Litepie\User\Contracts\UserPolicy;
use Laraecart\Ecommerce\Models\Brand;

class BrandPolicy
{

    /**
     * Determine if the given user can view the brand.
     *
     * @param UserPolicy $user
     * @param Brand $brand
     *
     * @return bool
     */
    public function view(UserPolicy $user, Brand $brand)
    {
        if ($user->canDo('ecommerce.brand.view') && $user->isAdmin()) {
            return true;
        }

        return $brand->user_id == user_id() && $brand->user_type == user_type();
    }

    /**
     * Determine if the given user can create a brand.
     *
     * @param UserPolicy $user
     * @param Brand $brand
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('ecommerce.brand.create');
    }

    /**
     * Determine if the given user can update the given brand.
     *
     * @param UserPolicy $user
     * @param Brand $brand
     *
     * @return bool
     */
    public function update(UserPolicy $user, Brand $brand)
    {
        if ($user->canDo('ecommerce.brand.edit') && $user->isAdmin()) {
            return true;
        }

        return $brand->user_id == user_id() && $brand->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given brand.
     *
     * @param UserPolicy $user
     * @param Brand $brand
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Brand $brand)
    {
        return $brand->user_id == user_id() && $brand->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given brand.
     *
     * @param UserPolicy $user
     * @param Brand $brand
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Brand $brand)
    {
        if ($user->canDo('ecommerce.brand.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given brand.
     *
     * @param UserPolicy $user
     * @param Brand $brand
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Brand $brand)
    {
        if ($user->canDo('ecommerce.brand.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
