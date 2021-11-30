<?php

namespace App\Listeners;

use App\Events\ItemsDoUsuarioCancelado;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DevolvendoItemsAoEstoque
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ItemsDoUsuarioCancelado  $event
     * @return void
     */
    public function handle(ItemsDoUsuarioCancelado $event)
    {
        //
    }
}
