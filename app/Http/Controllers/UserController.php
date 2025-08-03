<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * RENDERIZAR O FORMULÁRIO
     */
    public function create()
    {
        return view('create-account');
    }

    /**
     * ARMAZENAR O USUÁRIO CRIADO NO BANCO DE DADOS.
     */
    public function store(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:200', 
            'email' => 'required|min:5|max:200|email|unique:users',
            'password' => 'required|min:2|max:200'
        ]);

        $strongPassword = $user->validatePassword($validated['password']);


        try {
            
            $user = $user->fill($validated);
            $user->password = Hash::make($validated['password']);
            $user->save();
            return back()->with('status', 'Conta criada com sucesso.');

        } catch (\Exception $ex) {
            return 'Ocorreu algum problema ao realizar a inserção!';
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
