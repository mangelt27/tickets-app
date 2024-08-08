<?php

use App\View\Components\Layout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

Route::get('/', function () {
    //return view('welcome');
    return view('test');
});

//declaracion de ruta
//Route::get('administracion/usuarios', '<Admin/Userscontroller@index');//
Route::get('/administracion/usuarios', [UsersController::class, 'index']);

// gestión

    //tickets

    //asignación

//Configuración

    //tipo

    //prioridades

//Reportes

    //Creados

    //pendientes

//Administración

    //usuarios

    //roles

    //permisos (solo lectura)
