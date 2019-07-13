<?php

namespace App\Http\Controllers;

use App\Regioe;
use Illuminate\Http\Request;

class RegioeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // Model -> recuperação dos dados
        $regioes = Regioe::all();
        // View -> apresentar
        return view('regioes.index')
                ->with('regioes', $regioes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('regioes.create');
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
        
        Regioe::create($request->all());

        //Mensagem de sucesso
        //--Flash
        //mensagem->campo
        session()->flash('mensagem', 'Região inserida com sucesso');




        //return redirect('/estados');
        return redirect()->route('regioes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regioe  $regioe
     * @return \Illuminate\Http\Response
     */
    public function show(Regioe $regio)
    {
        //
        return view('regioes.show')->with('regiao', $regio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regioe  $regioe
     * @return \Illuminate\Http\Response
     */
    public function edit(Regioe $regio)
    {
        //
        return view('regioes.edit')->with('regioe', $regio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regioe  $regioe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regioe $regio)
    {
        //
        // Opção 01
        //$estado->nome = $request->nome->nome

        //Opção 02
        $regio->fill($request->all());


        //para ambras as opções
        $regio->save();


        session()->flash('mensagem', 'Região Atualizado com sucesso!');

        return redirect()->route('regioes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regioe  $regioe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regioe $regio)
    {
        //
        // Excluir o estado

        $regio->delete();

        session()->flash('mensagem', 'Regiao excluida com sucesso!');

        return redirect()->route('regioes.index');
    }
}
