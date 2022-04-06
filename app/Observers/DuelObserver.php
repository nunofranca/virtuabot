<?php

namespace App\Observers;

use App\Models\Duel;

class DuelObserver
{
    /**
     * Handle the Duel "created" event.
     *
     * @param  \App\Models\Duel  $duel
     * @return void
     */
    public function created(Duel $duel)
    {
        //
    }

    /**
     * Handle the Duel "updated" event.
     *
     * @param  \App\Models\Duel  $duel
     * @return void
     */
    public function updated(Duel $duel)
    {
        //
    }

    /**
     * Handle the Duel "deleted" event.
     *
     * @param  \App\Models\Duel  $duel
     * @return void
     */
    public function deleted(Duel $duel)
    {
        //
    }

    /**
     * Handle the Duel "restored" event.
     *
     * @param  \App\Models\Duel  $duel
     * @return void
     */
    public function restored(Duel $duel)
    {
        //
    }

    /**
     * Handle the Duel "force deleted" event.
     *
     * @param  \App\Models\Duel  $duel
     * @return void
     */
    public function forceDeleted(Duel $duel)
    {
        //
    }
}
