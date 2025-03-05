@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
<div class="container text-center" style="padding: 100px 0;">
    <h1 class="display-4">404</h1>
    <p class="lead">Maaf! Halaman yang kamu cari tidak ditemukan.</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Beranda</a>
</div>
@endsection
