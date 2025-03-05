@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Konten Artikel -->
        <div class="col-md-8">
            <div class="artikel-detail">
                <h4 class="category">{{ $post->category->name }}</h4>
                <h1>{{ $post->title }}</h1>
                <p class="date">{{ $post->created_at->format('d F Y') }}</p>
                <div class="img-box">
                    <img src="{{ Storage::url($post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid">
                </div>
                <div class="content mt-4">
                    {!! $post->body !!}
                </div>
            </div>
        </div>

        <!-- Rekomendasi Artikel -->
        @if(isset($relatedPosts) && $relatedPosts->count() > 0)
        <div class="col-md-4">
            <h5>Artikel Lainnya</h5>
            @foreach ($relatedPosts as $related)
                <div class="related-article mb-3">
                    <div class="img-box">
                        <img src="{{ Storage::url($related->thumbnail) }}" alt="{{ $related->title }}" class="img-fluid">
                    </div>
                    <div class="detail-box">
                        <h6>{{ $related->category->name }}</h6>
                        <a href="{{ route('posts.show', $related->slug) }}" class="custom-link">
                            <h5>{{ Str::limit($related->title, 40) }}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif


@endsection
