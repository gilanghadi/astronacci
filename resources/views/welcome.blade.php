@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <iframe width="560" height="315" src="{{ $video->youtube_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="my-5">
            <h3 class="fw-bold">Article</h3>
            <div class="row">
                <div class="col-md-4">
                    @guest
                        <x-article :id="$article->id" :desc="$article->desc" :image="$article->image" :title="$article->title" />
                        <p class="mt-3 text-danger fs-5">Daftar membership untuk melihat lebih banyak article.</p>
                    @endguest
                </div>
            </div>
        </div>
        <div class="my-5">
            <h3 class="fw-bold">Video</h3>
            @guest
                <p class="text-danger fs-5">Daftar membership untuk melihat lebih banyak video.</p>
            @endguest
        </div>
    </div>
@endsection
