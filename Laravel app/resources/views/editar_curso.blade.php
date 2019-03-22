@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Completa todos los campos para guardar los cambios en el curso de {{$curso->curso_nombre}}.</div>

                <div class="card-body">
                  @if (session('alert'))
                      <div class="alert alert-success">
                          {{ session('alert') }}
                      </div>
                  @endif
                  <form class="" action="{{ Route('actualizar_curso') }}" method="post">
                    @csrf
                    <input type="text" name="id_curso" value="{{$curso->id_curso}}" hidden>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del curso') }}</label>

                        <div class="col-md-6">
                            <input id="curso_nombre" type="text" class="form-control" name="curso_nombre" value="{{ $curso->curso_nombre }}" placeholder="{{ $curso->curso_nombre }}" maxlength="100" required autofocus>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('El curso se imparte en ingles?') }}</label>

                        <div class="col-md-6">
                          <?php if ($curso->curso_ingles =="1"): ?>
                            <div class="radio">
                              <label><input type="radio" name="curso_ingles" value="1" checked>Si</label>
                            </div>
                            <div class="radio">
                              <label><input type="radio" name="curso_ingles" value="0">No</label>
                            </div>
                            <?php else: ?>
                              <div class="radio">
                                <label><input type="radio" name="curso_ingles" value="1" >Si</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="curso_ingles" value="0" checked>No</label>
                              </div>
                          <?php endif; ?>
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
