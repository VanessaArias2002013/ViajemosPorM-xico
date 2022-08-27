<?php

namespace App\Http\Controllers;
use App\Models\formulario;

use Illuminate\Http\Request;

class formulariController extends Controller
{
    public $luturisticos, $nombre, $descripcion, $ubicación, $como_llegar, $recomendaciones, $horarios_de_visitas,
    $restricciones, $costo, $insertar_fotos;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
$formularios = formulario::all();
        return view('formulario',compact('formularios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formularios= new \App\Models\formulario();
        /*
      $formularios=request()->all();

       $formularios=request()->except('_token');

       if($request->hasFile('Insertar fotos')){
        $formularios['Insertar fotos']=$request->file('Insertar fotos')->store('uploads','public');

       }
       formulario::insert($formularios);
       return response()->json($formularios);
*/

//2.- Asociar cada atributo con los datos de el formulario

$formularios->nombre=$request->nombre;
$formularios->descripcion=$request->descripcion;
$formularios->ubicación=$request->ubicación;
$formularios->como_llegar=$request->como_llegar;
$formularios->recomendaciones=$request->recomendaciones;
$formularios->horarios_de_visitas=$request->horarios_de_visitas;
$formularios->restrincciones=$request->restrincciones;
$formularios->costo=$request->costo;
$formularios->insertar_fotos=$request->insertar_fotos;
//3.- Invocar al método guardar
$formularios->save();
//4.- Bonus
//Mostrar un menssaje de confirmación
return"datos registrada correctamente";
       

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
        //
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
        //
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
