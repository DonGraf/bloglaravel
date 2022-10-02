@extends('layout')
@section('content')
 <a href="{{route('post.create')}}">Crear post</a>   
<h3>Inicio </h3>
<hr>
<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Posted</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $p)
        <tr>
            <td>{{$p->title}}</td>
            <td></td>                
            <td>{{$p->posted}}</td>
            <td> editar eliminar</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$posts->links()}}
@endsection

