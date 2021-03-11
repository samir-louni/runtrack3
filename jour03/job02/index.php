<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  
  <head>
    <title> Titre projet</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css">
    <script src="scripts/projet2014.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
      
  
  </head>
  
  <body>
  
<button id = "button">Mélanger</button>
    <div id="rangees" class = 'ranger'>
   
        <div class="title"><h2>Ranger </h2></div>        
    </div>
  
     <div id="texte">
  
     </div>
      
  
      

  
    <div class ="zoneEchantillon">
        <div class="title"><h2>Mélangée</h2></div>
          
        <div id="melangees">
    
        </div>
      
    </div>
    <div id = 'rep'>
</div>
  
    <script>
    
    $(document).ready(function() {

melange();

$('img').click(function() {
    $(this).appendTo("#rangees");
});

$('#button').click(function() {
    melange();
    $('img').click(function() {
        var result = $(this).appendTo("#rangees");
    });
});
});


function melange() {

$('img').remove();
var max = 6;
var current = 0;
var t1 = ["0", "1", "2", "3", "4", "5"];
var t2 = [];
var img = ["arc1.png", "arc2.png", "arc3.png", "arc4.png", "arc5.png", "arc6.png"];

for (var i = 0; i < img.length; i++) {
    var x = Math.floor(Math.random() * max);
    t2[current] = t1[x];
    current++;
    max = max - 1;
    t1[x] = t1[max];

    $('#melangees').append('<img src="' + img[t2[i]] + '">');
};
if (('#rangees') == "<img src = 'arc1.png'><img src = 'arc2.png'><img src = 'arc3.png'><img src = 'arc4.png'><img src = 'arc5.png'><img src = 'arc6.png'>"){
  $('#rep').append('<p>tu as réussi</p>');
}

}
    </script>
  
  </body>
</html>