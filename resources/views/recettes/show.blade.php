<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recette->titre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajoutez un style personnalisé pour l'image principale de la recette */
        .main-image {
            width: 100%;
            height: auto;
        }
        .ingredient {
            display: flex;
            align-items: center;
        }
    </style>

</head>
<body>
<div class="container mt-5">
    <h1>{{ $recette->titre }}</h1>
    <p><strong>Temps de préparation :</strong> {{ $recette->temps_prep }} minutes</p>
    <img src="{{ $recette->image }}" class="main-image" alt="{{ $recette->titre }}">
    <p class="mt-3">{{ $recette->description }}</p>

    <h2>Ingrédients</h2>
    <div class="row mt-4">
        @foreach($recette->ingredients as $index => $ingredient)
            <div class="col-md-6">
                <div class="ingredient">
                    <img src="{{ $ingredient->image }}" alt="{{ $ingredient->libelle }}" width="50">
                    <p class="ms-2 mb-0">{{ $ingredient->libelle }} - {{ $ingredient->quantite }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <h2>Astuces</h2>
    <p>{{ $recette->astuces }}</p>

    <h2>Commentaires</h2>
    @foreach($recette->commentaires as $commentaire)
        <div class="mb-2">
            <strong>{{ $commentaire->nom_utilisateur }}</strong> ({{ $commentaire->created_at->format('d/m/Y H:i') }})
            <p>{{ $commentaire->contenu }}</p>

            <!-- Icône de signalement -->
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#signalementModal{{ $commentaire->id }}">
                <i class="fa fa-flag"></i> Signaler
            </button>

            <!-- Modal de signalement -->
            <div class="modal fade" id="signalementModal{{ $commentaire->id }}" tabindex="-1" aria-labelledby="signalementModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="signalementModalLabel">Signaler le commentaire</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>{{ $commentaire->contenu }}</p>
                            <form action="{{ route('signalements.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="comment_id" value="{{ $commentaire->id }}">
                                <input type="hidden" name="user_name" value="Invité">
                                <input type="hidden" name="comment_text" value="{{ $commentaire->contenu }}">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cause" id="cause1{{ $commentaire->id }}" value="Harcèlement" required>
                                    <label class="form-check-label" for="cause1{{ $commentaire->id }}">
                                        Harcèlement
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cause" id="cause2{{ $commentaire->id }}" value="Inapproprié" required>
                                    <label class="form-check-label" for="cause2{{ $commentaire->id }}">
                                        Inapproprié
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cause" id="cause3{{ $commentaire->id }}" value="Sexuel" required>
                                    <label class="form-check-label" for="cause3{{ $commentaire->id }}">
                                        Sexuel
                                    </label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-danger">Signaler</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <h2>Ajouter un commentaire</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('recettes.commentaires.store', $recette->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="contenu" class="form-label">Votre commentaire</label>
            <textarea name="contenu" id="contenu" class="form-control" rows="3" required maxlength="500"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>

    <a href="{{ route('recettes.index') }}" class="btn btn-primary mt-4">Retour aux recettes</a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
