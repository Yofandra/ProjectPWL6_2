@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>
    <center>Selamat Datang</center>
</h1>
@stop


@section('content')

@section('plugins.Toastr')

@section('footer')
<center>&copy; Kelompok 5</center>
@stop
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script>
    toastr["info"]("Selamat Datang")
</script>
@stop