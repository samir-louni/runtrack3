function jourtravaille(date) {

    const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    var jourferies = [
        '2020-01-01',
        '2020-04-13',
        '2020-05-01',
        '2020-05-08',
        '2020-05-21',
        '2020-06-01',
        '2020-07-14',
        '2020-08-15',
        '2020-11-01',
        '2020-11-11',
        '2020-12-25'
    ]

    var e = date;
    /// toISOString() renvoie une chaine de caractères correspondant à la date (le fragment de l'objet qui correspond à la date : jour, mois, année)
    e = e.toISOString();
    /// toLocaleDateString() renvoie une chaine de caractères correspondant à la date (le fragment de l'objet qui correspond à la date : jour, mois, année)
    var d = date.toLocaleDateString('fr-FR', options);
    /// split() permet de diviser une chaîne de caractères à partir d'un séparateur pour fournir un tableau de sous-chaînes.
    jour = d.split(" ")[0];

    if (jour == "samedi" | jour == "dimanche") {
        console.log("Non, " + d + " est un week-end")
    } else {
        console.log("Oui, " + d + " est un jour travaillé");
    }


    ///  includes() permet de déterminer si un tableau contient une valeur et renvoie true si c'est le cas, false sinon
    if (jourferies.includes(e)) {
        console.log(d + " est un jour ferié");
    } else {
        console.log(d + " n'est pas un jour ferié");
    }



}

entrer = prompt("Date : yyyy-mm-dd"); /// prompt() affiche une boîte de dialogue, éventuellement avec un message, qui invite l'utilisateur à saisir un texte.

var date = new Date(entrer);

jourtravaille(date);