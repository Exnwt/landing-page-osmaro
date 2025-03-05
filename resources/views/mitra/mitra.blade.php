@extends('layouts.app')

@section('content')
<section class="all_mitra_section py-5">
    <div class="container">
        <div class="heading_container text-center mb-4" >
            <h2>Mitra Klinik</h2>
        </div>
        <div class="separator"></div>
        <div class="row">
            @foreach (\App\Models\Mitra::all() as $mitra)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="mitra-card text-center">
                        <img src="{{ asset('storage/' . $mitra->image) }}" alt="{{ $mitra->name }}" class="img-fluid rounded shadow-sm">
                        <p class="mt-2">{{ $mitra->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="read-more">Kembali ke Halaman Utama</a>
        </div>
    </div>
</section>
@endsection
