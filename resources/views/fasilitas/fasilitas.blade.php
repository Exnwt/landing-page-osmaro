@extends('layouts.app')

@section('content')
<section class="fasilitas_page">
    <div class="container">
        <div class="heading_container">
            <h2>Fasilitas Medis</h2>
            <p>Daftar alat dan mesin medis yang tersedia:</p>
        </div>

        <div class="content_container">
            <div class="fasilitas_grid">
                @foreach($fasilitas as $item)
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}">
                        </div>
                        <div class="detail-box">
                            <h5>{{ $item->nama }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
