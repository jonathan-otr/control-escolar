@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Completa todos los campos para actualizar los datos de {{$alumno->nombre}} con matricula {{$alumno->matricula}}.</div>

                <div class="card-body">
                  @if (session('alert'))
                      <div class="alert alert-success">
                          {{ session('alert') }}
                      </div>
                  @endif
                  <form class="" action="{{ Route('actualizar_alumno') }}" method="post">
                    @csrf
                    <input type="text" name="matricula" value="{{$alumno->matricula}}" hidden>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $alumno->nombre }}" placeholder="{{ $alumno->nombre }}" maxlength="100" required autofocus>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de ingreso') }}</label>

                        <div class="col-md-6">
                            <input id="fecha_de_ingreso" type="date" class="form-control" name="fecha_de_ingreso"  max="{{Date('Y-m-d')}}" value="{{ $alumno->fecha_de_ingreso }}" placeholder="{{ $alumno->fecha_de_ingreso }}" required>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                        <div class="col-md-6">
                            <input id="telefono" type="number" class="form-control" name="telefono" max="99999999999" min="0" value="{{ $alumno->telefono }}" placeholder="{{ $alumno->telefono }}" required>
                        </div>
                    </div>



                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Guardar') }}
                            </button>

                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
