const plateau = document.getElementById('plateau');
const message = document.getElementById('message');
const btnRecommencer = document.getElementById('recommencer');

const TAILLE = 3;
let positions = [];

// Initialise et lance une partie
function initialiser() {
  // Les positions vont de 1 à 8 + null (vide)
  positions = [1, 2, 3, 4, 5, 6, 7, 8, null];

  console.log('Initial positions:', positions);

  // Mélange jusqu'à avoir une configuration solvable
  do {
    shuffle(positions);
  } while (!isSolvable(positions));

  message.textContent = '';
  message.style.color = 'black';
  btnRecommencer.style.display = 'none';
  render();
}

// Mélange Fisher-Yates
function shuffle(arr) {
  for (let i = arr.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [arr[i], arr[j]] = [arr[j], arr[i]];
  }
}

// Vérifie solvabilité (3x3 : inversions paire)
function isSolvable(arr) {
  const flat = arr.filter(x => x !== null);
  let inv = 0;
  for (let i = 0; i < flat.length; i++) {
    for (let j = i + 1; j < flat.length; j++) {
      if (flat[i] > flat[j]) inv++;
    }
  }
  return inv % 2 === 0;
}

// Vérifie la victoire
function isWin() {
  for (let i = 0; i < positions.length - 1; i++) {
    if (positions[i] !== i + 1) return false; // doit être 1,2,3,...8
  }
  return positions[positions.length - 1] === null;
}

// Affiche le plateau
function render() {
  plateau.innerHTML = '';

  positions.forEach((val, idx) => {
    const cell = document.createElement('div');
    cell.className = 'case';

    if (val === null) {
      cell.classList.add('vide');
    } else {
      cell.style.backgroundImage = `url("assets/img/${val}.jpg")`;
      cell.style.backgroundSize = 'cover';
      cell.style.backgroundPosition = 'center';
      cell.addEventListener('click', () => tryMove(idx));
    }

    plateau.appendChild(cell);
  });

  console.log(positions);

  if (isWin()) {
    message.textContent = 'Vous avez gagné !';
    message.style.color = 'green';
    btnRecommencer.style.display = 'inline-block';
    plateau.querySelectorAll('.case').forEach(c => c.style.pointerEvents = 'none');
  }
}

function tryMove(index) {
  const empty = positions.indexOf(null);
  if (isNeighbor(index, empty)) {
    [positions[index], positions[empty]] = [positions[empty], positions[index]];
    render();
  }
}

function isNeighbor(a, b) {
  const ra = Math.floor(a / TAILLE), ca = a % TAILLE;
  const rb = Math.floor(b / TAILLE), cb = b % TAILLE;
  return (Math.abs(ra - rb) === 1 && ca === cb) || (Math.abs(ca - cb) === 1 && ra === rb);
}

btnRecommencer.addEventListener('click', initialiser);

// Test de chargement des images
function testImages() {
  const puzzle = document.createElement('div');
  const title = document.createElement('div');
  title.textContent = 'Diagnostic images :';
  title.style.fontWeight = 'bold';
  puzzle.appendChild(title);

  for (let i = 1; i <= 8; i++) {
    const src = `assets/img/${i}.jpg`;
    const p = document.createElement('div');
    p.textContent = src + ' …';
    const img = new Image();
    img.onload = () => { p.textContent = src + ' → OK'; p.style.color = 'green'; };
    img.onerror = () => { p.textContent = src + ' → ERREUR'; p.style.color = 'red'; };
    img.src = src + '?_=' + Date.now();
  }

  const ref = document.getElementById('plateau');
  if (ref && ref.parentNode) ref.parentNode.insertBefore(puzzle, ref);
}

// Démarrage
window.addEventListener('load', () => {
  testImages();
  initialiser();
});