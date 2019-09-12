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
        $pontosdados = PontoDados::where('produto_id', $produto->id)->orderBy('id')->get();
        return view('opcaos.create')->with('pontosdados',$pontosdados)->with('produto',$produto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produto $produto)
    {
        $inputs = $request->except('_token');
        $referencia = array_values($inputs)[0];

        $procuraRef = Opcao::where('referencia', $referencia)->get();
        if( sizeof($procuraRef) > 0)
            return back()->with('error','Já existe uma opção com essa referência. Por favor, defina uma nova referência.');

        foreach ($inputs as $key => $value) {
            $opcao = new Opcao();
            $opcao->referencia = $referencia;
            $opcao->produto_id =  $produto->id;
            $opcao->pontosdados_id = $key;
            $opcao->valor = $value ?? '';                  //admite valores nulos
            $opcao->save();
       }
       
        return redirect()->route('produtos.show', $produto);
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
