@if ($errors->any())
    @foreach ($errors->all() as $err)
        <div>
            {{$err}}
        </div>
    @endforeach
    <hr>
@endif
