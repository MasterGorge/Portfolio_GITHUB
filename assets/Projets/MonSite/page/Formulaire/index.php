<!DOCTYPE html>
<html>
<head>
	<title>Se connecter</title>
	<link rel="stylesheet" href="conex.css">
</head>
<body>
     <form action="forConex1.php" method="post">
     	<h2>Connection</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nom d'utilisateur</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">se connecter</button>
     </form>
</body>
</html>