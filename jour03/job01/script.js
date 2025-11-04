// Affiche l'article contenant la citation si ce n'est pas déjà présent
function showArticle() {
    if (document.getElementById('article')) return;
    const article = document.createElement('article');
    article.id = 'article';
    article.innerHTML= `Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit,<br>ensuite on prie.`;
    document.body.appendChild(article);
}

// supprime l'article s'il existe
function hideArticle() {
    const existing = document.getElementById('article');
    if (existing) existing.remove();
}

// Attacher l'article aux boutons
document.addEventListener('DOMContentLoaded', () => {
    const showBtn = document.getElementById('button');
    const hideBtn = document.getElementById('button2');
    if (showBtn) showBtn.addEventListener('click', showArticle);
    if (hideBtn) hideBtn.addEventListener('click', hideArticle);
});


