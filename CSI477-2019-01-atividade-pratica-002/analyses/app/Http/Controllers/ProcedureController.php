<?php

namespace App\Http\Controllers;

use App\Procedure;
use App\Test;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProcedureController extends Controller
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
        //orderBy('nome')->get();
        $procedures = Procedure::orderBy('name')->get();
        // View -> apresentar
        return view('procedimentos.index')
                ->with('procedures', $procedures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         //$estados = Estado::orderBy('nome')->get();

      return view('procedimentos.create');
                
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

        Procedure::create($request->all());
        //$cidade->estado_id = $request->input('estado_id');

        
        //$product->category_id = $request->input('category_id');

        //Mensagem de sucesso
        //--Flash
        //mensagem->campo
        session()->flash('mensagem', 'Procedimento inserida com sucesso');

        return redirect()->route('procedimentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedimento)
    {
        //
        $testes = Test::orderBy('nome')->get();


        return view('procedimentos.show')->with('procedimento', $procedimento)
                                         ->with('testes', $testes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedimento)
    {
        //

          // $estados = Estado::orderBy('nome')->get(); PEGAR OS TESTES
        return view('procedimentos.edit')->with('procedimento', $procedimento);
                                    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedimento)
    {
        //
         $procedimento->fill($request->all());


        //para ambras as opções
        $procedimento->save();


        session()->flash('mensagem', 'Procedimento Atualizado com sucesso!');

        return redirect()->route('procedimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedure $procedimento)
    {
        //

        //$test=Test::all();
        $count = Test::where('procedures_id', $procedimento->id)->count();
        //if ($procedimento->testes->sum('procedures_id')== 0) {

        if ($count == 0) {

          $procedimento->delete();
          session()->flash('mensagem', 'Procedimento excluido com sucesso!');

          return redirect()->route('procedimentos.index');
        }else{
            session()->flash('mensagemDanger', 'Este procedimento não pode ser excluido! pois possui exames marcados');
          return redirect()->route('procedimentos.index');
        }








        //$procedimento->delete();

        //session()->flash('mensagem', 'Procedimento excluido com sucesso!');

        //return redirect()->route('procedimentos.index');
    }
}
