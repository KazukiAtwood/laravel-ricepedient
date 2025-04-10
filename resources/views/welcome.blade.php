<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
</head>

    <body>

    @include('repeteur.header_recette')
    <div class="container mt-5">
        <div class="row">
            @foreach($recettes as $recette)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $recette->image }}" class="card-img-top" alt="{{ $recette->titre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recette->titre }}</h5>
                            <a href="{{ route('recettes.show', $recette->id) }}" class="btn btn-primary">Voir la
                                recette</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </body>

    <footer>
        <p>&copy; 2024 VotreNom. Tous droits réservés.</p>
    </footer>
</html>
