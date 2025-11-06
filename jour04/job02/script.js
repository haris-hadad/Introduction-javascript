const str = `{
  "name": "La Plateforme_",
  "address": "8 rue d'hozier",
  "city": "Marseille",
  "nb_staff": "11",
  "creation": "2019"
}`;

function jsonValueKey(Jsonstring, key) {
    try {
        const obj = JSON.parse(Jsonstring);
        return obj[key];
    } catch (error) {
        console.error("Invalid JSON string:", error);
        return undefined;
    }
}
// Affiche Marseille
console.log(jsonValueKey(str, 'city'));