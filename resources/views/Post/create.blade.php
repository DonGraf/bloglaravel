@extends('layout')
@section('content')
    
<h3>Crear Post</h3>
<a href="{{route('post.index')}}">Volver inicio</a>
<hr>
@include('fragment._errors-form')
<form action="{{route('post.store')}}" method="post">
    @csrf
    <label for="">Título</label>
    <input type="text" name="title" value="{{old('title', '')}}"><br>
    <label for="">Slug</label>
    <input type="text" name="slug" value="{{old('slug', '')}}"><br>
    <label for="">Descripción</label>
    <textarea name="description" > {{old('description', '')}}</textarea><br>
    <label for="">Contenidos</label>
    <textarea name="content" > {{old('content', '')}}</textarea><br>
    <hr>
    <label for="">Categoria</label>
    <select name="category_id" >
        @foreach ($categories as $title=>$id)
            <option {{ old('category_id','')== $id ? 'selected' : '' }} value="{{$id}}">{{$title}}</option> 
        @endforeach
    </select><br>
    <label for="">Posteado</label>
    <select name="posted" >
        <option {{ old("posted","")== "y" ? "selected" : "" }} value="y">Si</option>
        <option {{ old("posted","")== "n" ? "selected" : "" }} value="n">No</option>
    </select><br>
    <hr>
    <button type="submit">Enviar Post</button>
</form>
@endsection

