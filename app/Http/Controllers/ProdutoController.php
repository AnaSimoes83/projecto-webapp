<?php

namespace App\Http\Controllers;

use App\Produto;
use App\PontoDados;
use App\Opcao;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::where('estado','=','Em curso')->paginate(10);

        if($request->ver=='todos'){
            $produtos = Produto::paginate(10);    
        }

        if($request->has('nome')){
            $produtos = Produto::where('nome','=',$request->nome)->paginate(10);
        }

        return view('produtos.index')->with('produtos',$produtos);

        // if($request->params['']=='todos'){
        //     $produtos = Produto::all();    
        // }else {
        //     $produtos = Produto::where('nome','=',request()->params['nome'])->get();
       
        // return view('produtos.index')->with('produtos',$produtos);
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produto::all();       
        return view('produtos.create')->with('produtos',$produtos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->fill($request->all());
        $produto->save();

        $pontodados=new PontoDados();
        $pontodados['nome']="Referência";
        $pontodados['tipo']="Texto";
        $pontodados['produto_id'] = $produto->id;
        $pontodados->save();

        $pontodados=new PontoDados();
        $pontodados['nome']="Nome";
        $pontodados['tipo']="Texto";
        $pontodados['produto_id'] = $produto->id;
        $pontodados->save();

        $pontodados=new PontoDados();
        $pontodados['nome']="Preço";
        $pontodados['tipo']="Numérico inferior";
        $pontodados['produto_id'] = $produto->id;
        $pontodados->save();

        $pontodados=new PontoDados();
        $pontodados['nome']="Imagens";
        $pontodados['tipo']="Texto";
        $pontodados['produto_id'] = $produto->id;
        $pontodados->save();

        $pontodados=new PontoDados();
        $pontodados['nome']="Notas";
        $pontodados['tipo']="Texto";
        $pontodados['produto_id'] = $produto->id;
        $pontodados->save();

        $pontodados=new PontoDados();
        $pontodados['nome']="Link compra";
        $pontodados['tipo']="Texto";
        $pontodados['produto_id'] = $produto->id;
        $pontodados->save();

        $pontodados=new PontoDados();
        $pontodados['nome']="Link informação";
        $pontodados['tipo']="Texto";
        $pontodados['produto_id'] = $produto->id;
        $pontodados->save();

        return redirect()->route('produtos.edit',$produto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        $produtos = Produto::all();
        return view('produtos.show')->with('produto',$produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit')->with('produto',$produto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->fill($request->all());
        $produto->save();
        return redirect()->route('produtos.edit',$produto); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index');
    }

}
