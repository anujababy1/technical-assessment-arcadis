<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search people</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Search people</h1>

        <form action="{{ route('people.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" value="{{ $searchTerm }}" class="form-control" placeholder="Search people">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        
        @forelse ($people as $person)
            <div class="card mt-3">
                <div class="card-body">
                    <h6>{{ $person['name'] }}</h6>
                    <ul>
                        <li>Birth Year: {{ $person['birth_year'] }} </li>
                        <li>Gender: {{ $person['gender'] }} </li>
                        <li>Height: {{ $person['height'] }} cm </li>
                        <li>Mass: {{ $person['mass'] }} kg </li>
                        <li>Eye Color: {{ $person['eye_color'] }} </li>
                        <li>Hair Color: {{ $person['hair_color'] }} </li>
                        <li>Skin Color: {{ $person['skin_color'] }} </li>
                    </ul>
                </div>
            </div>
        @empty
            @if ($searchTerm)
                <h5>No results found.</h5>
            @else
                <h5>Enter a search term to find people.</h5>
            @endif
        @endforelse
    </div>

</body>
</html>
