<?php

namespace App\Http\Controllers;

use App\Opcao;
use App\Produto;
use App\PontoDados;
use Illuminate\Http\Request;

class OpcaoController extends Controller
{
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
    public function create(Produto $produto)
    {
        $pontosdados = PontoDados::where('produto_id', $produto->id)->get();
        return view('opcaos.create')->with('pontosdados',$pontosdados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opcaos = new Opcao();
        $opcaos->fill($request->all());
        $opcaos->save();
        return redirect()->route('produtos.edit', $opcaos->produto_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Opcao  $opcao
     * @return \Illuminate\Http\Response
     */
    public function show(Opcao $opcao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opcao  $opcao
     * @return \Illuminate\Http\Response
     */
    public function edit(Opcao $opcao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opcao  $opcao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opcao $opcao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opcao  $opcao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opcao $opcao)
    {
        //
    }
}
