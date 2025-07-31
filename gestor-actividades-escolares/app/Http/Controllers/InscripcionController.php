<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;
use App\Models\Alumno;
use App\Models\Actividad;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscripciones = Inscripcion::with(['alumno', 'actividad'])->get();
        return view('inscripciones.index', compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos = Alumno::all();
        $actividades = Actividad::all();

        return view('inscripciones.create', compact('alumnos', 'actividades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'alumno_id' => 'required|exists:alumnos,id',
        //     'actividad_id' => 'required|exists:actividades,id',
        // ]);

        Inscripcion::create($request->all());

        return redirect()->route('inscripciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }


}
