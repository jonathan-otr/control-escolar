@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Selecciona un alumno para editarlo o borrarlo de la base de datos.</div>

                <div class="card-body">
                  @if (session('alert'))
                      <div class="alert alert-success">
                          {{ session('alert') }}
                      </div>
                  @endif
                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-left">Nombre</label>
                      <label for="email" class="col-md-3 col-form-label text-md-left">Teléfono</label>
                      <label for="email" class="col-md-3 col-form-label text-md-left">Fecha de ingreso</label>
                      <label for="email" class="col-md-2 col-form-label text-md-left">Opciones</label>
                  </div>
                  @foreach( $alumnos as $a )
                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-left">{{ $a->nombre}}</label>
                      <label for="email" class="col-md-3 col-form-label text-md-left">{{ $a->telefono}}</label>
                      <label for="email" class="col-md-3 col-form-label text-md-left">{{ $a->fecha_de_ingreso}}</label>
                      <a href="{{Route('editar_alumno',Crypt::encrypt($a->matricula))}}" class="btn btn-primary col-md-1" style="max-height: 40px;"><i class="fas fa-edit"></i></a>
                      <a href="{{Route('eliminar_alumno',Crypt::encrypt($a->matricula))}}" onclick="return confirm('Seguro que deseas eliminarlo?');" class="btn btn-danger col-md-1" style="max-height: 40px;"><i class="fas fa-trash-alt"></i></a>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
