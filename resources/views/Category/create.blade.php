@extends('layout')
@section('content')
    
<h3>Crear Categoria</h3>
<a href="{{route('category.index')}}">Volver inicio</a>
<hr>
@include('fragment._errors-form')
<form action="{{route('category.store')}}" method="post">
    @include('fragment._categoryform')
</form>
@endsection

