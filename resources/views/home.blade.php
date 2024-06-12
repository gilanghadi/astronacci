@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="my-5">
            <h3 class="fw-bold">Article</h3>
            <div class="row">
                @guest
                    <div class="col-md-4">
                        <x-article :id="$article->id" :desc="$article->desc" :image="$article->image" :title="$article->title" />
                        <p class="mt-3 text-danger fs-5">Daftar membership untuk melihat lebih banyak article.</p>
                    </div>
                @endguest

                @auth
                    @foreach ($articles as $article)
                        <div class="col-md-4">
                            <x-article :id="$article->id" :desc="$article->desc" :image="$article->image" :title="$article->title" />
                        </div>
                    @endforeach
                @endauth
            </div>
        </div>
        <div class="my-5">
            <h3 class="fw-bold">Video</h3>

            <div class="row">
                @guest
                    <div class="col-md-4">
                        <p class="text-danger fs-5">Daftar membership untuk melihat lebih banyak video.</p>
                    </div>
                @endguest

                @auth
                    @foreach ($videos as $video)
                        <div class="col-md-4">
                            <x-video :url="$video->youtube_url" />
                        </div>
                    @endforeach
                @endauth
            </div>
        </div>
    </div>
@endsection
