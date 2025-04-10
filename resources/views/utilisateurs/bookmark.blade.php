<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarks de </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

@include("repeteur.header_profil")
<body>
<div class="container mt-5">
    <h1 class="text-center mb-5">Mes Recettes Bookmarkées</h1>

    @if ($bookmarkedRecettes->isEmpty())
        <p>Aucune recette bookmarkée.</p>
    @else
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($bookmarkedRecettes as $bookmark)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bookmark->recette->titre }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $bookmark->recette->categorie }}</h6>
                            <p class="card-text">{{ $bookmark->recette->description }}</p>
                            <a href="{{ route('recettes.show', $bookmark->recette->id) }}" class="btn btn-primary">Voir la recette</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
</body>
</html>
