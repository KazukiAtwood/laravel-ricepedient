<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{ asset('js/js.js') }}"></script>
</head>
<body>
@include("repeteur.header_profil")
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Profil Utilisateur</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('utilisateurs.update', $utilisateur->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" value="{{ $utilisateur->nom }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" value="{{ $utilisateur->prenom }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="{{ $utilisateur->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $utilisateur->telephone }}">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" value="{{ $utilisateur->genre }}" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{ route('recettes.index') }}" class="btn btn-secondary">Retour</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
