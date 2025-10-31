// appelle element button et compteur dans le html
const button = document.getElementById('button');
let count = 0;
// ajoute un evenement au click du button
  button.addEventListener('click', () => {        
    addone();
    });
// fonction qui ajoute 1 au compteur a chaque click
function addone () {
const compteur = document.getElementById('compteur');
count+=1;
compteur.textContent = count;
};