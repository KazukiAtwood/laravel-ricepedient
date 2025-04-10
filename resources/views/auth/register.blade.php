<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <!-- Utilisation des liens CDN pour les fichiers CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Utilisation des liens CDN pour les icônes Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <script src="{{ asset('js/js.js') }}"></script>
</head>
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">

<!-- Formulaire inscription -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center mb-4">
                <h1 class="mb-4 text-center">S'inscrire</h1>
                <a href="{{ route('login') }}">J'ai déjà un compte, je me connecte</a>
            </div>
            <form method="POST" action="{{ route('register') }}" onsubmit="return validatePassword()">
                @csrf
                <div class="mb-3 d-flex justify-content-between">
                    <p>Genre*</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genre" id="homme" value="homme">
                        <label class="form-check-label" for="homme">Homme</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genre" id="femme" value="femme">
                        <label class="form-check-label" for="femme">Femme</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genre" id="autres" value="autres">
                        <label class="form-check-label" for="autres">Autres</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg" id="Nom" placeholder="Nom" name="nom" value="{{ old('nom') }}">
                    <label for="Nom">Nom*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg" id="Prenom" placeholder="Prénom" name="prenom" value="{{ old('prenom') }}">
                    <label for="Prenom">Prénom*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control form-control-lg" id="Email" placeholder="name@exemple.com" name="email" value="{{ old('email') }}">
                    <label for="Email">Email*</label>
                </div>
                <div class="form-floating mb-3 position-relative">
                    <input type="password" class="form-control form-control-lg" id="password" placeholder="******" name="password">
                    <label for="password">Mot de passe*</label>
                    <span class="password-toggle" onclick="togglePassword('password', 'togglePasswordIcon')">
                        <i class="fas fa-eye-slash" id="togglePasswordIcon"></i>
                    </span>
                </div>
                <div class="form-floating mb-3 position-relative">
                    <input type="password" class="form-control form-control-lg" id="password_confirmer" placeholder="******" name="password_confirmation">
                    <label for="password_confirmer">Confirmer mot de passe*</label>
                    <span class="password-toggle" onclick="togglePassword('password_confirmer', 'togglePasswordConfirmerIcon')">
                        <i class="fas fa-eye-slash" id="togglePasswordConfirmerIcon"></i>
                    </span>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control form-control-lg" id="telephone" placeholder="0613680635" name="telephone" value="{{ old('telephone') }}" maxlength="10" pattern="[0-9]{10}" title="Le numéro doit contenir exactement 10 chiffres">
                    <label for="telephone">Téléphone*</label>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="accepter" name="conditions">
                        <label class="form-check-label" for="accepter">Acceptez-vous les conditions d'utilisation de la plateforme ?</label>
                    </div>
                </div>
                <div class="d-grid gap-2 mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">S'inscrire</button>
                </div>
                <div class="d-grid gap-2">
                    <a href="{{ route('recettes.index') }}" class="btn btn-secondary btn-lg">Retour à l'accueil</a>
                </div>
            </form>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
