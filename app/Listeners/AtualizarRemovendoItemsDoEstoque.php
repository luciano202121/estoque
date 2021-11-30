<?php

namespace App\Listeners;

use App\Events\ItemsDoUsuario;
use GerenciamentoDoEstoqueDoProduto;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AtualizarRemovendoItemsDoEstoque
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
     * @param  ItemsDoUsuario  $event
     * @return void
     */
    public function handle(ItemsDoUsuario $event)
    {
       (new GerenciamentoDoEstoqueDoProduto($event->produto))->removerProdutoDoEstoque();
    }
}
