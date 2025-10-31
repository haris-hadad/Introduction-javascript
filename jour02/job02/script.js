function showhide() {
    const existing = document.getElementById('citation');
    if (existing) {
        // supprimer l'article
        existing.remove();
        // charger le texte du bouton
        const btn = document.getElementById('button');
        if (btn) btn.textContent = 'cliquer ici';
        return;
    }

    // créer et insérer l'article
    const article = document.createElement('article');
    article.id = 'citation';
    article.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
    document.body.appendChild(article);
    const btn = document.getElementById('button');
    if (btn) btn.textContent = 'cliquer ici';
}

// Attacher l'événement au chargement
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('button');
    if (btn) btn.addEventListener('click', showhide);
});