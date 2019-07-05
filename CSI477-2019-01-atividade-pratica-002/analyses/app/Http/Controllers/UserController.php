<?php

namespace App\Http\Controllers;

use App\User;
use App\Procedure;
use Illuminate\Http\Request;

class UserController extends Controller
{
    


    public function index()
    {
        //
          // Model -> recuperação dos dados
        //orderBy('nome')->get();
        $usuarios = User::orderBy('name')->get();
        // View -> apresentar
        return view('users.index')
                ->with('usuarios', $usuarios);
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
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //

        //$usuarios = User::orderBy('name')->get();
        $procedures = Procedure:: orderBy('name')->get();


        return view('users.show')->with('user', $user)
                                   ->with('procedures', $procedures);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('users.edit')->with('usuario', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->fill($request->all());


        //para ambras as opções
        $user->save();


        session()->flash('mensagem', 'Usuario Atualizado com sucesso!');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //

        $user->delete();

        session()->flash('mensagem', 'Usuário excluido com sucesso !');

        return redirect()->route('users.index');

   }



}
