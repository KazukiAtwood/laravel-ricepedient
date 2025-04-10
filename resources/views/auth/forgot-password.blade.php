<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mot de passe oublié</title>
    <!-- Utilisation des liens CDN pour les fichiers CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Utilisation des liens CDN pour les icônes Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
<!-- Formulaire mot de passe oublié -->
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4 text-center">Vous avez oublié votre mot de passe ?</h2>
                <p class="mb-5 text-center">Pour réinitialiser votre mot de passe, saisissez votre email</p>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email*</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="submit">Recevez votre mail</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Utilisation des liens CDN pour les fichiers JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
