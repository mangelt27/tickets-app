<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin;
use App\Models\Entities\Admin\User;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /* Display a listing of the resource.*/

    public function index()
        {
            //$users = User::all();//Cuando son pocos usuarios
           $users = User::paginate(15);//Cuando son muchos usuarios usamos paginate por defecto 15 en 15 y debe agregar en index.blade.php  para paginar {{$users->render()}}

            return view('admin.user.index',  [
                'users' => $users,
                //'users' => DB::table('users')->paginate(15)

            ]);

            /*Pruebas publicacion variables en vista
                    /*  $rows = 'valor2 hola mundo';//creo la variable row y le paso un valor
                    //$rows2 = 'este es mi segundo contenido';
                    $texto = 'este es contenido de texto'; */

                    // return view('admin.user.index',compact('rows')); //publicar forma uno con compact
                    //return view('admin.user.index')->with('rows',$rows); //publicar forma dos con with

                    /*  return view('admin.user.index')
                        ->with('rows',$rows)
                        ->with('rows2',$rows2); //publicar forma tres varios parametros */

                    /*  return view('admin.user.index',  [
                    'rows' => $rows,
                    'rows2'=>$texto,
                    ]);         //publicar forma cuatro con array */

                    //return response()->json("hola");
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'listado de usuarios show';
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
