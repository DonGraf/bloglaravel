@extends('layout')
@section('content')
<a href="{{route('category.index')}}">Volver</a>
<hr>
<table>
    <tr>
        <td><label for="">Titulo</label></td>
        <td>{{$category->title}}</td>
    </tr>
    <tr>
    <tr>
        <td><label for="">Slug</label></td>
        <td>{{$category->slug}}</td>
    </tr>
    <tr>
</table>
<hr>
@endsection