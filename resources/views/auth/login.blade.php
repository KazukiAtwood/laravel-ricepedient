<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <!-- Utilisation des liens CDN pour les fichiers CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row mb-3">
                <div class="text-center mb-4">
                    <h1 class="mb-4 text-center">Se connecter</h1>
                    <a href="{{ route('register') }}">Vous n'avez pas de compte, inscrivez-vous</a>
                </div>
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
            <form method="POST" action="{{ route('login') }}">
                @csrf <!-- Ajout du jeton CSRF -->
                <div class="form-floating mb-3">
                    <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control form-control-lg" id="floatingPassword" placeholder="Mot de passe" name="password">
                    <label for="floatingPassword">Mot de passe*</label>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="rappel" name="remember">
                        <label class="form-check-label" for="rappel">Se souvenir de moi</label>
                    </div>
                    <a href="#">Mot de passe oublié ?</a>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
