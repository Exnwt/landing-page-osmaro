@extends('layouts.app')

@section('content')
<section class="informasi_page layout_padding">
<div class="container py-5">
    <div class="heading_container text-center mb-4" >
        <h2>Blog</h2>
    </div>
    <div class="separator"></div>
    <div class="mb-4">
        <a href="{{ route('posts.index') }}" class="btn {{ request('category_id') ? 'btn-outline-info' : 'btn-info' }}" class="read-more">
            Semua Kategori
        </a>
        @foreach ($categories as $category)
            <a href="{{ route('posts.index', ['category_id' => $category->id]) }}"
               class="btn {{ request('category_id') == $category->id ? 'btn-info' : 'btn-outline-info' }} read-more" >
                {{ $category->name }}
            </a>
        @endforeach
    </div>
    <section class="informasi_section layout_padding">
        <div class="container">
            <div class="row">
                @foreach ($posts->take(6) as $item)
                <div class="col-md-4 col-12 mb-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="detail-box">
                            <h6>{{ $item->category->name }}</h6>
                            <a href="{{ route('posts.show', $item->slug) }}" class="custom-link">
                                <h5>{{ Str::limit($item->title, 30) }}</h5>
                            </a>
                            <p>{{ strip_tags(Str::limit($item->body, 100)) }}</p>
                            <a href="{{ route('posts.show', $item->slug) }}" class="read-more">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

    <div class="d-flex justify-content-center">
        {{ $posts->links('pagination::bootstrap-5') }}

    </div>

</div>
</section>
@endsection
