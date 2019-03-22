@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Completa todos los campos para guardar un nuevo curso.</div>

                <div class="card-body">
                  @if (session('alert'))
                      <div class="alert alert-success">
                          {{ session('alert') }}
                      </div>
                  @endif
                  <form class="" action="{{ Route('guardar_nuevo_curso') }}" method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del curso') }}</label>

                        <div class="col-md-6">
                            <input id="curso_nombre" type="text" class="form-control" name="curso_nombre" value="{{ old('curso_nombre') }}" maxlength="100" required autofocus>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('El curso se imparte en ingles?') }}</label>

                        <div class="col-md-6">
                          <div class="radio">
                            <label><input type="radio" name="curso_ingles" value="1" checked>Si</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="curso_ingles" value="0">No</label>
                          </div>
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
