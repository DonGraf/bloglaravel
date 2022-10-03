@extends('layout')
@section('content')
 <a href="{{route('category.create')}}">Crear Categoria</a>   <a href="{{route('post.index')}}">Modulo Post</a>
<h3>Inicio </h3>
<hr>
<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Slug</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
        <tr>
            <td>{{$c->title}}</td>
            <td>{{$c->slug}}</td>                
            <td>
                <a href="{{route('category.show',$c)}}">ver
                </a>
                <a href="{{route('category.edit',$c)}}">editar
                </a>  
                <form action="{{route('category.destroy',$c)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">eliminar</button></form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$categories->links()}}
@endsection

