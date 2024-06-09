<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de recherche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Résultats de recherche pour "{{ $q }}"</h1>
    <div class="row">
        @foreach($resultats as $resultat)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $resultat->image }}" class="card-img-top" alt="{{ $resultat->titre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $resultat->titre }}</h5>
                        <a href="{{ route('recettes.show', $resultat->id) }}" class="btn btn-primary">Voir la recette</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
