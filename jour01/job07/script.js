function jourtravaille(date) {
    date = new Date(date);

    const jour = date.getDate();
    const mois = date.getMonth() + 1;
    const annee = date.getFullYear();
    const jourSemaine = date.getDay();

    const joursFeries2020 = [
        "01-01", // Jour de l'an
        "13-04", // Lundi de Pâques
        "01-05", // Fête du travail
        "08-05", // Victoire 1945
        "21-05", // Ascension
        "01-06", // Lundi de Pentecôte
        "14-07", // Fête nationale
        "15-08", // Assomption
        "01-11", // Toussaint
        "11-11", // Armistice 1918
        "25-12"  // Noël
    ];

    const dateFormat = `${jour.toString().padStart(2, '0')}-${mois.toString().padStart(2, '0')}`;
    
    const nomsMois = ["janvier", "février", "mars", "avril", "mai", "juin",
                      "juillet", "août", "septembre", "octobre", "novembre", "décembre"];

    if (annee === 2020 && joursFeries2020.includes(dateFormat)) {
        console.log(`Le ${jour} ${nomsMois[mois-1]} ${annee} est un jour férié`);
    }

    else if (jourSemaine === 0 || jourSemaine === 6) {
        console.log(`Non, ${jour} ${nomsMois[mois-1]} ${annee} est un week-end`);
    }
    else {
        console.log(`Oui, ${jour} ${nomsMois[mois-1]} ${annee} est un jour travaillé`);
    }
}
jourtravaille('2020-01-01'); // Jour férié 
jourtravaille('2020-05-02'); // Weekend 
jourtravaille('2020-05-04'); // Jour travaillé 