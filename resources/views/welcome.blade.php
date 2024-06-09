<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="https://drive.google.com/file/d/1YNU68FAug5dZrX3gRBoUemrIG5eB71YE/view?usp=sharing" alt="Logo" style="width: 50px;">
            </a>

            <!-- Barre de recherche -->
            <form class="d-flex mx-auto" action="{{ route('rechercher') }}" method="GET">
                <input class="form-control me-2" type="search" name="q" placeholder="Rechercher" aria-label="Rechercher">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>

            <!-- Icône du compte utilisateur -->
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4-2a4 4 0 0 0-4-4 4 4 0 0 0-4 4v1a4 4 0 0 0 4 4 4 4 0 0 0 4-4V6zM8 9a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                </svg>
            </a>
        </div>
    </nav>
</header>

<body>
<div class="container mt-5">
    <div class="row">
        @foreach($recettes as $recette)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $recette->image }}" class="card-img-top" alt="{{ $recette->titre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recette->titre }}</h5>
                        <a href="{{ route('recettes.show', $recette->id) }}" class="btn btn-primary">Voir la recette</a>
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
