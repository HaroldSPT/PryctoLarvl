<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docen = docente::all();
        return view('docentes.index', compact('docen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        $docen = new docente();
        $docen->nombre = $request->input('nombre');
        $docen->apellido = $request->input('apellido');
        $docen->titulo = $request->input('titulo');
        $docen->curso = $request->input('curso');
        if ($request->hasFile('imagen')){
            $docen->imagen = $request->file('imagen')->store('public');
        }
        $docen->save();
        return 'Docente guardado!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docen = docente::find($id);
       return view('docentes.show', compact('docen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docen = docente::find($id);
        return view('docentes.edit', compact('docen'));
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
        $docen = docente::find($id);
        $docen->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $docen->imagen = $request->file('imagen')->store('public');
        }
        $docen->save();
        return 'Recurso actualizado';
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
