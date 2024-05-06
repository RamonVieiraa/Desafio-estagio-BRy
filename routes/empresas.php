<?php

use App\Http\Controllers\EmpresasController;

Route::get("/", [EmpresasController::class,"index"]);

Route::get("/{id}", function (int $id) {
    return "Hello, ".$id;
});
