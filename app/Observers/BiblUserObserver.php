<?php

namespace App\Observers;

use App\Models\BiblUser;

class BiblUserObserver
{
    /**
     * Handle the bibl user "created" event.
     *
     * @param  \App\BiblUser  $biblUser
     * @return void
     */
    public function created(BiblUser $biblUser)
    {
        $biblUser->update([
            'pool' => 10,
        ]);
    }

    /**
     * Handle the bibl user "updated" event.
     *
     * @param  \App\BiblUser  $biblUser
     * @return void
     */
    public function updated(BiblUser $biblUser)
    {
        //
    }

    /**
     * Handle the bibl user "deleted" event.
     *
     * @param  \App\BiblUser  $biblUser
     * @return void
     */
    public function deleted(BiblUser $biblUser)
    {
        //
    }

    /**
     * Handle the bibl user "restored" event.
     *
     * @param  \App\BiblUser  $biblUser
     * @return void
     */
    public function restored(BiblUser $biblUser)
    {
        //
    }

    /**
     * Handle the bibl user "force deleted" event.
     *
     * @param  \App\BiblUser  $biblUser
     * @return void
     */
    public function forceDeleted(BiblUser $biblUser)
    {
        //
    }
}
