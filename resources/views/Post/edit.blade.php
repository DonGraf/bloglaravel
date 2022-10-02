@extends('layout')
@section('content')
    
<h3>Editar Post</h3>
<a href="{{route('post.index')}}">Volver inicio</a>
<hr>
@include('fragment._errors-form')
<form action="{{route('post.update',$post->id)}}" method="post">
    @csrf
    @method('PATCH')
    <label for="">Título</label>
    <input type="text" name="title" value="{{$post->title}}"><br>
    <label for="">Slug</label>
    <input readonly atype="text" name="slug" value="{{$post->slug}}"><br>
    <label for="">Descripción</label>
    <textarea name="description" >{{$post->description}}</textarea><br>
    <label for="">Contenidos</label>
    <textarea name="content" >{{$post->content}}</textarea><br>
    <hr>
    <label for="">Categoria</label>
    <select name="category_id" >
        @foreach ($categories as $title=>$id)
            <option {{ $post->category_id == $id ? 'selected': ''}} value="{{$id}}">{{$title}}</option> 
        @endforeach
    </select><br>
    <label for="">Posteado</label>
    <select name="posted" >
        <option {{ $post->posted == "y" ? 'selected': ''}} value="y">Si</option>
        <option {{ $post->posted == "n" ? 'selected': ''}} value="n">No</option>
    </select><br>
    <hr>
    <button type="submit">Enviar Post</button>
</form>
@endsection

