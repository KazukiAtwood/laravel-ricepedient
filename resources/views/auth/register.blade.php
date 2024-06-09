<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <!-- Utilisation des liens CDN pour les fichiers CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center mb-4">
                <h1 class="mb-4 text-center">S'inscrire</h1>
                <a href="{{ route('login') }}">J'ai déjà un compte, je me connecte</a>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                       role="button">
                        <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                    </a>
                </div>
                <div class="col">
                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                       role="button">
                        <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>
                </div>
            </div>
            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 text-muted">OU</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf <!-- Ajout du jeton CSRF -->
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
                    <input type="text" class="form-control form-control-lg" id="Nom" placeholder="NOYON" name="nom">
                    <label for="Nom">Nom*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg" id="Prenom" placeholder="Patrick" name="prenom">
                    <label for="Prenom">Prénom*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control form-control-lg" id="Email" placeholder="name@exemple.com" name="email">
                    <label for="Email">Email*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control form-control-lg" id="password" placeholder="******" name="password">
                    <label for="password">Mot de passe*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control form-control-lg" id="password_confirmer" placeholder="******" name="password_confirmation">
                    <label for="password_confirmer">Confirmer mot de passe*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control form-control-lg" id="telephone" placeholder="0613680635" name="telephone">
                    <label for="telephone">Téléphone*</label>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="accepter" checked name="conditions">
                        <label class="form-check-label" for="accepter">Acceptez-vous les conditions d'utilisation de la plateforme ?</label>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
