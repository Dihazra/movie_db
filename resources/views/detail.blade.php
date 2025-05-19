@extends('layouts.template')

@section('content')
<div class="container my-4">
    <div class="row g-4 align-items-start">
        <div class="col-md-4">
            <img src="{{ $movie->cover_image }}" class="img-fluid rounded" alt="{{ $movie->title }}">
        </div>
        <div class="col-md-8">
            <h2 class="fw-bold">{{ $movie->title }} <span class="badge bg-secondary">{{ $movie->year }}</span></h2>
            <p class="text-muted mb-1">
                <strong>Actors:</strong> {{ $movie->actors }}
            </p>
            <p>
                {{ Str::words($movie->synopsis) }}
            </p>
            <a href="/" class="btn btn-outline-secondary mt-3">← Back to List</a>
        </div>
    </div>
</div>
@endsection
