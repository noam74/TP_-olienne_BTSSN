<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<meta charset = "utf-8">
<title>Accueil</title>
<link rel ="stylesheet" href = "../css/monstyle.css">
</head>
<body>
	
	<?php $username = $_GET['username']; ?>
		
		<nav>
		<ul>

			<li class="encours accueil"><a href="accueil.php?username=<?php echo $username ?>">Accueil</a></li><!--

			--><li><a href="menu/cours.php?username=<?php echo $username ?>">Cours</a></li><!--
	
			--><li><a href="menu/president.php?username=<?php echo $username ?>">Président</a></li><!--
   
			--><li><a href="menu/tchat.php?username=<?php echo $username ?>">Tchat</a></li><!--
			
			--><li class="compte"><a href="menu/compte.php?username=<?php echo $username ?>">Bonjour <?php echo"$username" ?> !</a></li>
			
			</ul>
		</nav>
	
</body>
</html>
