@extends('layouts.template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latest Movie</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-lg-6">
        <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $movie->cover_image }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text">{{ Str::words($movie->synopsis, 20 ,'...') }}</p>
        <a href="/detail/{{ $movie->id}}/{{ $movie->slug}}" class="btn text-white bg-success">See More</a>
      </div>
    </div>
  </div>
</div>
        </div>
        @endforeach
        {{ $movies->links() }}
    </div>
</body>
</html>

@endsection

