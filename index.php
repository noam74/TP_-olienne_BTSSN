<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

     <div class="form">
		 <U>Compte existant</U> : <br/><br/>
		<form method="POST" action="connexion/testconnexion.php" class="compte">
		 Pseudo : <input class="champ" type="text" name="username" placeholder="pseudo"><br/><br/>
		 Mot de passe : <input class="champ" type="password" name="password" placeholder="mot de passe"><br/><br/>
			<input class="bouton" type="submit" value="Valider" >
		</form>

		<form method="POST" action="connexion/nouveaucompte.php" class="nouveau">
		<U>Créer un nouveau compte</U> : <br/><br/>
			Entrez votre pseudo : <input class="champ" type="text" name="username" placeholder="votre pseudo"><br/><br/>
	        Entrez votre mot de passe : <input class="champ" type="password" name="password" placeholder="votre mot de passe"><br/><br/>
	    	Vérifiez votre mot de passe : <input class="champ" type="password" name="passwordverif" placeholder="votre mot de passe"><br/><br/>
			<input class="bouton" type="submit" value="créer compte">
		</form>
	 </div>
  
  </body>
</html>
