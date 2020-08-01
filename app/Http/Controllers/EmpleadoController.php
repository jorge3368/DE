<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Empresa;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::where('eliminado', 0)->get();
        $empleados = $empleados->each(function($empleado){
            $empleado = $empleado->empresa;
        });
        return response(json_encode(['data'=> $empleados]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::where('eliminado', 0)->pluck('nombre_empresa','id');
        return view('empleados.form', ['empresas' => $empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Empleado::create($request->all());
        return redirect('empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', ['empleado' => $empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $empresas = Empresa::where('eliminado',0)->pluck('nombre_empresa','id');              
        return view('empleados.edit', ['empresas' => $empresas, 'empleado' => $empleado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado->nombre_empleado = $request->nombre_empleado;
        $empleado->apellido_empleado = $request->apellido_empleado;
        $empleado->telefono_empleado = $request->telefono_empleado;
        $empleado->direccion_empleado = $request->direccion_empleado;
        $empleado->id_empresa = $request->id_empresa;
        $empleado->update();
        return response()->json(['data' => 'actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->eliminado = 1;
        $empleado->update();
        return response()->json(['data' => 'eliminado']);
    }
}
