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
          style="background-image: url('slider1.jpg'); background-size: cover; background-repeat: no-repeat; height: 750px"
        >
          <div class="mask" style="background-color: rgba();">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Bienvenue au Burkina Faso</h1>
             <marquee class="nn"  behavior="" direction="">  <p class="mb-4">Un pays de plusieurs diversitées. Le Burkina Faso une destination a ne pas manquer. <br></p></marquee> 
                <marquee class="nn" behavior="" direction="right">Découvrez les merveilles cachées du Burkina Faso. Du parc national des Deux Balés à la ville mystique de Tiébélé, il y a tant à voir et à explorer.</marquee>
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
      
      <section class="sect_26">
      
      <div class="wi">
     <img src="maxresdefault (1).jpg" alt="">
      </div>
      <div class="wd">
      <h1><?php echo afficherNomVilleParID(9)?></h1>
      <p><?php echo afficherDescriptionVilleParNom("OUAGADOUGOU");?></p>
      <div class="wb"><button class="button"> <a href="waga.php" style="color:white;text-decoration:none">Découvrir Ouagadougou <i class="fa-solid fa-arrow-right"></i></a></button></div>
      </div>
      
      
      </section>
      
      

<section class="sect_13">

<h1><?php echo afficherNomVilleParID(9)?></h1>
<p><?php echo afficherDescriptionVilleParNom("BOBO-DIOULASSO");?></p>
<div class="rowsss">
 <div class="bobo">
 <div  class="o"><?php echo afficherImageVilleParNom("BOBO-DIOULASSO");?></div>
 <!-- <img src="10212.jpg" alt=""> -->
 <h1>Dioulassoba</h1>
 <p>Cette mosquée historique a été construite selon une architecture traditionnelle en 1880. Elle offre une vue panoramique sur la ville de Bobo-Dioulasso.</p>
 <div class="sia"><button><a href="sya.php">Allons à Sya</a> <i class="fa-solid fa-arrow-right"></i></button></div>
 </div>

<div class="bobo">
<div  class="o"><img src="le-burkina-faso-region-hauts-bassins-bobo-dioulasso-la-gare-ferroviaire-p2pf9m.jpg" alt=""></div>
<h1>Place Tiefo Amoro</h1>
<p>La gare de Bobo est un merveilleux exemple d'architecture coloniale française et est un point de départ pour de nombreuses destinations. <br> Bobo-Dioulasso.</p>
<div class="sia"><button><a href="sya.php">Allons à Sya <i class="fa-solid fa-arrow-right"></i></a></button></div>
</div>
<div class="bobo">
<div class="o"><img src="16283929-fruits-et-légumes-à-l-étal-de-marché.jpg" alt=""></div>
<h1>Le grand marché</h1>
<p>Découvrez le marché animé de Touba, où les étals regorgent de fruits frais, de viande et de tissus colorés. <br> Bobo-Dioulasso.</p>
<div class="sia"><button><a href="sya.php">Allons à Sya <i class="fa-solid fa-arrow-right"></i></a></button></div>
</div>
</div>
<!-- <button> S'y rendre <i class="fa-solid fa-arrow-right"></button> -->
</section>

<section class="sect_14">
<h1><?php echo afficherNomVilleParID(10)?></h1>
<h5><?php echo afficherDescriptionVilleParNom("BANFORA");?></h5>

<div class="rowss">

<div class="banfo">
<img src="Cascades-de-Banfora.jpg" alt="">
<h3>Cascades de Banfora</h3>
<p>Les cascades Karfiguela sont les plus populaires avec leur eau claire et rafraîchissante pour la baignade.</p>
<div><button class="button"> <a href="banf.php" style="color:white;text-decoration:none">Découvrir Banfora <i class="fa-solid fa-arrow-right"></i></a></button></div>
</div>
<div class="banfo">
<img src="téléchargement (4).jpeg" alt="">
<h3>Grottes de Douna</h3>
<p>Descendez dans les grottes de Douna pour découvrir des formations rocheuses fascinantes, des chauves-souris et des passages souterrains</p>
<div><button class="button"> <a href="banf.php" style="color:white;text-decoration:none">Découvrir Banfora <i class="fa-solid fa-arrow-right"></i></a></button></div>
</div>
</div>

<!-- <div class="rowss">
<div class="banfo">
<img src="1566845158-Ln3gA8ZnEa5iOUc.jpeg" alt="">
<h3>Lac Tengréla</h3>
<p>Passez une journée sur le lac Tengréla, en faisant du canoë-kayak ou de la voile, ou profitez simplement des vues magnifiques.</p>
</div>
<div class="banfo">
<img src="tourisme-a-la-rencontre-de-cinq-merveilles-du-burkina-faso.jpg" alt="">
<h3>La Source aux Crocodiles.</h3>
<p>La Source aux Crocodiles est une série de cascades où les visiteurs peuvent observer des crocodiles dans leur habitat naturel.</p>
</div>
</div> -->


</section>

<!-- 
<section class="sect_8">

<h1 style="color: rgb(41, 36, 34);"><
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 hov">
      <img src="images/img-20181026-123251-largejpg.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <div><h3>1</h3><h5 class="card-title"></h5>Le lieu historique</div>
        <p class="card-text">
          Le climat de Ziniaré est généralement chaud et sec. Prévoyez des vêtements légers et de la protection solaire.
        </p>
        <button></button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 hov">
      <img src="images/7706d9fc210b3c4a7c677352e8fccc7f.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <div><h3>2</h3><h5 class="card-title">Le village artisanal</h5></div>
        <p class="card-text">De nombreux hôtels et auberges accueillantes sont disponibles à Ziniaré pour tous les budgets.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 hov">
      <img src="images/images (1).jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
         <div><h3>3</h3><h5 class="card-title">Le parc animalier</h5></div>
        <p class="card-text">Le réseau de transport local offre des options de bus et de taxis pour se déplacer facilement dans la région.</p>
      </div>
    </div>
  </div>
</div>
<div><button class="button"> <a href=".php" style="color:white;text-decoration:none">Découvrir Banfora</a></button></div> -->
</section>



<section style="background: rgb(233, 233, 233);padding-top:2%; height: 500px;">
<div class="sect_15">
<div>
<h1>Commencez Votre Aventure</h1>
<p>Prêt à découvrir les merveilles du Burkina Faso? Réservez votre voyage dès maintenant et découvrez pourquoi ce pays enchanteur est un joyau caché de l'Afrique de l'Ouest.</p>
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