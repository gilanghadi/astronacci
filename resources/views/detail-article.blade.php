@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{ $article->image }}" alt="" class="w-100 image-fluid mb-4">
        <h2 class="fw-bold mb-3">{{ $article->title }}</h2>
        <p>{{ $article->desc }}</p>
        @guest
            <a href="{{ route('welcome') }}" class="btn btn-secondary">Kembali ke Home</a>
        @endguest
        @auth
            <a href="{{ route('home') }}" class="btn btn-secondary">Kembali ke Home</a>
        @endauth
    </div>
@endsection
