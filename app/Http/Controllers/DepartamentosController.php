<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DepartamentosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('departamentos');
    }


    public function delete(Request $request){
        $id = $request->input('id');

        DB::delete('DELETE FROM departamentos WHERE id = ?', [$id]);

        //return view('departamentos');
        return redirect('/departamentos');
    }

    public function add(){
        return view ('add_departamento');
    }

    public function addToDB(Request $request){
        $nome = $request->input('nomeDepartamento');

        DB::insert('INSERT INTO departamentos (nome) VALUE (?)', [$nome]);

        //return view('departamentos');
        return redirect('/departamentos');
    }

    public function update(Request $request){
        $id = $request->input('id');

        return view('update_departamento', ['id' => $id]);
    }

    public function updateToDB(Request $request){
        $nome = $request->input('nomeDepartamento');
        $id = $request->input('idDepartamento');

        DB::update('UPDATE departamentos SET nome = ? WHERE id = ?', [$nome, $id]);

        //return view('departamentos');
        return redirect('/departamentos');
    }
}
