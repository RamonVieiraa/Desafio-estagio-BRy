<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionariosController;

Route::middleware("auth:sanctum")->get("user", function (Request $request) {
    return $request->user();
});

Route::get('/index',[FuncionariosController::class,'index']);
Route::post('/store',[FuncionariosController::class,'store']);
Route::get('/edit/{id}',[FuncionariosController::class,'edit']);
Route::delete('/delete/{id}',[FuncionariosController::class,'destroy']);
Route::put('/update/{id}',[FuncionariosController::class,'update']);