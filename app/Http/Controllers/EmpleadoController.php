<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmpleadoController extends Controller
{
    public function index()
    {
        $listado['empleados'] = Empleado::paginate(5);
        return view('empleados.index',$listado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('empleados.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $datosempleado = request()->all();
        $datosempleado = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosempleado['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleado::insert($datosempleado);
        return response()->json($datosempleado);
    }
   
    public function edit($id)
    {
        
        $empleado = empleado::findOrFail($id);
        return view('empleados.update', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        $datos= request()->except(['_token','_method']);
        Empleado::where('id','=',$id)->update($datos); 

        $empleado = empleado::findOrFail($id);
        return view('empleados.update', compact('empleado'));
    }

    public function destroy(Empleado $empleado)
    {
        //
    }
}
