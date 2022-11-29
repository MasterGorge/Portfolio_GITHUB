<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=faq;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
     $Nom=$_POST["nom"];
     $Email =$_POST["email"];
     $Message =$_POST["message"];
     $Sujet=$_POST["sujet"];
     $Prenom=$_POST["prenom"];
     
     
      
     
     switch ($Sujet) {
          case 'ajouter': $req=$pdo->exec("INSERT INTO `client`(`Prenom`, `Nom`, `email`, `Message`) VALUES ('$Nom','$Prenom','$Email', '$Message')");  
         
        break;
          case "modifier" :  $req="UPDATE client set ";
    if (!empty ($Nom))
    {$req=$req. "Nom= '".$Nom. "',";}
    if (!empty ($Email))
    {$req=$req. "email= '".$Email. "',";}
    if (!empty ($Message))
    {$req=$req. "Message= '".$Message. "',";}
    if (!empty ($Prenom))
    {$req=$req. "Prenom= '".$Prenom. "', ";}
    $req=substr($req, 0,-1)." WHERE email=".$Email;
    $req = $pdo->prepare($req);
            if ($req->execute()) {
                echo "<p>Modifié avec succès</p>";
            }
    
    
    break;
          
          
    case "supprimer" : $req=$pdo->prepare("DELETE FROM client WHERE email='.$Email'") ;
    if(!$req->execute()) {
        echo "la suppression est réussi";
      }
      else{
        echo "la suppression a échoué";
      } 
         break;

}
 
?>