@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ url('/computadoras/' .$computadora->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH')}}


@include('computadoras.form',['Modo'=>'editar'])


</form>
</div>
@endsection