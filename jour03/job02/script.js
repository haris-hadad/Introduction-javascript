const images = [
  "assets/img/arc1.jpg",
  "assets/img/arc2.jpg",
  "assets/img/arc3.jpg",
  "assets/img/arc4.jpg",
  "assets/img/arc5.jpg",
  "assets/img/arc6.jpg"
];

const jeu = document.getElementById("jeu");
const btnMelanger = document.getElementById("melanger");
const message = document.getElementById("message");

// Fonction pour afficher les images dans le conteneur
function afficherImages(liste) {
  jeu.innerHTML = "";
  liste.forEach((src, index) => {
    const img = document.createElement("img");
    img.src = src;
    img.draggable = true;
    img.dataset.index = index;
    jeu.appendChild(img);
  });
}

// Mélanger le tableau
function melangerImages() {
  const melange = [...images].sort(() => Math.random() - 0.5);
  afficherImages(melange);
  message.textContent = "";
}

// Vérifier l'ordre des images
function verifierOrdre() {
  const ordreActuel = Array.from(jeu.querySelectorAll("img")).map(img => parseInt(img.dataset.index));
  if (ordreActuel.every((index, position) => index === position)) {
    message.textContent = "Vous avez gagné !";
    message.style.color = "green";
  } else {
    message.textContent = "Vous avez perdu !";
    message.style.color = "red";
  }
}

// --- Drag & Drop ---
let dragged;

jeu.addEventListener("dragstart", e => {
  if (e.target.tagName === "IMG") {
    dragged = e.target;
  }
});

jeu.addEventListener("dragover", e => e.preventDefault());

jeu.addEventListener("drop", e => {
  e.preventDefault();
  if (e.target.tagName === "IMG" && e.target !== dragged) {
    const imagesJeu = Array.from(jeu.children);
    const draggedIndex = imagesJeu.indexOf(dragged);
    const targetIndex = imagesJeu.indexOf(e.target);

    if (draggedIndex < targetIndex) {
      jeu.insertBefore(dragged, e.target.nextSibling);
    } else {
      jeu.insertBefore(dragged, e.target);
    }

    verifierOrdre();
  }
});

btnMelanger.addEventListener("click", melangerImages);

// Initialisation
afficherImages(images);