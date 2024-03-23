@extends('template')

@section('main')
    <h2>Selamat Datang {{Auth::user()->name}}</h2>
@endsection
