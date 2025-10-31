// Crée un keylogger simple qui enregistre les touches appuyées
const keylogger = [];
document.addEventListener('keydown', (event) => {
    keylogger.push(event.key);
    console.log(`Touche appuyée: ${event.key}`);
});
console.log('Touches appuyées', keylogger);