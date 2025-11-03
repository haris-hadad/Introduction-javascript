/*Enregistre les frappes clavier :
si la saisie est faite dans le textarea, insère le caractère deux fois sinon
si la saisie est faite hors du textarea, ajoute le caractère une fois à la fin */
const textArea = document.getElementById('keylogger');


document.addEventListener('keydown', (event) => {
    let char = event.key;
    if(char.length==1){
         if (document.activeElement === textArea){
            textArea.value = textArea.value + char;
          }
  else{
    textArea.value +=  char;
  }
  
    } 
});