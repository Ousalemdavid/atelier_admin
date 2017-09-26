<?php
 include('dbconnect/dbconnection.php');

function insertbdd( $pseudo , $password , $email) {
  $req = connect()->prepare('INSERT INTO User (pseudo , password , email , date_inscription)
  VALUES (:pseudo , :password , :email , NOW())');
  $req->execute(array(
    'pseudo' => $pseudo,
    'password' => $password,
    'email'=> $email
  ));

}
