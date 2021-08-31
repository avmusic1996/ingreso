@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('post') }}</div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} </br>
                    @endforeach
                    
                    </div>
                    @endif
                    
                    <form action="{{ route('cliente.update', ['cliente' => $cliente ]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="nit" class="col-md-4 col-form-label text-md-right">{{ __('Nit') }}</label>

                            <div class="col-md-6">
                                <input id="Nit" type="text" class="form-control " name="Nit" value="{{  $cliente->Nit  }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="Nombres" type="text" class="form-control " name="Nombres" value="{{  $cliente->Nombres  }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="Apellidos" type="text" class="form-control " name="Apellidos" value="{{  $cliente->Apellidos  }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Razonsocial" class="col-md-4 col-form-label text-md-right">{{ __('Razonsocial') }}</label>

                            <div class="col-md-6">
                                <input id="Razonsocial" type="text" class="form-control " name="Razonsocial" value="{{  $cliente->Razonsocial  }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tipodocumento" class="col-md-4 col-form-label text-md-right">{{ __('Tipodocumento') }}</label>

                            <div class="col-md-6">
                                <input id="Tipodocumento" type="text" class="form-control " name="Tipodocumento" value="{{  $cliente->Tipodocumento  }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Numerodocumento" class="col-md-4 col-form-label text-md-right">{{ __('Numerodocumento') }}</label>

                            <div class="col-md-6">
                                <input id="Numerodocumento" type="text" class="form-control " name="Numerodocumento" value="{{  $cliente->Numerodocumento  }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Correo" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="Correo" type="text" class="form-control " name="Correo" value="{{  $cliente->Correo  }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="Celular" type="text" class="form-control " name="Celular" value="{{  $cliente->Celular  }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Foto" class="col-md-4 col-form-label text-md-right">{{ __('foto') }}</label>

                            <div class="col-md-6">
                                <input type="file" value='{{ $cliente->foto }}' name="foto" id="foto"> 
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-lg-4 col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                                <a class="btn btn-danger" href="{{ route('cliente.index') }}">Cancelar</a>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection



                        {{-- <input type="text" class="form-control " name="Razonsocial" id="Razonsocial">
                        <input type="text" class="form-control " name="Tipodocumento" id="Tipodocumento">
                        <input type="text" class="form-control " name="Numerodocumento" id="Numerodocumento">
                        <input type="text" class="form-control " name="Correo" id="Correo">
                        <input type="text" class="form-control " name="Celular" id="Celular">
                        <input type="file" class="form-control "name="foto" id="foto">
                        <input type="file"  name="foto" id="foto">
                        <input type="submit" value="Enviar"> --}}