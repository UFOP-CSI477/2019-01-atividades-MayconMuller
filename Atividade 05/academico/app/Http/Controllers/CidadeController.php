<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Estado;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //comentário simples para dar commit




        // Model -> recuperação dos dados

        //$estados = Estado::all();
        $estados = Estado::orderBy('nome')->get();


        $cidades  =  Cidade::orderBy ('nome')->get();
        //$cidadesI = Cidade::find($estado); Não funciona
        //$cidadesB = Cidade::where('estado_id', $estado->id)->get();

        // View -> apresentar
        return view('cidades.index')
                ->with('cidades', $cidades)
                ->with('estados', $estados);
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // Estados
      $estados = Estado::orderBy('nome')->get();

      return view('cidades.create')
                ->with('estados', $estados);

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
        //

        Cidade::create($request->all());
        //$cidade->estado_id = $request->input('estado_id');


        //$product->category_id = $request->input('category_id');

        //Mensagem de sucesso
        //--Flash
        //mensagem->campo
        session()->flash('mensagem', 'Cidade inserida com sucesso');

        return redirect()->route('cidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        //
        $estados = Estado::orderBy('nome')->get();


        return view('cidades.show')->with('cidade', $cidade)
                                   ->with('estados', $estados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        //
        $estados = Estado::orderBy('nome')->get();
        return view('cidades.edit')->with('cidade', $cidade)
                                    ->with('estados', $estados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        //
         //Opção 02
        $cidade->fill($request->all());


        //para ambras as opções
        $cidade->save();


        session()->flash('mensagem', 'Cidade Atualizado com sucesso!');

        return redirect()->route('cidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {

          // Excluir o estado

        $cidade->delete();

        session()->flash('mensagem', 'Cidade excluida com sucesso!');

        return redirect()->route('cidades.index');
    }
}
