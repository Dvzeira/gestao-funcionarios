<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionario = Funcionario::all();
        return view('funcionarios', ['funcionarios' => $funcionario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      Funcionario::create($request->all());

       return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionarios.index');
    }
}
