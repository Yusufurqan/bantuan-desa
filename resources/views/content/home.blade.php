@extends('layouts.main')
@section('content')
<div class="jumbotron">
    <h1 class="display-4">Hallo, {{Auth::user()->name}}</h1>
    <p class="lead">Selamat Datang Di Aplikasi Bantuan Desa</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
</div>
@endsection