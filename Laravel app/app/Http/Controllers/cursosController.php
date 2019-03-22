<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\curso;
use \DB;
use Crypt;

class cursosController extends Controller
{
  public function guardar_nuevo_curso(Request $request){
    curso::create($request->all());
    return redirect()->back()->with('alert','Curso agregado correctamente.');
  }

  public function editar_cursos(){
    $cursos=DB::table('cursos')->OrderBy('curso_nombre','ASC')->get();
    return view('editar_cursos',compact('cursos'));
  }

  public function editar_curso(Request $request){
    $id_curso=$request['id_curso'];
    $id_curso2=Crypt::decrypt($id_curso);
    $curso=DB::table('cursos')->where('id_curso',$id_curso2)->first();
    return view('editar_curso',compact('curso'));
  }

  public function actualizar_curso(Request $request){
    $id_curso=$request['id_curso'];
    $alumno=DB::table('cursos')->where('id_curso',$id_curso)->update([
      'curso_nombre' => $request['curso_nombre'],
      'curso_ingles' => $request['curso_ingles'],
    ]);
    return redirect()->back()->with('alert','Curso actualizado correctamente.');
  }


  public function eliminar_curso(Request $request){
    $id_curso=$request['id_curso'];
    $id_curso2=Crypt::decrypt($id_curso);
    $curso=DB::table('cursos')->where('id_curso',$id_curso2)->delete();
    return redirect()->back()->with('alert','Curso eliminado correctamente.');
  }
}
