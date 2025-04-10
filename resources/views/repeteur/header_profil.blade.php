<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('recettes.index') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 50px;">
            </a>

            <!-- Bouton toggler pour menu responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenu du menu -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    @guest <!-- Si l'utilisateur n'est pas connecté -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                    </li>
                    @else <!-- Si l'utilisateur est connecté -->
                    <!-- Menu pour l'utilisateur connecté non admin -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('utilisateurs.profil', auth()->user()->id) }}">Voir son profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('utilisateurs.bookmark') }}">Voir ses bookmarks</a>
                    </li>
                    <!-- Déconnexion pour tous les utilisateurs connectés -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Se déconnecter
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
