@extends('layout')
@section('content')
    
<h3>Editar Categoria</h3>
<a href="{{route('category.index')}}">Volver inicio</a>
<hr>
@include('fragment._errors-form')
<form action="{{route('category.update',$category->id)}}" method="post">
    @method('PATCH')
    @include('fragment._categoryform')
</form>
@endsection

