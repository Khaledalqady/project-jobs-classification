<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Employer;
use Illuminate\Auth\Access\Response;



class EmployerPolicy
{
    /**
     * Create a new policy instance.
     */
    //public function __construct()
    //{
        //
    //}
     public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Employer $employer)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Employer $employer)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Employer $employer)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Employer $employer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Employer $employer)
    {
        //
    }
}
