<?php

namespace App\Policies;

use App\Models\mejaa;
use App\Models\users;
use Illuminate\Auth\Access\Response;

class MejaaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(users $users): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(users $users, mejaa $mejaa): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(users $users): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(users $users, mejaa $mejaa): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(users $users, mejaa $mejaa): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(users $users, mejaa $mejaa): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(users $users, mejaa $mejaa): bool
    {
        //
    }
}
