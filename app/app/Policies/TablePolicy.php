<?php

namespace App\Policies;

use App\Models\Table;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TablePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_tables');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Table $table)
    {
        return $user->can('view_tables');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_tables');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Table $table)
    {
        return $user->can('update_tables');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Table $table)
    {
        return $user->can('delete_tables');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Table $table)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Table $table)
    {
        return false;
    }
}
