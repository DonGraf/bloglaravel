@extends('layout')
@section('content')
    
<h3>Crear Post</h3>
<a href="{{route('post.index')}}">Volver inicio</a>
<hr>
@include('fragment._errors-form')
<form action="{{route('post.store')}}" method="post">
    @include('fragment._postform')
</form>
@endsection

