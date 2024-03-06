<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actors and their Movies</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Actors and their Movies</h1>
        <form method="GET" action="{{ route('actors.index') }}" class="form-inline">
            <input type="text" class="form-control mb-2 mr-sm-2" name="search" placeholder="Search..." value="{{ $searchTerm }}"/>
            <button type="submit" class="btn btn-primary mb-2">Search</button>
        </form>

        @forelse ($actors as $actor)
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $actor->name }}</h5>
                    <h6>Movies:</h6>
                    <ul>
                        @foreach ($actor->movies as $movie)
                            <li>{{ $movie->title }} ({{ $movie->release_date->format('Y') }})</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @empty
          <h5>No actors found.</h5>
        @endforelse
    </div>
</body>
</html>
