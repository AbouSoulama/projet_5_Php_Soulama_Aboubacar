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
            <img src="drapeau-du-burkina-faso-pays-du-burkina-faso-en-afrique-de-l-ouest-modele-pour-la-conception-de-prix-un-document-officiel-avec-le-drapeau-du-burkina-faso-2cbf6t2.jpg" alt="" style="width: 60px;height: 60px;border-radius:50px;"><a style="color: green; margin-left:2%" href="">Sites touristique BF</a>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:30%;">
              
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="index.php">Acceil</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="">A propos</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="">Hebergement</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contact</a>
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
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        <!-- Background image -->
        <div
          id="intro-example"
          class="p-5 text-center bg-image"
          style="background-image: url('slider1.jpg'); background-size: cover; background-repeat: no-repeat; height: 640px"
        >
          <div class="mask" style="background-color: rgba();">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Bienvenue au Burkina Faso</h1>
             <marquee class="nn"  behavior="" direction="">  <p class="mb-4">Un pays de plusieurs diversitées. Le Burkina Faso une destination a ne pas manquer. <br></p></marquee> 
                <marquee class="nn" behavior="" direction="right">Découvrez les merveilles cachées du Burkina Faso. Du parc national des Deux Balés à la ville mystique de Tiébélé, il y a tant à voir et à explorer.</marquee>
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href=""
                  role="button"
                  rel="nofollow"
                  target="_blank"
                style="background: white; color: black; margin-top: 5%;">Découvrer</a
                >
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href=""
                  target="_blank"
                  role="button"
                  style="background: white; color: black; margin-top: 5%;">Nous rendre visite</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
      <section class="sect_12">
      <h1><?php echo afficherNomVilleParID(8)?></h1>
<p><?php echo afficherDescriptionVilleParNom("OUAGADOUGOU");?></p>
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 ca card-img-top" style=" width: 600px; height:200px;">
    <?php echo afficherImageVilleParNom("OUAGADOUGOU");?>
      <!-- <img src="maxresdefault (1).jpg" class="" alt="Los Angeles Skyscrapers"/> -->
      <div class="card-body">
        <h5 class="card-title">Ouaga 2000</h5>
        <p class="card-text">Découvrez l'histoire riche du Burkina Faso à travers les expositions sur l'art et la culture de ce musée incontournable.
        Découvrez l'histoire riche du Burkina Faso à travers les expositions sur l'art et la culture de ce musée incontournable.</p>
        <!-- <button type="button" class="btn btn-primary btn-lg btn-floating">
  <i class="fas fa-gem"></i>
</button>
<button type="button" class="btn btn-outline-success btn-floating" data-mdb-ripple-color="dark">
  <i class="fas fa-star"></i>
</button>
<button type="button" class="btn btn-danger btn-floating">
  <i class="fas fa-magic"></i>
</button>
<button type="button" class="btn btn-dark btn-floating">
  <i class="fab fa-apple"></i>
</button> -->
<div><button class="button"> <a href="waga.php" style="color:white;text-decoration:none">Découvrir Ouagadougou</a></button></div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="car h-100 " style=" height:300px;">
      <!-- <img src="Ouaga.webp" class="card-img-top" alt="Los Angeles Skyscrapers"/> -->
      <div class="card-body">
      <img src=" Echangeur-Nord-de-Ouaga.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
     
        <h5 class="card-title">Echangeur</h5>
        <p class="card-text" style="padding-left: 0%"> À propos
Ouagadougou est la capitale et plus grande ville du Burkina Faso, sa population étant estimée à plus de 2,4 millions d'habitants en 2019. En 2022, sa population est estimée à plus de 2,8 millions d'habitants. C'est le centre culturel, économique et administratif du pays. Wikipédia
Météo : 27°C, vent S à 8 km/h, 100 % d'humidité weather.com
Superficie : 520 km²
Universités : Université De Ouagadougou, École nationale d'administration et de magistrature
Population : 2,453 millions (2019)
Quartiers : Pissy, Goughin, Tangen, Koulouba, Dassasgo, PLUS
Maire : Armand Béouindé
Coordonnées : 12° 21′ 58″ nord, 1° 31′ 05″ ouest      <br> Découvrez l'histoire riche du Burkina Faso à travers les expositions sur l'art et la culture de ce musée incontournable.</p>
        <!-- <button type="button" class="btn btn-primary btn-lg btn-floating">
  <i class="fas fa-gem"></i>
</button>
<button type="button" class="btn btn-outline-success btn-floating" data-mdb-ripple-color="dark">
  <i class="fas fa-star"></i>
</button>
<button type="button" class="btn btn-danger btn-floating">
  <i class="fas fa-magic"></i>
</button>
<button type="button" class="btn btn-dark btn-floating">
  <i class="fab fa-apple"></i>
</button> -->
<!-- <div><button class="button">Découvrir</button></div> -->

      </div>
    </div>
  </div>
  
</div>
</section>

<section class="sect_13">

<h1><?php echo afficherNomVilleParID(9)?></h1>
<p><?php echo afficherDescriptionVilleParNom("BOBO-DIOULASSO");?></p>
<div class="rowsss">
 <div class="bobo">
 <?php echo afficherImageVilleParNom("BOBO-DIOULASSO");?>
 <!-- <img src="10212.jpg" alt=""> -->
 <h1>Mosquée de Dioulassoba</h1>
 <p>Cette mosquée historique a été construite selon une architecture traditionnelle en 1880. Elle offre une vue panoramique sur la ville de Bobo-Dioulasso.</p>
 </div>

<div class="bobo">
<img src="le-burkina-faso-region-hauts-bassins-bobo-dioulasso-la-gare-ferroviaire-p2pf9m.jpg" alt="">
<h1>Gare de Bobo</h1>
<p>La gare de Bobo est un merveilleux exemple d'architecture coloniale française et est un point de départ pour de nombreuses destinations.</p>
</div>
<div class="bobo">
<img src="16283929-fruits-et-légumes-à-l-étal-de-marché.jpg" alt="">
<h1>Marché de Touba</h1>
<p>Découvrez le marché animé de Touba, où les étals regorgent de fruits frais, de viande et de tissus colorés.</p>
</div>
</div>
<!-- <button> S'y rendre <i class="fa-solid fa-arrow-right"></button> -->
<button><a href="sya.php">Allons à Sya</a></button>
</section>

<section class="sect_14">
<h1><?php echo afficherNomVilleParID(10)?></h1>
<h5><?php echo afficherDescriptionVilleParNom("BANFORA");?></h5>

<div class="rowss">

<div class="banfo">
<img src="Cascades-de-Banfora.jpg" alt="">
<h3>Cascades de Banfora</h3>
<p>Les cascades Karfiguela sont les plus populaires avec leur eau claire et rafraîchissante pour la baignade.</p>
</div>
<div class="banfo">
<img src="téléchargement (4).jpeg" alt="">
<h3>Grottes de Douna</h3>
<p>Descendez dans les grottes de Douna pour découvrir des formations rocheuses fascinantes, des chauves-souris et des passages souterrains</p>
</div>
</div>
<div><button class="button"> <a href="banf.php" style="color:white;text-decoration:none">Découvrir Banfora</a></button></div>
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



<section class="sect_15">
<div>
<h1>Commencez Votre Aventure</h1>
<p>Prêt à découvrir les merveilles du Burkina Faso? Réservez votre voyage dès maintenant et découvrez pourquoi ce pays enchanteur est un joyau caché de l'Afrique de l'Ouest.</p>
</div>
</section>


<footer style="background: green;">
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted" >
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</footer>
    
</body>
</html>