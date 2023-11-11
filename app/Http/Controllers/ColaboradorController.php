<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;
use App\Models\Departamento;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colaboradores = Colaborador::all();

        return view('colaboradores.index',compact('colaboradores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('colaboradores.create',[
            'departamentos' => $departamentos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'rfc' => 'required',
            'departamento_id' => 'required',

        ]);

        $colaborador = new Colaborador();

        $colaborador->nombre = $request->get('nombre');
        $colaborador->primer_apellido = $request->get('primer_apellido');
        $colaborador->segundo_apellido = $request->get('segundo_apellido');
        $colaborador->rfc = $request->get('rfc');
        $colaborador->departamento_id = $request->get('departamento_id');
        $colaborador->save();

        return redirect()->route('colaborador.index')->with('message','Colaborador guardado correctamente');

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
        $colaborador = Colaborador::find($id);

        $colaborador->delete();

        return back();

    }
}
