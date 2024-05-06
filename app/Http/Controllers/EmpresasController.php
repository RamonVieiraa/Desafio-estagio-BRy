<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresasController extends Controller
{
    protected  $model;
    
    public function __construct(Empresa $empresa) {
        $this->model = $empresa;
    }

    public function index()
    {
        return response()->json($this->model->all());
    }

}
