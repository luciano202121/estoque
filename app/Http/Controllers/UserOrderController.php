<?php

namespace App\Http\Controllers;

use App\Models\UserOrder;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    protected $nome;
    protected $valor;
    protected $descricao;
    protected $quantidade;

    public function __construct($nome,$valor,$descricao,$quantidade)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function show(UserOrder $userOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(UserOrder $userOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserOrder $userOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserOrder $userOrder)
    {
        //
    }
}
