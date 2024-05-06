<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionariosController extends Controller
{
    protected  $model;
    
    public function __construct(Funcionario $funcionario) {
        $this->model = $funcionario;
    }

    public function index()
    {
        return response()->json($this->model->all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->model->create($request->all());
            return response(('Criado com sucesso'));
        } catch(\Throwable $th) {
            throw $th;
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
        $funcionarios = $this ->model->find($id);
        if(!$funcionarios)
        {
            return response('Cliente não localizado');
        }
        return response($funcionarios);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $funcionarios = $this->model->find($id);
        if(!$funcionarios)
        {
            return response('Cliente não encontrado');
        }
        try { 
            $dados = $request->all();
            $funcionarios->fill($dados)->save();
            return response('Cliente Atualizado');
         } catch(\Throwable $th) {
            throw $th;
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $funcionarios = $this ->model->find($id);
        if(!$funcionarios)
        {
            return response('Cliente não encontrado');
        }
        try {
            $funcionarios->delete();
            return response('Cliente deletado');
        }
        catch(\Throwable $th) {
            throw $th;
        }
    }

}
