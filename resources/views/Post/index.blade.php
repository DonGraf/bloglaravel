@extends('layout')
@section('content')
 <a href="{{route('post.create')}}">Crear Post</a>  
 <a href="{{route('category.index')}}">Modulo Categoria</a>    
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
            <td>{{$p->category->title}}</td>                
            <td>{{$p->posted}}</td>
            <td>
                <a href="{{route('post.show',$p)}}">ver
                </a>
                <a href="{{route('post.edit',$p)}}">editar
                </a>  
                <form action="{{route('post.destroy',$p)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">eliminar</button></form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$posts->links()}}
@endsection

