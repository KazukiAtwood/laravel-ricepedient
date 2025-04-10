//Fichier login et register, fonction afficher mdp, validation des champs
function togglePassword() {
    const passwordInput = document.getElementById('floatingPassword');
    const togglePasswordIcon = document.getElementById('togglePasswordIcon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePasswordIcon.classList.remove('fa-eye-slash');
        togglePasswordIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        togglePasswordIcon.classList.remove('fa-eye');
        togglePasswordIcon.classList.add('fa-eye-slash');
    }
}
function togglePassword(inputId, iconId) {
    const passwordInput = document.getElementById(inputId);
    const togglePasswordIcon = document.getElementById(iconId);

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePasswordIcon.classList.remove('fa-eye-slash');
        togglePasswordIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        togglePasswordIcon.classList.remove('fa-eye');
        togglePasswordIcon.classList.add('fa-eye-slash');
    }
}

function validateForm() {
    var genreSelected = document.querySelector('input[name="genre"]:checked');
    var conditionsAccepted = document.getElementById('accepter').checked;
    var genreError = document.getElementById('genreError');
    var conditionsError = document.getElementById('conditionsError');

    genreError.style.display = genreSelected ? 'none' : 'block';
    conditionsError.style.display = conditionsAccepted ? 'none' : 'block';

    return genreSelected && conditionsAccepted;
}


// Fichier register fonction regex et numéro seulement sur champ num
function validatePassword() {
    const password = document.getElementById('password').value;
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,}$/;

    if (!regex.test(password)) {
        alert('Le mot de passe doit contenir au moins 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial et faire au moins 10 caractères.');
        return false;
    }
    return true;
}
document.addEventListener('DOMContentLoaded', function() {
    var telephoneInput = document.getElementById('telephone');

    telephoneInput.addEventListener('input', function() {
        // Supprimer tous les caractères qui ne sont pas des chiffres
        this.value = this.value.replace(/\D/g, '');

        // Assure que la longueur maximale est respectée
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    });
});

//Fichier recette, fonction like, compteur ingrédients
document.addEventListener('DOMContentLoaded', function() {
    const toggleLikeButton = document.getElementById('toggleLike');
    const heartIcon = document.getElementById('heartIcon');

    toggleLikeButton.addEventListener('click', function() {
        const recetteId = this.getAttribute('data-recette-id');

        fetch(`/recettes/${recetteId}/toggle-like`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data.message === 'Bookmark added.') {
                    heartIcon.classList.remove('bi-heart');
                    heartIcon.classList.add('bi-heart-fill');
                } else if (data.message === 'Bookmark removed.') {
                    heartIcon.classList.remove('bi-heart-fill');
                    heartIcon.classList.add('bi-heart');
                }
            })
            .catch(error => console.error('Error toggling like:', error));
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const incrementButton = document.getElementById('increment');
    const decrementButton = document.getElementById('decrement');
    const personCountElement = document.getElementById('person-count');
    const ingredientItems = document.querySelectorAll('.ingredient');
    let personCount = 1;

    const updateQuantities = () => {
        ingredientItems.forEach(item => {
            const quantityElement = item.querySelector('.ingredient-quantity');
            const baseQuantity = parseFloat(quantityElement.getAttribute('data-base-quantity'));
            const unit = quantityElement.getAttribute('data-unit');

            // Vérifier si la quantité est numérique pour multiplier
            if (!isNaN(baseQuantity)) {
                quantityElement.textContent = (baseQuantity * personCount).toFixed(2);
            }
        });
    };

    incrementButton.addEventListener('click', () => {
        personCount += 1;
        personCountElement.textContent = personCount;
        updateQuantities();
    });

    decrementButton.addEventListener('click', () => {
        if (personCount > 1) {
            personCount -= 1;
            personCountElement.textContent = personCount;
            updateQuantities();
        }
    });

    updateQuantities();
});

document.addEventListener('DOMContentLoaded', function() {
    const toggleLikeButton = document.getElementById('toggleLike');
    const heartIcon = document.getElementById('heartIcon');

    toggleLikeButton.addEventListener('click', function() {
        const recetteId = this.getAttribute('data-recette-id');

        fetch(`/recettes/${recetteId}/toggle-like`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data.message === 'Bookmark added.') {
                    heartIcon.classList.remove('bi-heart');
                    heartIcon.classList.add('bi-heart-fill');
                } else if (data.message === 'Bookmark removed.') {
                    heartIcon.classList.remove('bi-heart-fill');
                    heartIcon.classList.add('bi-heart');
                }
            })
            .catch(error => console.error('Error toggling like:', error));
    });
});

//Fichier signalement, gestion couleur filtrage couleur
document.addEventListener('DOMContentLoaded', function() {
    // Écouteur d'événement pour filtrer par couleur
    document.querySelectorAll('.couleur-checkbox').forEach(function(el) {
        el.addEventListener('change', function() {
            filterCards();
        });
    });

    // Écouteur d'événement pour filtrer par cause
    document.querySelectorAll('.cause-checkbox').forEach(function(el) {
        el.addEventListener('change', function() {
            filterCards();
        });
    });

    // Fonction pour filtrer les signalements
    function filterCards() {
        let couleurFilters = Array.from(document.querySelectorAll('.couleur-checkbox:checked')).map(el => el.value);
        let causeFilters = Array.from(document.querySelectorAll('.cause-checkbox:checked')).map(el => el.value);

        document.querySelectorAll('.card').forEach(function(card) {
            let couleurClasses = card.className.split(' ').filter(cls => cls.startsWith('couleur-')).map(cls => cls.split('-')[1]);
            let causeClasses = card.className.split(' ').filter(cls => cls.startsWith('cause-')).map(cls => cls.split('-')[1]);

            if ((couleurFilters.length === 0 || couleurFilters.some(filter => couleurClasses.includes(filter))) &&
                (causeFilters.length === 0 || causeFilters.some(filter => causeClasses.includes(filter)))) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
});
