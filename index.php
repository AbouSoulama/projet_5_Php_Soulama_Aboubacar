<?php
include("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sites de Ziniaré</title>
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
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="index.php">Acceil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="waga.php">Ouagadougou</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sya.php">Bobo-Dioulasso</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="banf.php">Banfora</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
                </li> -->
                <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
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
          style="background-image: url('Flag_of_Burkina_Faso.svg.png'); background-size: cover; background-repeat: no-repeat; height: 750px"
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Bienvenue au Burkina Faso</h1>
                <h5 class="mb-4">Un pays de plusieurs diversitées. Le Burkina Faso une destination a ne pas manquer.</h5>
                <h5 class="mb-4">Découvrez les merveilles cachées du Burkina Faso. Du parc national des Deux Balés à la ville mystique de Tiébélé, il y a tant à voir et à explorer.</h5>
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href=""
                  role="button"
                  rel="nofollow"
                  target="_blank"
                >Découvrer</a
                >
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href=""
                  target="_blank"
                  role="button"
                >Nous rendre visite</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>
      <section class="sect_12">
      <h1>Ouagadougou</h1>
<p>La capitale du Burkina Faso est un mélange passionnant de culture et de modernité. Ne manquez pas la Grande Mosquée, la place de la Révolution et le Musée National.</p>
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col ">
    <div class="card h-100 ca">
      <img src="a567e471376d1bfe531de5a35f12d0c673d47b4b.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">Grande Mosquée</h5>
        <p class="card-text">
        Construite en 1974, cette mosquée est l'un des joyaux de la ville avec son architecture magnifique et son atmosphère paisible.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 ca">
      <img src="8401022748_50d556b495_b.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Place de la Révolution</h5>
        <p class="card-text">Cette place historique est un symbole important de l'indépendance du Burkina Faso. Les bâtiments coloniaux qui l'entourent sont tout aussi impressionnants.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 ca">
      <img src="presentation-Burkina-2020.webp" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Ouaga 2000</h5>
        <p class="card-text">Découvrez l'histoire riche du Burkina Faso à travers les expositions sur l'art et la culture de ce musée incontournable.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 ca">
      <img src="Ouaga.webp" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Rond poind de la Fespaco</h5>
        <p class="card-text">Découvrez l'histoire riche du Burkina Faso à travers les expositions sur l'art et la culture de ce musée incontournable.</p>
      </div>
    </div>
  </div>
</div>
</section>

<section class="sect_13">

<h1>Bobo-Dioulasso</h1>
<p>La deuxième plus grande ville du Burkina Faso est considérée comme le cœur culturel du pays. Visitez la mosquée de Dioulassoba, la gare de Bobo et le marché de Touba.</p>
<div class="rowsss">
 <div class="bobo">
 <img src="10212.jpg" alt="">
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
<div>


</div>
</div>
<!-- <button> S'y rendre <i class="fa-solid fa-arrow-right"></button> -->
</section>

<section class="sect_14">
<h1>Banfora</h1>
<h5>Située dans la région des Cascades, Banfora est une ville tranquille entourée de collines verdoyantes, de cascades et de grottes magnifiques.</h5>

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
<div class="rowss">
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
</div>

</section>


<section class="sect_15">
<div>
<h1>Commencez Votre Aventure</h1>
<p>Prêt à découvrir les merveilles du Burkina Faso? Réservez votre voyage dès maintenant et découvrez pourquoi ce pays enchanteur est un joyau caché de l'Afrique de l'Ouest.</p>
</div>
</section>


<footer>
    
    <!-- <h1>Paramètres de confidentialité</h1><br> -->
    
    <div>
    
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
 
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="" style="background: rgb(25, 25, 25);"><br>
    <section class="d-flex justify-content-center justify-content-lg-between">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
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
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4"  style="background: rgb(46, 44, 44);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    
    
    </div>
    
    <div>
    
     
    </div>
    
    
    </footer>
    
    
</body>
</html>