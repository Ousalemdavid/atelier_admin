<?php

function connect() {
  try
 {
   $bdd = new PDO('mysql:host=localhost;dbname=tpmembre;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
return $bdd;
}
