<?php

namespace App\Policies;

use App\User;
use App\Commentaire;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentairePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the comment.
     *
     * @param  \App\User  $user
     * @param  \App\Commentaire  $commentaire
     * @return mixed
     */


    public function view(User $user, Commentaire $commentaire)
    {
        //
    }

    /**
     * Determine whether the user can create comments.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->isInscrit()){
            return true;
        }
    }

    /**
     * Determine whether the user can update the comment.
     *
     * @param  \App\User  $user
     * @param  \App\Commentaire  $commentaire
     * @return mixed
     */
    public function update(User $user, Commentaire $commentaire)
    {
        return $user->id == $commentaire->user_id;
    }

    /**
     * Determine whether the user can delete the comment.
     *
     * @param  \App\User  $user
     * @param  \App\Commentaire  $commentaire
     * @return mixed
     */
    public function delete(User $user, Commentaire $commentaire)
    {
        return $user->id == $commentaire->user_id;
    }

    /**
     * Determine whether the user can restore the comment.
     *
     * @param  \App\User  $user
     * @param  \App\Commentaire  $commentaire
     * @return mixed
     */
    public function restore(User $user, Commentaire $commentaire)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the comment.
     *
     * @param  \App\User  $user
     * @param  \App\Commentaire  $commentaire
     * @return mixed
     */
    public function forceDelete(User $user, Commentaire $commentaire)
    {
        //
    }
}
