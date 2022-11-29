<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=faq;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
     $Name=$_POST["nom"];
     $Email =$_POST["email"];
     $Password=$_POST["password"];
     $Username=$_POST["nom-utilisateur"];
     $DateNaissance=$_POST["date"];
     
     
     $sql = "INSERT INTO `users`(`user_name`, `Email`, `DateNaissance`, `password`, `name`) VALUES ('$Username','$Email','$DateNaissance','$Password','$Name)";

if ($pdo->exec($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" ;
}



      
         
         
?>
