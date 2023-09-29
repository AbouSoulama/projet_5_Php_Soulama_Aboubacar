

<?php
session_start();
try
{
$bdd = new PDO('mysql:host=localhost;dbname=site_touristique', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

?>

<?php include 'fonctions.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sites touristique BF</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
        <!-- Intro settings -->
        <style>
          /* Default height for small devices */
          #intro-example {
            height: 400px;
          }
      
          /* Height for devices larger than 992px */
          @media (min-width: 992px) {
            #intro-example {
              height: 600px;
            }
          }
        </style>
      
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
            <img src="drapeau-du-burkina-faso-pays-du-burkina-faso-en-afrique-de-l-ouest-modele-pour-la-conception-de-prix-un-document-officiel-avec-le-drapeau-du-burkina-faso-2cbf6t2.jpg" alt="" style="width: 60px;height: 60px;border-radius:50px;"><a style="color: green; margin-left:1%;font-size:1.2rem;text-decoration:none;" href="">Sites touristique BF</a>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:5%;margin-right:5%">
              
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="acceil.php" style="font-size:1.2rem">Acceil</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="" style="font-size:1.2rem">A propos</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="" style="font-size:1.2rem">Hebergement</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php" style="font-size:1.2rem">Contact</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="Site_touristique/index.php">Ziniaré</a>
                </li> -->
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
                </li> -->
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">Contact</a> -->
                </li>
              </ul>
              
              
              <form>
    
      <div class="mail">
      <?php
      if ($_SESSION['email']) {
        echo $_SESSION['email'];
      }?>
      
      </div>
      
      
       
      <div class="dec" style=>
      <?php
      if ($_SESSION['email']) {
      echo '<button style="border: 2px solid wheat; width: 150px;"><a  style="color:white;font-size:1rem;" href="index.php">Déconnexion</a></button>';
      } ?>
      </div>
      
      
        
      </form>
        
                 
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        <!-- Background image -->
        <div
          id="intro-example"
          class="p-5 text-center bg-image"
          style="background-image: url('Cascades_de_Banfora_Burkina_Faso.jpeg'); background-size: cover; background-repeat: no-repeat; height: 650px"
        >
          <div class="mask" style="background-color: rgba();">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Bienvenue à Banfora, la cité du paysant</h1>
             <marquee class="nn"  behavior="" direction="">  <p class="mb-4">Un pays de plusieurs diversitées. Le Burkina Faso une destination a ne pas manquer. <br></p></marquee> 
                <marquee class="nn" behavior="" direction="right">Explorez découvrer les sites touristiques incontournable de  Banfora, la  3ème capitale du Burkina Faso.
Eplorez son riche patrimoine culturel, assistez à ses festivals spectaculaires et goutez à la cuisine délicieuse et ses restaurants réputés.
Se divertir
Des lieux à voir, des rues à explorer et des expériences emblématiques.</marquee>
                <a
                  class="btn btn-outline-light btn-lg "
                  href=""
                  role="button"
                  rel="nofollow"
                  
                style="background: white; color: black; margin-top: 3%;margin-right:2%">Découvrer</a
                >
                <a
                  class="btn btn-outline-light btn-lg "
                  href=""
                  
                  role="button"
                  style="background: white; color: black; margin-top: 3%;">Nous visité</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>



<section class="sect_23">
<div><img src="téléchargement.png" alt=""></div>
<div><h1>Banfora <br>
Ville au Burkina Faso</h1>
  <p>Banfora est une ville du sud-ouest du Burkina Faso fondée en 1903. Elle est la capitale de la région des Cascades et de la Province de la Comoé et chef-lieu du département du même nom. Wikipédia
    Altitude : 303 m
    Population : 117 200 (2019)
    Météo : 24°C, vent N à 3 km/h, 96 % d'humidité weather.com
    Heure locale : jeudi 00:31
    Superficie : 93 400 ha = 934 km2
    Province : Comoé
    Coordonnées : 10° 36′ nord, 4° 45′ ouest
    Densité : 179 hab./km2
    Équipe : Union sportive de la Comoé.
    Banfora est une ville du sud-ouest du Burkina Faso fondée en 1903. Elle est la capitale de la région des Cascades et de la Province de la Comoé et chef-lieu du département du même nom. Wikipédia</p>
