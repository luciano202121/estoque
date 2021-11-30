<?php

use App\Models\UserOrder;
use App\Models\Produto;

class GerenciamentoDoEstoqueDoProduto
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function removerProdutoDoEstoque()
    {
        foreach( $this->produto->items as $item)
        {
            Produto::find($item['id'])->decrement('quantidade', $item['quantidade']);
        }
    }

    public function devolverProdutoAoEstoque()
    {
        foreach($this->UserOrder->items as $item)
        {
            Produto::findOrFail($item['id'])->increment('quantidade',$item['quantidade']);
        }
    }
}






