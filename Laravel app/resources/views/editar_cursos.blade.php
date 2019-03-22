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
                  @if (session('error'))
                      <div class="alert alert-danger">
                          {{ session('alert') }}
                      </div>
                  @endif
                  <div class="form-group row">
                      <label for="email" class="col-md-6 col-form-label text-md-left">Nombre</label>
                      <label for="email" class="col-md-4 col-form-label text-md-left">Se imparte en ingles?</label>
                      <label for="email" class="col-md-2 col-form-label text-md-left">Opciones</label>
                  </div>
                  @foreach( $cursos as $c )
                  <div class="form-group row">
                      <label for="email" class="col-md-6 col-form-label text-md-left">{{ $c->curso_nombre}}</label>
                      <?php if ($c->curso_ingles == '1'): ?>
                        <label for="email" class="col-md-4 col-form-label text-md-left">Sí</label>
                        <?php else: ?>
                          <label for="email" class="col-md-4 col-form-label text-md-left">No</label>
                      <?php endif; ?>
                      <a href="{{Route('editar_curso',Crypt::encrypt($c->id_curso))}}" class="btn btn-primary col-md-1" style="max-height: 40px;"><i class="fas fa-edit"></i></a>
                      <a href="{{Route('eliminar_curso',Crypt::encrypt($c->id_curso))}}" onclick="return confirm('Seguro que deseas eliminarlo?');" class="btn btn-danger col-md-1" style="max-height: 40px;"><i class="fas fa-trash-alt"></i></a>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
