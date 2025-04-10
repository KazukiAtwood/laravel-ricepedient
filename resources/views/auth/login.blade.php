<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <!-- Utilisation des liens CDN pour les fichiers CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Utilisation des liens CDN pour les icônes Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <script src="{{ asset('js/js.js') }}"></script>
</head>

<!-- Formulaire login -->
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row mb-3">
                <div class="text-center mb-4">
                    <h1 class="mb-4 text-center">Se connecter</h1>
                    <a href="{{ route('register') }}">Vous n'avez pas de compte, inscrivez-vous</a>
                </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email*</label>
                </div>
                <div class="form-floating mb-3 position-relative">
                    <input type="password" class="form-control form-control-lg" id="floatingPassword" placeholder="Mot de passe" name="password">
                    <label for="floatingPassword">Mot de passe*</label>
                    <span class="password-toggle" onclick="togglePassword('floatingPassword', 'togglePasswordIcon')">
                        <i class="fas fa-eye-slash" id="togglePasswordIcon"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="rappel" name="remember">
                        <label class="form-check-label" for="rappel">Se souvenir de moi</label>
                    </div>
                    <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                </div>
                <div class="d-grid gap-2 mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Se connecter</button>
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
