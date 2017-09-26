<!-- forminscription , mdp , mdp2 , email , pseudo -->
<?php
require_once("../modele/data.php");
 include("../vue/indexVue.php");



if(!empty($_POST['forminscription']) ) {


  if (!empty($_POST['pseudo'])  AND !empty($_POST['email']) AND !empty($_POST['mdp'])
  AND !empty($_POST['email']) AND !empty($_POST['mdp2'])) {



    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['email']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    $pseudolenght = strlen($pseudo);
  $erreur = "";

    if ( $pseudolenght >= 30 ) {
      $erreur .= 'votre pseudo est trop long !';
    }
    elseif ( $pseudolenght <=3){
      $erreur .= 'votre pseudo est trop court !';
    }
    elseif ( preg_match('`^([a-zA-Z0-9-_]{2,36})$`' , $pseudolenght))  {
   $erreur .= 'votre pseudo comporte des caractères interdit !';
}
  if ($mdp != $mdp2) {
   $erreur .= 'mot de passe incorrecte !';
  }

  if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)) {

  } else {
     $erreur .= 'Email invalide';
  }

if (empty($erreur)) {

   insertbdd($pseudolenght , $mdp , $mail);
  }
 else {
  echo $erreur .='Les champs ne sont pas valide !';
 }

}
}

 ?>
