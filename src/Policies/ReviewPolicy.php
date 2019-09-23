<?php

namespace Laraecart\Ecommerce\Policies;

use Litepie\User\Contracts\UserPolicy;
use Laraecart\Ecommerce\Models\Review;

class ReviewPolicy
{

    /**
     * Determine if the given user can view the review.
     *
     * @param UserPolicy $user
     * @param Review $review
     *
     * @return bool
     */
    public function view(UserPolicy $user, Review $review)
    {
        if ($user->canDo('ecommerce.review.view') && $user->isAdmin()) {
            return true;
        }

        return $review->user_id == user_id() && $review->user_type == user_type();
    }

    /**
     * Determine if the given user can create a review.
     *
     * @param UserPolicy $user
     * @param Review $review
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('ecommerce.review.create');
    }

    /**
     * Determine if the given user can update the given review.
     *
     * @param UserPolicy $user
     * @param Review $review
     *
     * @return bool
     */
    public function update(UserPolicy $user, Review $review)
    {
        if ($user->canDo('ecommerce.review.edit') && $user->isAdmin()) {
            return true;
        }

        return $review->user_id == user_id() && $review->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given review.
     *
     * @param UserPolicy $user
     * @param Review $review
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Review $review)
    {
        return $review->user_id == user_id() && $review->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given review.
     *
     * @param UserPolicy $user
     * @param Review $review
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Review $review)
    {
        if ($user->canDo('ecommerce.review.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given review.
     *
     * @param UserPolicy $user
     * @param Review $review
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Review $review)
    {
        if ($user->canDo('ecommerce.review.approve')) {
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
