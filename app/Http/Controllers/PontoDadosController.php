<?php

namespace App\Http\Controllers;

use App\PontoDados;
use App\Produto;
use Illuminate\Http\Request;

class PontoDadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pontosdados = PontoDados::paginate(10);
        return view('pontosdados.index')->with('pontosdados',$pontosdados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pontosdados = PontoDados::all();
        return view('produtos.show')->with('pontodados',$pontosdados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pontosdados = new PontoDados();
        $pontosdados->fill($request->all());
        $pontosdados->save();
        return redirect()->route('produtos.edit', $pontosdados->produto_id);
    }

    /**
     * Display the specified resource.
     *  
     * @param  \App\PontoDados  $pontoDados
     * @return \Illuminate\Http\Response
     */
    public function show(PontoDados $pontoDados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PontoDados  $pontoDados
     * @return \Illuminate\Http\Response
     */
    public function edit(PontoDados $pontosdado)
    {
        return view('pontosdados.edit')->with('pontosdados',$pontosdado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PontoDados  $pontoDados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PontoDados $pontosdado)
    {
        $pontosdado->fill($request->all());
        $pontosdado->save();
        return redirect()->route('produtos.edit', $pontosdado->produto_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PontoDados  $pontoDados
     * @return \Illuminate\Http\Response
     */
    public function destroy(PontoDados $pontosdado)
    {
        $pontosdado->delete();
        return redirect()->route('produtos.edit', Produto::findOrFail($pontosdado->produto_id));
    }
}
