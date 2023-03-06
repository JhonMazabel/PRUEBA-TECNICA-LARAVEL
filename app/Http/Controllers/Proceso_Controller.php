<?php

namespace App\Http\Controllers;
use App\Models\Pro_proceso;
use Illuminate\Http\Request;


class Proceso_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['procesos']=Pro_proceso::all();
        

        return view('proceso.index', $datos);

        // return view('proceso.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proceso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $datos = request()->except('_token');
        Pro_proceso::insert($datos);
       // return  response()->json($datosEmpleado);
        return redirect('proceso')->with('mensaje','proceso agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proceso=Pro_proceso::where('pro_id', $id)->first();
        

        return view('proceso.edit',compact('proceso'));
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
        $datos = request()->except(['_token', '_method']);
        Pro_proceso::where('pro_id', $id)->update($datos);

        return redirect('proceso')->with('mensaje','Proceso Editado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $proceso=Pro_proceso::where('pro_id', $id)->delete();
        echo $proceso;
        return redirect('proceso')->with('mensaje','Empleado Borrado');
    }
}
