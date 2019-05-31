<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MateriasUsersController;
use Illuminate\Http\Request;
use App\Materia as materia;
class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('formmateria');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getidbymail($mail){
        $dato= DB::table('users')->where('users.email','=',$mail)->get('users.id');
        return $dato;
    }
    public function store(Request $request)
    {

        $materia = new Materia;
        $materia->name_m = $request->get('materia');
        $materia->save();
        $idmateria = DB::getPdo()->lastInsertId();
        $iduser = $this->getidbymail($request->get('mail'));
        MateriasUsersController::guardar($idmateria,substr($iduser,7,-2));
        return redirect('/');
    }

    public function show($id)
    {

    }


    public function mostrar()
    {
        $datos =  DB::table('users')
            ->join('materias_users', 'users.id', '=', 'materias_users.user_id')
            ->join('materias', 'materias_users.subject_id', '=', 'materias.id')
            ->get();
        return view('layouts.allsubjectview',compact('datos'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
