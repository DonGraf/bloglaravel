@csrf
<label for="">Título</label>
<input type="text" name="title" value="{{old('title', $post->title)}}"><br>
<label for="">Slug</label>
<input type="text" name="slug" value="{{old('slug', $post->slug)}}"><br>
<label for="">Descripción</label>
<textarea name="description" > {{old('description', $post->description)}}</textarea><br>
<label for="">Contenidos</label>
<textarea name="content" > {{old('content', $post->content)}}</textarea><br>
<hr>
<label for="">Categoria</label>
<select name="category_id" >
    @foreach ($categories as $title=>$id)
        <option {{ old('category_id',$post->category_id)== $id ? 'selected' : '' }} value="{{$id}}">{{$title}}</option> 
    @endforeach
</select><br>
<label for="">Posteado</label>
<select name="posted" >
    <option {{ old("posted",$post->posted)== "y" ? "selected" : "" }} value="y">Si</option>
    <option {{ old("posted",$post->posted)== "n" ? "selected" : "" }} value="n">No</option>
</select><br>
@if (isset($task)&& $task == "edit")
    <label for="">Imagen</label>
    <input type="file" name="image" src="" alt="Imagen">
@endif
<hr>
<button type="submit">Enviar Post</button>