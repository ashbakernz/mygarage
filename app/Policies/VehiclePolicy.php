<?php

namespace App\Policies;

use App\User;
use App\Vehicle;
use Illuminate\Auth\Access\HandlesAuthorization;

class VehiclePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any vehicle.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the vehicle.
     *
     * @param  App\User  $user
     * @param  App\Vehicle  $vehicle
     * @return bool
     */
    public function view(User $user, Vehicle $vehicle)
    {
        return false;
    }

    /**
     * Determine whether the user can create a vehicle.
     *
     * @param  App\User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the vehicle.
     *
     * @param  App\User  $user
     * @param  App\Vehicle  $vehicle
     * @return bool
     */
    public function update(User $user, Vehicle $vehicle)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the vehicle.
     *
     * @param  App\User  $user
     * @param  App\Vehicle  $vehicle
     * @return bool
     */
    public function delete(User $user, Vehicle $vehicle)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the vehicle.
     *
     * @param  App\User  $user
     * @param  App\Vehicle  $vehicle
     * @return bool
     */
    public function restore(User $user, Vehicle $vehicle)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the vehicle.
     *
     * @param  App\User  $user
     * @param  App\Vehicle  $vehicle
     * @return bool
     */
    public function forceDelete(User $user, Vehicle $vehicle)
    {
        return false;
    }
}
