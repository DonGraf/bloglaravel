@extends('layout')
@section('content')
<a href="{{route('post.index')}}">Volver</a>
<hr>
<table>
    <tr>
        <td><label for="">Titulo</label></td>
        <td>{{$post->title}}</td>
    </tr>
    <tr>
    <tr>
        <td><label for="">Slug</label></td>
        <td>{{$post->slug}}</td>
    </tr>
    <tr>
    <tr>
        <td><label for="">Contenido</label></td>
        <td>{{$post->content}}</td>
    </tr>
    <tr>
    <tr>
        <td><label for="">Descripcion</label></td>
        <td>{{$post->description}}</td>
    </tr>
    <tr>
    <tr>
        <td><label for="">Imagen</label></td>
        <td>{{$post->image}}</td>
    </tr>
    <tr>
        <td><label for="">Posteado</label></td>
        <td>{{$post->posted}}</td>
    </tr>
</table>
<hr>
@endsection