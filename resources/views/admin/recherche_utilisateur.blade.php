<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de recherche - Utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <script src="{{ asset('js/js.js') }}"></script>
</head>

@include('repeteur.header_admin')

<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Résultats de recherche pour "{{ "" }}"</h1>
    @if($utilisateurs->isEmpty())
        <p class="text-center">Aucun utilisateur trouvé.</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($utilisateurs as $utilisateur)
                    <tr>
                        <td>{{ $utilisateur->nom }}</td>
                        <td>{{ $utilisateur->prenom }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>
                            <form action="{{ route('utilisateurs.destroy', $utilisateur->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modifierUtilisateurModal{{ $utilisateur->id }}">
                                Modifier
                            </button>
                            <!-- Modal pour la modification de l'utilisateur -->
                            <div class="modal fade" id="modifierUtilisateurModal{{ $utilisateur->id }}" tabindex="-1" aria-labelledby="modifierUtilisateurModal{{ $utilisateur->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modifierUtilisateurModal{{ $utilisateur->id }}Label">Modifier Utilisateur</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('utilisateurs.update', $utilisateur->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="nom" class="form-label">Nom</label>
                                                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $utilisateur->nom }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="prenom" class="form-label">Prénom</label>
                                                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $utilisateur->prenom }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{ $utilisateur->email }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telephone" class="form-label">Téléphone</label>
                                                    <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $utilisateur->telephone }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="genre" class="form-label">Genre</label>
                                                    <input type="text" class="form-control" id="genre" name="genre" value="{{ $utilisateur->genre }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

<!-- Scripts JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
