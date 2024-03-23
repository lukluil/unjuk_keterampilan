@extends('templatefront')
@section('main')
    <header class="py-3 bg-light border-bottom mb-2">
        <div class="container">
            <div class="text-center">
                <h1 class="fw-bolder">Welcome to Wes Makmur!</h1>
            </div>
        </div>
    </header>
    <div class="container">
        @foreach ($data as $item)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text fs-6">{{ $item->tanggalDibuat }}</p>
                    <p class="card-text">{{ substr($item->isi, 0, 50) }}</p>
                    <a href="{{ url('beranda/detail/'.$item->id) }}" class="btn btn-primary">Baca Lengkap</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
