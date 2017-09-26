<?php include('header/header.php');?>

<!--- Ma partie ou je travail le site -->
<div align='center'>
  <h2>Inscription</h2>
  <br /><br />
<form action="../controleur/index.php" method="post">
  <p> Pseudo: </p><input type="text" name="pseudo" placeholder="Pseudo">
  <p> Email: </p><input type="text" name="email" value="" placeholder="email">
  <p> mot de passe: </p><input type="password" name="mdp" value="" placeholder="mot de passe">
  <p> confirmation mot de passe: </p><input type="password" name="mdp2" value="" placeholder="mot de passe">
<br / >  <input type="submit" name="forminscription" value="s'inscrire">
</form>















<?php include('footer/footer.php');?>
