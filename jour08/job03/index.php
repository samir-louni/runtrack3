

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
<form action="" method="post">
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
  
<label for="nom">Nom</label>
<input type="text" id="nom" name="nom" ><br>
<label for="prenom">Prenom</label>
<input type="text" id="prenom" name="prenom" ><br>
<label for="adresse">Adresse</label>
<input type="text" id="adresse" name="adresse" ><br>
<label for="mail">E-mail</label>
<input type="email" id="mail" name="mail" ><br>
<label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password"><br>
    <label for="password2">Confirmer mot de passe:</label>
    <input type="password" id="password2" name="password2"><br>
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

    <input type="button" value="Valider">
</form>
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