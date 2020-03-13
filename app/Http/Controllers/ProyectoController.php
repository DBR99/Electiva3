<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = App\Proyecto::orderby('nombre','asc')->get();
        return view('proyecto.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//validar que lleguen todos los campos          
       $request->validate([
            'nombre' => 'required',
            'duracion' => 'required' ]);

       App\Proyecto::create($request->all());

       return redirect()->route('proyecto.index')
                        ->with('exito','Se ha creado el proyecto correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = App\Proyecto::findorfail($id);

        return view('proyecto.view', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = App\Proyecto::findorfail($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
$request->validate([
    'nombre' => 'required',
    'duracion' => 'required'
]);

        $proyecto = App\Proyecto::findorfail($id);

        $proyecto->update($request->all());

        return redirect()->route('proyecto.index')
                        -> with('exito','Proyecto modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = App\Proyecto::findorfail($id);

        $proyecto->delete();

        return redirect()->route('proyecto.index')
                        -> with('exito','Proyecto eliminado correctamente!');
    }
}
