

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src=""></script>
        
</head>
<body>
<header>
<nav>
<ul >
<li ><a href="index.php">Accueil</a></li>
<li><a href="index.php">Inscription</a></li>
<li><a href="index.php">Connexion</a></li>
<li><a href="index.php">Rechercher</a></li>
</ul>
</nav >
</header>
<div class="row">
<form class="col s12">
  

<p>Sexe : </p>
<p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Homme</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Femme</span>
      </label>
    </p>
  


    
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nom</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input id="icon_telephone" type="text" class="validate">
          <label for="icon_telephone">Prenom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mail_outline</i>
          <input id="icon_prefix2" type="email" class="validate">
          <label for="icon_prefix2">Email</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">location_on</i>
          <input id="icon_location" type="text" class="validate">
          <label for="icon_location">Adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_pass" type="password" class="validate">
          <label for="icon_pass">Mot de passe</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">vpn_key</i>
          <input id="icon_pass2" type="password" class="validate">
          <label for="icon_pass2">Confirmer mot de passe</label>
        </div>
      


  
<p>Vos passions :</p>

  <p>
      <label>
        <input type="checkbox" />
        <span>Informatique</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" />
        <span>Voyages</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" />
        <span>Sport</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" />
        <span>Lecture</span>
      </label>
    </p>

    <button value="Valider"  class="btn waves-effect waves-light" type="submit" name="action">Envoyer <i class="material-icons right">send</i></button>
</form>
</div>
</div>

<footer class="card-panel   blue-grey">

<ul>


<div class="row">
      <div class="col s1"><li ><a href="index.php" class = "grey-text text-darken-4">Accueil</a></li></div>
      <div class="col s1"><li><a href="index.php" class = "grey-text text-darken-4">Inscription</a></li></div>
      <div class="col s1"><li><a href="index.php" class = "grey-text text-darken-4">Connexion</a></li></div>
      <div class="col s1"><li><a href="index.php" class = "grey-text text-darken-4">Rechercher</a></li></div>
    </div>
          
    </ul>


</footer>
</body>
</html>