<?php /** @noinspection ALL */

namespace App\Policies;

use App\User;
use App\books;
use Illuminate\Auth\Access\HandlesAuthorization;

class bookspolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the books.
     *
     * @param  \App\User  $user
     * @param  \App\books  $books
     * @return mixed
     */
    public function view(User $user, books $books)
    {
        //
    }

    /**
     * Determine whether the user can create books.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the books.
     *
     * @param  \App\User  $user
     * @param  \App\books  $books
     * @return mixed
     */
    public function update(User $user, books $books)
    {
        //
        return $books->user_id == $user->id;
//            return $books->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the books.
     *
     * @param  \App\User  $user
     * @param  \App\books  $books
     * @return mixed
     */
    public function delete(User $user, books $books)
    {
        //
    }

    /**
     * Determine whether the user can restore the books.
     *
     * @param  \App\User  $user
     * @param  \App\books  $books
     * @return mixed
     */
    public function restore(User $user, books $books)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the books.
     *
     * @param  \App\User  $user
     * @param  \App\books  $books
     * @return mixed
     */
    public function forceDelete(User $user, books $books)
    {
        //
    }
}
