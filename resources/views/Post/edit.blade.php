@extends('layout')
@section('content')
    
<h3>Editar Post</h3>
<a href="{{route('post.index')}}">Volver inicio</a>
<hr>
@include('fragment._errors-form')
<form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @include('fragment._postform', ["task"=>"edit"])
</form>
@endsection

