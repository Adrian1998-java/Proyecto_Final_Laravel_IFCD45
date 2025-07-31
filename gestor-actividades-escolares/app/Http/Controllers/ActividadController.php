<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Http\Requests\ActividadRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actividades = Actividad::all();
        return view('actividades.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actividades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActividadRequest $request)
    {
        Actividad::create($request->all());
        return redirect()->route('actividades.index');
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
        $actividad = Actividad::find($id);
        return view('actividades.edit', compact('actividad'));
    }
    
    /**
     * Update the specified resource in storage.
    */
    public function update(ActividadRequest $request, String $id)
    {
        $actividad = Actividad::find($id);
        $actividad->update($request->all());
        return redirect()->route('actividades.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, String $id)
    {
        $actividad = Actividad::find($id);
        $actividad->delete();
        return redirect()->route('actividades.index');
    }
    
    
    /**
     * Método para generar un PDF.
     */

    public function generarActividadPDF()
    {
        $actividades = Actividad::all();

        $pdf = Pdf::loadView('pdf.actividad', compact('actividades'));
        return $pdf->download('actividades.pdf');
    }

}
