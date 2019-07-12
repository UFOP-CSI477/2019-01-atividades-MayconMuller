<?php

namespace App\Http\Controllers;

use App\Test;
use App\Procedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$procedures = Procedure::orderBy('name')->get();

        //$test = Test:: all()->where('users_id', Auth::id());

        $test = Test::orderBy('date','desc')->where('users_id', Auth::id())->get();
        $count = Test::where('users_id', Auth::id())->count();
    

         
        // $price = Procedure::sum('price')->where('users_id', Auth::id())->get();

           // pega o maior preço da tabela
         //$price = Procedure::max('price');

        //$price = Procedure::sum('price')->where('users_id', Auth::id())->get();

        //$price = Procedure::where('users_id', Auth::user()->id)->sum('price');

        $procedimentos = Procedure::orderBy('name')->get();

        $price = Procedure::sum('price');

        //$price = $test->sum('price');




        





        // View -> apresentar
        return view('testes.index')
                 ->with('testes', $test)
                 ->with('procedimentos', $procedimentos)
                 ->with('price', $price)
                 ->with('count', $count);
                 
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $procedures = Procedure::orderBy('name')->get();


        return view('testes.create')->with('procedures', $procedures);
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

        Test::create($request->all());
        
        //Mensagem de sucesso
        //--Flash
        //mensagem->campo
        session()->flash('mensagem', 'Exame inserido  com sucesso');

        return redirect()->route('testes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $testis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $testis)
    {
        //
        $procedures = Procedure::orderBy('name')->get();
        return view('testes.edit')->with('testis', $testis)
                                  ->with('procedures', $procedures);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $testis)
    {
        //

        //
         $testis->fill($request->all());


        //para ambras as opções
        $testis->save();


        session()->flash('mensagem', 'Exame Atualizado com sucesso!');

        return redirect()->route('testes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $testis)
    {
        //

        $testis->delete();

        session()->flash('mensagem', 'Exame excluido com sucesso!');

        return redirect()->route('testes.index');
    }
}
