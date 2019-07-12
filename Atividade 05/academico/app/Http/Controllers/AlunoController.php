<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Cidade;
use Illuminate\Http\Request;

class AlunoController extends Controller
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

        //$estados = Estado::all();
        $cidades = Cidade::orderBy('nome')->get();


        $alunos  =  Aluno::orderBy ('nome')->get();
        //$cidadesI = Cidade::find($estado); Não funciona
        //$cidadesB = Cidade::where('estado_id', $estado->id)->get();

        // View -> apresentar
        return view('alunos.index')
                ->with('cidades', $cidades)
                ->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

           // Estados
      $cidades = Cidade::orderBy('id')->get();

      return view('alunos.create')
                ->with('cidades', $cidades);
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

        Aluno::create($request->all());
        //$cidade->estado_id = $request->input('estado_id');

        
        //$product->category_id = $request->input('category_id');

        //Mensagem de sucesso
        //--Flash
        //mensagem->campo
        session()->flash('mensagem', 'Aluno inserido com sucesso');

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        //

        $cidades = Cidade::orderBy('id')->get();

           


        return view('alunos.show')->with('aluno', $aluno)
                                   ->with('cidades', $cidades);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        //

        //
        $cidades = Cidade::orderBy('id')->get();
        return view('alunos.edit')->with('aluno', $aluno)
                                    ->with('cidades', $cidades);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        //

        $aluno->fill($request->all());


        //para ambras as opções
        $aluno->save();


        session()->flash('mensagem', 'Aluno Atualizado com sucesso!');

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {


        $aluno->delete();

        session()->flash('mensagem', 'Aluno excluido com sucesso!');

        return redirect()->route('alunos.index');
    }
}
