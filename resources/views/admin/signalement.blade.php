<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des signalements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <script src="{{ asset('js/js.js') }}"></script>
</head>

@include("repeteur.header_signalement")

<body>
<div class="container mt-5">
    <h1 class="text-center mb-5">Liste des signalements</h1>

    <!-- Section de filtrage par couleur et par cause -->
    <div class="row mb-3">
        <div class="col-md-6">
            <h3>Filtrer par couleur</h3>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input couleur-checkbox" type="checkbox" id="rougeCheckbox" value="rouge">
                    <label class="form-check-label" for="rougeCheckbox">Rouge</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input couleur-checkbox" type="checkbox" id="jauneCheckbox" value="jaune">
                    <label class="form-check-label" for="jauneCheckbox">Jaune</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input couleur-checkbox" type="checkbox" id="vertCheckbox" value="vert">
                    <label class="form-check-label" for="vertCheckbox">Vert</label>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h3>Filtrer par cause</h3>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input cause-checkbox" type="checkbox" id="harcèlementCheckbox" value="Harcèlement">
                    <label class="form-check-label" for="harcèlementCheckbox">Harcèlement</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input cause-checkbox" type="checkbox" id="inappropriéCheckbox" value="Inapproprié">
                    <label class="form-check-label" for="inappropriéCheckbox">Inapproprié</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input cause-checkbox" type="checkbox" id="sexuelCheckbox" value="Sexuel">
                    <label class="form-check-label" for="sexuelCheckbox">Sexuel</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des signalements sous forme de cards -->
    <div class="row row-cols-1 row-cols-md-2 g-4" id="cardsContainer">
        @foreach($signalements as $signalement)
            <div class="col">
                <div class="card couleur-{{ $signalement->couleur }} cause-{{ $signalement->cause }}">
                    <div class="card-body">
                        <h5 class="card-title">ID du signalement : {{ $signalement->id }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Nom d'utilisateur : {{ $signalement->user_name }}</h6>
                        <p class="card-text" data-info="commentaire">Commentaire : {{ $signalement->commentaire_text }}</p>
                        <p class="card-text" data-info="cause">Cause : {{ $signalement->cause }}</p>
                        <p class="card-text" data-info="couleur">Couleur : {{ $signalement->couleur }}</p>
                        <form action="{{ route('admin.signalements.updateColor', $signalement->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="couleur" value="rouge">
                            <button type="submit" class="btn btn-danger">Rouge</button>
                        </form>
                        <form action="{{ route('admin.signalements.updateColor', $signalement->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="couleur" value="jaune">
                            <button type="submit" class="btn btn-warning">Jaune</button>
                        </form>
                        <form action="{{ route('admin.signalements.updateColor', $signalement->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="couleur" value="vert">
                            <button type="submit" class="btn btn-success">Vert</button>
                        </form>
                        <form action="{{ route('admin.signalements.destroy', $signalement->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
