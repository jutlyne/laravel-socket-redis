<?php

namespace App\Observers;

use App\Events\ChatEvent;
use App\Models\Chat;

class ChatObserver
{
    /**
     * Handle the Chat "created" event.
     *
     * @param  \App\Models\Chat  $chat
     * @return void
     */
    public function created(Chat $chat)
    {
        broadcast(new ChatEvent($chat))->toOthers();
    }

    /**
     * Handle the Chat "updated" event.
     *
     * @param  \App\Models\Chat  $chat
     * @return void
     */
    public function updated(Chat $chat)
    {
        //
    }

    /**
     * Handle the Chat "deleted" event.
     *
     * @param  \App\Models\Chat  $chat
     * @return void
     */
    public function deleted(Chat $chat)
    {
        //
    }

    /**
     * Handle the Chat "restored" event.
     *
     * @param  \App\Models\Chat  $chat
     * @return void
     */
    public function restored(Chat $chat)
    {
        //
    }

    /**
     * Handle the Chat "force deleted" event.
     *
     * @param  \App\Models\Chat  $chat
     * @return void
     */
    public function forceDeleted(Chat $chat)
    {
        //
    }
}
