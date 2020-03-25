<?php

namespace App\Http\Controllers;

use App\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    //

    public function index()
    {
        $datos['computadoras']=Computadora::paginate(1);
        return view('computadoras.index', $datos);

    }

    public function create()
    {
        return view('computadoras.create');

    }
    public function store(Request $request)
    {

       //$datosComputadora=request()-> all();
        $datosComputadora=request()-> except('_token');

     //   if($request-> hasFile('Foto')){
       //     $datosComputadora['Foto']=$request->file('Foto')->store('uploads','public');
        //}
        Computadora::insert($datosComputadora);
        //return response()->json($datosComputadora);
        return redirect('computadoras')->with('Mensaje','Computadora Registrada con éxito');
    }
public function show(Computadoras $computadoras)
{

}
public function edit($id)
{
    $computadora= Computadora::findOrFail($id);
    return view('computadoras.edit',compact('computadora'));
}
public function update (Request $request, $id)
{

   
    $datosComputadora=request()-> except(['_token','_method']);


    Computadora::where('id','=', $id)->update($datosComputadora);

    return redirect('computadoras')->with('Mensaje','Equipo de computo modificado con éxito');

}
public function destroy($id)
{
Computadora::destroy($id);

return redirect('computadoras')->with('Mensaje','Equipo de computo eliminado con éxito');
} 
}
