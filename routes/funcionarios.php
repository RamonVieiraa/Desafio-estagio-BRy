<?php

use App\Http\Controllers\FuncionariosController;

Route::get("/", [FuncionariosController::class,"index"]);

Route::get("/{id}", function (int $id) {
    return "Hello, ".$id;
});
