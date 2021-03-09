function afficherjourssemaines()
 {
    var jourssemaines  = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

    for( i = 0 ; i <= 6 ; i ++ )
    {
        document.write(jourssemaines[i], "</br>");
        console.log(jourssemaines[i]);
        
    }
 }

 afficherjourssemaines();