
@extends('layouts.app')
@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }} </br>
        @endforeach
    </div>
@endif
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


                    <form action="{{ route('cliente.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="nit" class="col-md-4 col-form-label text-md-right">{{ __('Nit') }}</label>

                            <div class="col-md-6">
                                <input id="Nit" type="text" class="form-control " name="Nit"autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="Nombres" type="text" class="form-control " name="Nombres" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="Apellidos" type="text" class="form-control " name="Apellidos" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Razonsocial" class="col-md-4 col-form-label text-md-right">{{ __('Razonsocial') }}</label>

                            <div class="col-md-6">
                                <input id="Razonsocial" type="text" class="form-control " name="Razonsocial" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tipodocumento" class="col-md-4 col-form-label text-md-right">{{ __('Tipodocumento') }}</label>

                            <div class="col-md-6">
                                <input id="Tipodocumento" type="text" class="form-control " name="Tipodocumento" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Numerodocumento" class="col-md-4 col-form-label text-md-right">{{ __('Numerodocumento') }}</label>

                            <div class="col-md-6">
                                <input id="Numerodocumento" type="text" class="form-control " name="Numerodocumento" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Correo" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="Correo" type="text" class="form-control " name="Correo" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="Celular" type="text" class="form-control " name="Celular" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('foto') }}</label>

                            {{-- <div class="col-md-6">
                                <input type="file" name="foto" id="foto" autofocus> 
                            </div> --}}
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Guardar datos
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
{{-- 
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="tema" class="col-md-4 col-form-label text-md-right">{{ __('titulo') }}</label>

                            <div class="col-md-6">
                                <input id="tema" type="text" class="form-control " name="title" value="{{ old('title') }}" autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Contenido') }}</label>

                            <div class="col-md-6">
                                <textarea name="content" id="body" cols="40" rows="5">{{ old('content')}}</textarea> 
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                        </div>
                    </form> --}}

