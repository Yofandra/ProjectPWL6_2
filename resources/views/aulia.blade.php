@extends('adminlte::page')

@section('content_header')
<h1>
    <center>Profile</center>
</h1>
@stop

@section('content')
<center>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/aul.jpeg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="nama">
                <center>{{$post->nama}}</center>
            </h5>
            <p class="card-text"></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$post->pendidikan}}</li>
            <li class="list-group-item">{{$post->asal}}</li>
            <li class="list-group-item">{{$post->funfact}}</li>
        </ul>
    </div>

</center>
@endsection

@section('footer')
<center>&copy; Kelompok 9</center>
@stop