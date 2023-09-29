<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_touristique', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$Email= $_POST['email'];
$Mot_de_passe= $_POST['mot_de_passe'];
$req= $bdd->prepare("SELECT * FROM inscription WHERE email= :email AND mot_de_passe= :mot_de_passe");
$req->execute([
    "email"=> $Email,
     "mot_de_passe"=> $Mot_de_passe,
     ]);
     $user= $req-> fetch();
if ($user['email'] AND $user['mot_de_passe']){
    session_start();
    $_SESSION['email']= $Email;
    $_SESSION['mot_de_passe']= $Mot_de_passe;
    header('Location: accueil.php');
    
    
};
 

?>