</div>
  
</section>

<section class="sect_24">
<h1>Principales attractions à Banfora</h1>
<h1>Cascades de Banfora</h1>
<div class="prin">
  
  <div class="d">
    <img src="karfiguela-falls.jpg" alt="">
  <h3>Cascade de Karfiguéla</h3>
  <p>Admirez les chutes d'eaux, baignez-vous dans les piscines naturelles et découvrez les légendes locales.</p>
  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa id, architecto soluta vel accusamus dicta necessitatibus aut commodi dolor! Explicabo, quis. Deleniti dolores ut unde quo. Quis, esse distinctio.</p> -->
  <button><a href="">Explorez <i class="fa fa-arrow-right" aria-hidden="true"></i></a></button>
  </div>
  <div class="d">
    <img src="cascades de l'EST (2).JPG" alt="">
  <h3>Cascade de Banfora</h3>
  <p>La plus célèbre cascade de la région. Déjà utilisée comme décors de cinéma pour plusieurs films célèbres.</p>
  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa id, architecto soluta vel accusamus dicta necessitatibus aut commodi dolor! Explicabo, quis. Deleniti dolores ut unde quo. Quis, esse distinctio.</p> -->
  <button><a href="">Explorez <i class="fa fa-arrow-right" aria-hidden="true"></i></a></button>
  </div>
  <div class="d">
    <img src="pics-de-sindou.jpg" alt="">
  <h3>Cascade de Sindou</h3>
  <p>Scène de plusieurs films also. Très fréquentée par les photographes, l'endroit offre un paysage impressionnant.</p>
  <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa id, architecto soluta vel accusamus dicta necessitatibus aut commodi dolor! Explicabo, quis. Deleniti dolores ut unde quo. Quis, esse distinctio.Quis, esse distinctio.</p> -->
  <button><a href="">Explorez <i class="fa fa-arrow-right" aria-hidden="true"></i></a></button>
  </div>
  <!-- <div class="d">
    <img src="téléchargement.jpeg" alt="">
  <h3>Kénédougou</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa id, architecto soluta vel accusamus dicta necessitatibus aut commodi dolor! Explicabo, quis. Deleniti dolores ut unde quo. Quis, esse distinctio.Quis, esse distinctio.</p>
  <button><a href="">Explorez <i class="fa fa-arrow-right" aria-hidden="true"></i></a></button>
  </div> -->
  
</div>



</section>

<section class="sect_25">
<h1>La Dômes de Fabédougou</h1>
<p>Un site géologique hors du commun, la Dôme de Fabédougou est composée de formations géologiques spectaculaires. Partez à la découverte des lieux à travers des randonnées accessibles à tous !</p>
<div class="diss">
<div>
<img src="téléchargement (1).jpg" alt="">
<h3>Repos sous les baobabs</h3>
<p>Après une journée bien remplie, relaxez-vous en regardant un coucher de soleil sous les arbres emblématiques de l'Afrique. Profitez de l'heure dorée pour des photos magnifiques.</p>
</div>
<div>
<img src="téléchargement.jpg" alt="">
<h3>Rivière aux crocodiles</h3>
<p>Visitez une petite rivière réputée, notamment pour ses crocodiles et ses paysages spectaculaires !</p>
</div>
<div class="reg">
<img src="vu-sur-les-champs-de.jpg" alt="">
<h3>La Dôme de Fabédougou</h3>
<p>Vue impressionnante de la roche rouge et du paysage verdoyant.</p>
</div>
</div>

</section>


<footer class="text-center text-white" style="background-color: #caced1;">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Images -->
    <section class="">
      <div class="row">
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="Burkina-Images.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="téléchargement (4).jpeg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="téléchargement (3).jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="Ouaga.webp"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="presentation-Burkina-2020.webp"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
            <img
              src="pics-de-sindou.jpg"
              class="w-100"
            />
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Images -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<section class="">
  <!-- Footer -->
  <footer class="bg-secondary text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
            aliquam voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
       
</body>
</html>