<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AlumnosRequest;
use App\Models\Alumnos;


class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formulario');
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
    $request->validate([
        'nombre_alumnos' => 'required',
        'matricula_alumnos' => 'required',
        'correo_alumnos' => 'required',
        'contraseña' => 'required',
    ]);

    $alumnos = new Alumnos();
    
    $alumnos->nombre_alumnos = $request->input('nombre_alumnos');
    $alumnos->matricula_alumnos = $request->input('matricula_alumnos');
    $alumnos->correo_alumnos = $request->input('correo_alumnos');
    $alumnos->contraseña = $request->input('contraseña');
    
    $alumnos->save();

    return redirect()->route("alumnos.index")->with("success", "Se agregó el estudiante con éxito");
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
