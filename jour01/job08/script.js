// Marker to confirm this file is loaded
console.log('job08/script.js', new Date().toISOString());

// Vérifie si un entier est premier
function estPremier(num) {
  if (!Number.isInteger(num) || num <= 1) return false;
  for (let i = 2; i <= Math.sqrt(num); i++) {
    if (num % i === 0) return false;
  }
  return true;
}

// Retourne la somme si a et b sont premiers, sinon false
function sommenombrespremiers(a, b) {
  if (!Number.isInteger(a) || !Number.isInteger(b)) return false;
  if (estPremier(a) && estPremier(b)) return a + b;

  return false;
  }


// Tests simples
console.log('TEST 3,5 =>', sommenombrespremiers(3,5));   // attendu 8
console.log('TEST 4,5 =>', sommenombrespremiers(4,5));   // attendu false
console.log('TEST 2,2 =>', sommenombrespremiers(2,2));   // attendu 4