@extends('layouts.app')
@section('content')
@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif

<div class="container">
    <div class="row justify-center-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboar-cliente') }}</div>
                <div class="card-body">
                    <div class="text-center  p-6">
                        <h1>Clientes</h1>
                    </div>
                    <div class="text-right">
                    <a class="btn btn-success" href="{{ route('cliente.create') }}">Crear nuevo cliente</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th>id</th>
                                    {{-- <th>Foto</th> --}}
                                    <th>Nit</th>
                                    <th>Nombres</th>
                                    <th>Apellido</th>
                                    <th>Razon social</th>
                                    <th>Tipo de documento</th>
                                    <th>Numero de documento</th>
                                    <th>Correo</th>
                                    <th>Celular</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach ($cliente as $Cliente)
                                <tr>
                                    <td>{{ $Cliente->id }}</td>
                                    {{-- <td><img src="{{ asset('storage').'/'.$Cliente->foto }}" alt=""></td> --}}
                                    <td>{{ $Cliente->Nit }}</td>
                                    <td>{{ $Cliente->Nombres }}</td>
                                    <td>{{ $Cliente->Apellidos }}</td>
                                    <td>{{ $Cliente->Razonsocial }}</td>
                                    <td>{{ $Cliente->Tipodocumento }}</td>
                                    <td>{{ $Cliente->Numerodocumento }}</td>
                                    <td>{{ $Cliente->Correo }}</td>
                                    <td>{{ $Cliente->Celular }}</td>
                                    <td><a href="{{ route('cliente.edit', ['cliente' => $Cliente])}}" class="btn btn-warning btn-sm px-3">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('cliente.destroy', ['cliente' => $Cliente] ) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" onclick=" return confirm('En verdad deseas borrar?');" class="btn btn-danger btn-sm px-3" value="Borrar"></a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

{{--  --}}