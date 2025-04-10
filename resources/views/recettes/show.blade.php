<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recette->titre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <script src="{{ asset('js/js.js') }}"></script>
</head>
<body>

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success text-center mb-0" role="alert">
        {{ session('success') }}
    </div>
@endif

@include('repeteur.header_recette')

<div class="container mt-5">

    <h1>{{ $recette->titre }}</h1>
    <p><strong>Temps de préparation :</strong> {{ $recette->temps_prep }} minutes</p>
    <img src="{{ asset($recette->image) }}" class="main-image" alt="{{ e($recette->titre) }}">
    <p class="mt-3">{{ $recette->description }}</p>
    <div class="d-flex justify-content-between align-items-center mt-3">
        <form action="{{ route('recettes.bookmark.toggle', $recette->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-primary">
                @if(Auth::user() && Auth::user()->bookmarks()->where('recette_id', $recette->id)->exists())
                    Retirer des favoris
                @else
                    Ajouter aux favoris
                @endif
            </button>
        </form>

        <div>
            <a href="javascript:window.print()" class="btn btn-outline-primary">Imprimer</a>
            <a href="#contenu" class="btn btn-outline-primary">Commenter</a>
        </div>
    </div>
    <hr>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Ingrédients</h2>
        <div>
            <button id="decrement" class="btn btn-primary">-</button>
            <span id="person-count">1</span> personne(s)
            <button id="increment" class="btn btn-primary">+</button>
        </div>
    </div>
    <div class="row mt-4">
        @foreach($recette->ingredients as $index => $ingredient)
            <div class="col-md-6">
                <div class="ingredient">
                    <img src="{{ asset($ingredient->image) }}" alt="{{ e($ingredient->libelle) }}" width="50">
                    <p class="ms-2 mb-0">{{ $ingredient->libelle }} - {{ $ingredient->quantite }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <hr>

    <h2>Préparations <span class="badge bg-secondary">Temps de cuisson : {{ $recette->temps_cuisson }} min</span></h2>
    <ol class="preparations-list">
        @foreach ($recette->preparations as $preparation)
            <li>
                <strong>Étape {{ $loop->iteration }}</strong><br>
                {{ $preparation->preparation }}
            </li>
        @endforeach
    </ol>
    <hr>
    <h2>Astuces</h2>
    <p>{{ $recette->astuces }}</p>

    <hr>
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
                                <input type="hidden" name="commentaire_id" value="{{ $commentaire->id }}">
                                <input type="hidden" name="user_name" value="Invité">
                                <input type="hidden" name="commentaire_text" value="{{ $commentaire->contenu }}">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cause" id="cause1{{ $commentaire->id }}" value="Harcèlement" required>
                                    <label class="form-check-label" for="cause1{{ $commentaire->id }}">Harcèlement</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cause" id="cause2{{ $commentaire->id }}" value="Inapproprié" required>
                                    <label class="form-check-label" for="cause2{{ $commentaire->id }}">Inapproprié</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cause" id="cause3{{ $commentaire->id }}" value="Sexuel" required>
                                    <label class="form-check-label" for="cause3{{ $commentaire->id }}">Sexuel</label>
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
        <hr>
    @endforeach

    <h2>Ajouter un commentaire</h2>
    <form action="{{ route('recettes.commentaires.store', $recette->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="contenu" class="form-label">Votre commentaire</label>
            <textarea name="contenu" id="contenu" class="form-control" rows="3" required maxlength="500"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>

    <a href="{{ route('recettes.index') }}" class="btn btn-primary mt-4 btn-retour">Retour aux recettes</a></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
