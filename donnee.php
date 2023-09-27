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
$Contact= $_POST["contact"];
$Origine= $_POST["ville_o"];
$Visite= $_POST["ville_v"];
$Date= $_POST["date"];

echo "Nom: $Nom <br>";
echo "Prenom: $Prenom <br>";
echo "Email: $Email <br>";
echo "Contact: $Contact <br>";
echo "Ville d'origine: $Origine <br>";
echo "Ville de destination: $Visite <br>";
echo "Date: $Date <br>";

$req = $bdd->prepare('INSERT INTO donnee( nom, prenom,
email, contact, ville_o, ville_v, dates) VALUES(:Nom, :Prenom, :Email, :Contact, :Origine, :Visite, :Dates)');
$req->execute([
 'Nom'=> $Nom,
 'Prenom'=> $Prenom,
 'Email'=>  $Email,
 'Contact'=>  $Contact,
 'Origine'=>  $Origine,
 'Visite' =>  $Visite,
 'Dates' =>  $Date,
]);
echo 'Les données sont sauvegardées dans la base de donnée !';
?> 
 