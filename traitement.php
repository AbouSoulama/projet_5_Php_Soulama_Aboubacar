<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_touristique', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$Nom= $_POST["nom"];
$Prenom= $_POST["prenom"];
$Email= $_POST["email"];
$Mot_de_passe= $_POST["mot_de_passe"];
$Nom_utilisateur= $_POST["nom_utilisateur"];
$Contact= $_POST["contact"];

$req= $bdd->prepare('INSERT INTO inscription(nom, prenom, email, mot_de_passe, nom_utilisateur, contact) VALUES(:nom, :prenom, :email, :mot_de_passe, :nom_utilisateur, :contact)' );
$req->execute([
 'nom'=> $Nom,
 'prenom'=> $Prenom,
 'email'=> $Email,
 'mot_de_passe'=> $Mot_de_passe,
 'nom_utilisateur'=> $Nom_utilisateur,
 'contact'=> $Contact,
]);
echo 'Les données sont sauvegardées dans la base de donnée !';
header('Location: connexion_page.php');
exit();
?>



<!-- echo "Nom: $Nom <br>";
echo "Prenom: $Prenom <br>";
echo "Email: $Email <br>";
echo "Mot_de_passe: $Mot_de_passe <br>";
echo "Nom_utilisateur: $Nom_utilisateur <br>";
echo "Contact: $Contact <br>"; -->
