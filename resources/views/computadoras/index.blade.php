@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('Mensaje'))

<div class="alert alert-sucess" role="alert">
{{
    Session::get('Mensaje')
}}
</div>


@endif

<a href="{{ url('computadoras/create')}}" class="btn btn-success">Agregar un Equipo</a>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Serie</th>
            <th>Acciones</th>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($computadoras as $computadora)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $computadora->nombre}}</td>
            <td>{{ $computadora->serie}}</td>
            <td>
            <a   class="btn btn-warning" href="{{url('/computadoras/'.$computadora->id.'/edit') }}">
            Editar
            </a>    
            | 

            <form method="post" action="{{url('/computadoras/' .$computadora->id)}}" style="display:inline">
            
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Deseas Borrar');">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$computadoras->links()}}
</div>
@endsection