const konamiCode = [38,38,40,40,37,39,37,39,66,65];
let konamiPosition = 0;

window.addEventListener('keydown', function(e) {
    if (e.keyCode === konamiCode[konamiPosition]) {
        konamiPosition++;
        if (konamiPosition === konamiCode.length) {
            activateKonami();
            konamiPosition = 0;
        }
    } else {
        konamiPosition = 0;
    }
});

function activateKonami() {
    document.body.classList.add('konami');
}