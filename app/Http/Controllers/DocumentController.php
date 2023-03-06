<?php

namespace App\Http\Controllers;
use App\Models\Doc_documento;
use App\Models\Tip_tipo_doc;
use App\Models\Pro_proceso;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Doc_documento::with('tipo_documento')->get();

        foreach ($documentos as $documento) {
            $idTipo = $documento->doc_id_tipo;
            $idProceso = $documento->doc_id_proceso;

            $documento->doc_id_tipo = Tip_tipo_doc::where('tip_id', $idTipo)->first();
            $documento->doc_id_proceso = Pro_proceso::where('pro_id', $idProceso)->first();
        }

        return view('documentos.index', compact('documentos'));

        // return view('documentos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_documentos = Tip_tipo_doc::all();
        $tipos_procesos = Pro_proceso::all();
        return view('documentos.create', compact('tipos_documentos', 'tipos_procesos'));
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

        Doc_documento::insert($datos);
       // return  response()->json($datosEmpleado);
        return redirect('doc')->with('mensaje','documento agregado con exito');
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


        $tipos_documentos = Tip_tipo_doc::all();
        $tipos_procesos = Pro_proceso::all();
        $documentos=Doc_documento::where('doc_id', $id)->first();

        return view('documentos.edit',compact('documentos','tipos_documentos', 'tipos_procesos'));
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
        Doc_documento::where('doc_id', $id)->update($datos);

        return redirect('doc')->with('mensaje','Proceso Editado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $documentos=Doc_documento::where('doc_id', $id)->delete();
        echo $documentos;
        return redirect('doc')->with('mensaje','Empleado Borrado');
    }
}