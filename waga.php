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


<?php
include("connexion.php");
?>

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
            <img src="drapeau-du-burkina-faso-pays-du-burkina-faso-en-afrique-de-l-ouest-modele-pour-la-conception-de-prix-un-document-officiel-avec-le-drapeau-du-burkina-faso-2cbf6t2.jpg" alt="" style="width: 60px;height: 60px;border-radius:50px;"><a style="color: green; margin-left:1%;font-size:1.2rem;text-decoration:none;" href="">Sites touristique BF</a>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:15%;margin-right:10%">
              
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
          style="background-image: url('expediav2-2590021-9df5d8-337869.jpg'); background-size: cover; background-repeat: no-repeat; height: 750px"
        >
          <div class="mask" style="background-color: rgba();">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Bienvenue à Ouagadougou</h1>
             <marquee class="nn"  behavior="" direction="">  <p class="mb-4">Un pays de plusieurs diversitées. Le Burkina Faso une destination a ne pas manquer. <br></p></marquee> 
                <marquee class="nn" behavior="" direction="right">Découvrer les sites touristiques incontournable de Ouagadougou, la capitale du Burkina Faso.
Eplorez son riche patrimoine culturel, assistez à ses festivals spectaculaires et goutez à la cuisine délicieuse et ses restaurants réputés.</marquee>
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