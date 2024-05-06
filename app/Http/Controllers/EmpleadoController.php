<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Storage;


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
      return view('empleados.create',['modo' => 'Insertar']);  
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
        //return response()->json($datosempleado);
        return redirect('empleados')->with('mensaje','Registro ingresado con exito');
    }
   
    public function edit($id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        return view('empleados.update', ['modo' => 'Insertar','empleado' => compact('empleado')]);
    }

    public function update(Request $request, $id)
    {
        //
        $datos= request()->except(['_token','_method']);
        Empleado::where('id','=',$id)->update($datos); 

        $empleado = Empleado::findOrFail($id);
        return view('empleados.update', compact('empleado'));
    }

    public function destroy($id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        if(storage::delete('public/'.$empleado->Foto)){
            Empleado::destroy($id);
        }
        return redirect('empleados')->with('mensaje','Registro ingresado con exito');
    }
}
