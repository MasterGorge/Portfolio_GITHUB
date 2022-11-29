<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=faq;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
     
     $Email =$_POST["email"];
     $password =$_POST["password"];

     $sql = "INSERT INTO `utilisateur`(`nom`, `Prenom`, `DateNaissande`, `email`, `password`) VALUES ('$Nom','$Prenom','$DateNaissance','$Email','$Password')";

     if ($pdo->exec($sql) === TRUE) {
       echo "New record created successfully";
     } else {
       echo "Error: " . $sql . "<br>" ;
     
     
    

         
?>
