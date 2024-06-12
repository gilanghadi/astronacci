<div>
    <a href="{{ route('detailArticle', $id) }}" class="text-decoration-none m-1">
        <div class="card">
            <img src="{{ $image }}" alt="" class="card-img-top object-cover image-fluid">
            <div class="px-4 py-3">
                <h4 class="fw-bold fs-4">{{ $title }}</h4>
                <p>{{ Illuminate\Support\Str::limit($desc, 100) }}</p>
            </div>
        </div>
    </a>
</div>
