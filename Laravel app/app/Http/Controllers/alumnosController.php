<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumno;
use \DB;
use Crypt;

class alumnosController extends Controller
{
  public function guardar_nuevo_alumno(Request $request){
    alumno::create($request->all());
    return redirect()->back()->with('alert','Alumno agregado correctamente.');
  }

  public function editar_alumnos(){
    $alumnos=DB::table('alumnos')->OrderBy('nombre','ASC')->get();
    return view('editar_alumnos',compact('alumnos'));
  }

  public function editar_alumno(Request $request){
    $matricula=$request['matricula'];
    $matricula2=Crypt::decrypt($matricula);
    $alumno=DB::table('alumnos')->where('matricula',$matricula2)->first();
    return view('editar_alumno',compact('alumno'));
  }

  public function actualizar_alumno(Request $request){
    $matricula=$request['matricula'];
    $alumno=DB::table('alumnos')->where('matricula',$matricula)->update([
      'nombre' => $request['nombre'],
      'fecha_de_ingreso' => $request['fecha_de_ingreso'],
      'telefono' => $request['telefono']
    ]);
    return redirect()->back()->with('alert','Alumno actualizado correctamente.');
  }

  public function eliminar_alumno(Request $request){
    $matricula=$request['matricula'];
    $matricula2=Crypt::decrypt($matricula);
    $alumno=DB::table('alumnos')->where('matricula',$matricula2)->delete();
    return redirect()->back()->with('alert','Alumno eliminado correctamente.');
  }
}
