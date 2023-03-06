<?php

namespace App\Http\Controllers;
use App\Models\Tip_tipo_doc;
use Illuminate\Http\Request;


    class DocController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $datos['documentos']=tip_tipo_doc::all();
            
    
            return view('documento.index', $datos);
    
            // return view('documento.index');
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('documento.create');
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
            Tip_tipo_doc::insert($datos);
           // return  response()->json($datosEmpleado);
            return redirect('documento')->with('mensaje','documento agregado con exito');
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
            $documento=Tip_tipo_doc::where('tip_id', $id)->first();
            return view('documento.edit',compact('documento'));
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
            Tip_tipo_doc::where('tip_id', $id)->update($datos);

            return redirect('documento')->with('mensaje','Documento Editado Exitosamente');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $documento=Tip_tipo_doc::where('tip_id', $id)->delete();
            return redirect('documento')->with('mensaje','Empleado Borrado');
        }
    }
    

