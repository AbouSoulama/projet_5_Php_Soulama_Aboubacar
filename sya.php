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
          style="background-image: url('26967.jpg'); background-size: cover; background-repeat: no-repeat; height: 750px"
        >
          <div class="mask" style="background-color: rgba();">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Bienvenue à Bobo-Dioulasso</h1>
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

<section class="sect_16">
<div>
<h1>Attraction de la ville de Sya</h1>
<h5>Situé au sud-ouest du Burkina Faso et ancienne capitale coloniale de la Haute Volta, Bobo-Dioulasso est la capitale économique du Burkina Faso et deuxième grande ville en terme de population après Ouagadougou. Batisée ainsi par le colons, Bobo-Dioulasso signifie <la maison des Bobo-Dioula>
, c'est la capitale de la région des haut-Bassins. Il couvre une superficie de 136.78km carré, sa population est essentiellement composée de Dioulas, de Mossis, et de Bobos. Le climat est du type Sud soudanien et se caractérise par une longue saison sèche qui va de 
Octobre à Avril et une saison pluvieuse d'une durée de 5 mois qui va de Mai à Septembre. La saison sèche se compose d'une période froide de novembre à javier et d'une période chaude de février à avril et les précipitations sont relativement abondantes. </h5>
</div>

</section>


<section class="sect_18">

  <div class="imm">
  <img src="images-1.jpg" alt="">
  <img src="images-2.jpg" alt="">
  <img src="images.jpg" alt="">
  <img src="téléchargement (7).jpeg" alt="">
  <img src="téléchargement (2).jpeg" alt="">
  <img src="tourisme-a-la-rencontre-de-cinq-merveilles-du-burkina-faso.jpg" alt="">
  </div>
  <h1>Le Quartier de Dioulasso-Bâ (Vieux Quartier)</h1>
  <p>C’est le plus ancien quartier traditionnel. Les maisons sont construites en banco. Elle comprend les quartiers Kibidoué, Donoma et Tougousso. La maison mère, Konsa, date du XVe siècle..
    Situé au sud-ouest du Burkina Faso et ancienne capitale coloniale de la Haute Volta, Bobo-Dioulasso est la capitale économique du Burkina Faso et deuxième grande ville en terme de population après Ouagadougou. Batisée ainsi par le colons, Bobo-Dioulasso signifie <la maison des Bobo-Dioula>
      , c'est la capitale de la région des haut-Bassins. Il couvre une superficie de 136.78km carré, sa population est essentiellement composée de Dioulas, de Mossis, et de Bobos. Le climat est du type Sud soudanien et se caractérise par une longue saison sèche qui va de 
      Octobre à Avril et une saison pluvieuse d'une durée de 5 mois qui va de Mai à Septembre. La saison sèche se compose d'une période froide de novembre à javier et d'une période chaude de février à avril et les précipitations sont relativement abondantes.</p>
  </section>

<section class="sect_17">

<h1>Mouvements histoiriques de bobo-Dioulasso</h1>
<div class="mouv">
<div>
<img src="58346017-43047362.jpg" alt="">
<h3>La grande mosquée de Dioulassoba</h3>
<p>Découvrez l'architecture unique de cette  mosquée en banco, datant du 19ème siècle</p>
</div>
<div>
<img src="téléchargement (1).jpeg" alt="">
<h3>La maison du patrimoine</h3>
<p>Visitez ce musée pour en apprendre d'avantage sur l'histoire et la culture de Bobo-Dioulasso.</p>
</div>
<div>
<img src="guinguette.webp" alt="">
<h3>Le vieux pond de Sya</h3>
<p>Admirez cette structure historique reliant les deux rives de la Kou</p>
</div>
</div>
</section>


<section class="sect_12" style="height: 100%;">
  <h1 style="color:  rgb(24, 211, 33);">Sya</h1>
<p>La capitale économique du Burkina Faso est un mélange passionnant de culture et de modernité. Ne manquez pas de Visitez La tombe de la Princesse Guimbi Ouattara, Le Musée Municipal, la Place de la Gare et la grande catédrale</p>
  <div class="row row-cols-1 row-cols-md-3 g-4">
<div class="col ">
<div class="card h-100 ca">
  <img src="48607121.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
  <div class="card-body">
    <h5 style="color:  rgb(24, 211, 33);" class="card-title">La tombe de la Princesse Guimbi Ouattara</h5>
    <p class="card-text">
      Née vers 1836 à Sya, de Diorie OUATTARA, roi du GUIRIKO, et de Makogo OUATTARA, la Princesse Guimbi OUATTARA s’est mariée pour la première fois à environ 15 ans.
      Elle ne mènera pas une véritable vie de foyer du fait de la disparition de ses différents époux. Elle eut à recevoir BINGER chez elle.
      Le Mausolée de la princesse Guimbi OUATTARA est situé à environ 150 m de la rue Vicens à parir de l’Agence BIB Koko, au secteur 3.
    </p>
  </div>
</div>
</div>
<div class="col">
<div class="card h-100 ca">
  <img src="img_8520.webp" class="card-img-top" alt="Palm Springs Road"/>
  <div class="card-body">
    <h5 style="color:  rgb(24, 211, 33);" class="card-title">Le Musée Municipal </h5>
    <p class="card-text"> Assez récent (1980) le Musée est la mémoire de la région Ouest du Burkina. On y trouve de nombreux outils traditionnels, des oeuvres, bijoux de bronze, etc.

      Deux types d’habitats y ont été reconstitués grandeur nature : une maison Bobo et une case Peul. Vous pourrez même y admirer des artisans du bronze et du bois en plein travail..</p>
  </div>
</div>
</div>
<div class="col">
<div class="card h-100 ca">
  <img src="arton60.webp" class="card-img-top" alt="Los Angeles Skyscrapers"/>
  <div class="card-body">
    <h5 style="color:  rgb(24, 211, 33);" class="card-title">La Place de la Gare</h5>
    <p class="card-text">Le nom « Place de la Gare » est donné en reférence à la société des chemins de fer du Burkina Faso. En 1984, cette place reçoit une nouvelle dénomination, Place TIEFO AMORO en souvenir du Grand Guéri, Roi des Tiéfo qui combattit contre Tiéba Traoré.
      Il fut tué par la complicité une vieille femme qui avait mouillé sa poudre de réserve.
      Des rites sont encore célébrés sur la tombe de Tiéfo Amoro.</p>
  </div>
</div>
</div>
<div class="col">
<div class="card h-100 ca">
  <img src="dsc_0309.webp" class="card-img-top" alt="Los Angeles Skyscrapers"/>
  <div class="card-body">
    <h5 style="color:  rgb(24, 211, 33);" class="card-title">La Cathédrale</h5>
    <p class="card-text">Elle situe entre la gare ferroviaire et le marché central de Bobo-Dioulasso.
      Elle est d’une architecture moderne. Elle a été construite en 1957 et fut dédiée à Notre Dame de Lourdes. Elle a été ouverte au culte en 1961. On peut y voir la sculpture du testament (ancien et nouveau) sur les sièges, dans des styles mêlant artistiquement les styles traditionnels et contemporains.</p>
  </div>
</div>
</div>
</div>
</section>
<section  class="sect_19">
<div class="sep">
<div>
  <h1>Le Musée de la Musique d’Hier et d’Aujourd’hui</h1>
  <p>Créé par l’ASPAC (Association pour la Sauvegarde du Patrimoine Culturel), ce musée présente une grande variété d’instruments de musique traditionnelle, collectés auprès de différentes ethnies du Burkina Faso depuis 1993. La création de ce musée dans une volonté de connaissance dans le respect, d’ouverture et d’accessibilité du patrimoine musical burkinabé à tous. Parmi les diverses activités du musée : Programmes pédagogiques, expositions temporaires, projections video …</p>
</div>
<div>
<img src="1240334884_1.webp" alt="">
<img src="1240334884_5.webp" alt="">
<img src="téléchargement (7).jpeg" alt="">
</div>
</div>
<div class="sep">
<div>
  <h1>Le Grand Marché</h1>
  <p>Créé en 1952, le marché de Bobo Dioulasso a subi une réhabilitation en 1998 dont les travaux ont pris fin en 2001.
    Situé au coeur du triangle commercial de la ville sur l’axe reliant la mairie à la gare, le marché est l’un des premiers centres commerciaux du Burkina Faso. Réputé particulièrement pour ses tissus, il occupe un vaste espace de 4 hectares composé de 3284 boutiques.
    A lui seul il constitue une part importante dans l’économie de la ville et de la sous-région.</p>
</div>
<div>
<img src="140209-bobo-ouaga-30-copier.webp" alt="">
<img src="16283929-fruits-et-légumes-à-l-étal-de-marché.jpg" alt="">
<img src="18_big.webp" alt="">
</div>
</div>
</section>

<section class="sect_20">

<h1>La Guinguette</h1>
<p>Située à 15 kilomètres de la ville de Bobo, la Guinguette est un site touristique interessant.
  Source naturelle entourée d’une végétation luxuriante, elle constitue un cadre idéal de détente, de pique-nique et de baignade.
  Toutefois, ce cite n’est pas accessible en saison pluvieuse (juin à octobre)</p>
  <marquee behavior="" direction="Right">
  <img src="guinguette.webp" alt="">
  <img src="images-4.jpg" alt="">
  <img src="p1000643.jpg" alt="">
  <img src="guinguette.webp" alt="">
  <img src="images-4.jpg" alt="">
  <img src="p1000643.jpg" alt="">
  <img src="guinguette.webp" alt="">
  <img src="images-4.jpg" alt="">
  <img src="p1000643.jpg" alt="">
  </marquee>
  
  <h1>Dafra</h1>
  <p>Le lac sacré de Dafra est un lieu de pélerinage renommé. Avant d’entreprendre le voyage, le pèlerin est informé des interdits du site, notamment l’interdiction de la couleur rouge. Pour réussir son projet, le pèlerin fait appel à un ancien, le plus souvent un devin ou tout autre vieux pouvant sacrifier. Le pèlerinage s’effectue pour réparer une offense au Dafra dans la tradition. Mais de plus en plus, certaines personnes font le pèlerinage pour d’autres raisons : recherche de fortune, du bien-être, de la santé, de la fertilité de la femme ou pour remercier les esprits d’avoir exaucé une demande</p>
<marquee behavior="" direction="">
<img src="images-6.jpg" alt="">
<img src="tc3a9lc3a9chargement-1.jpg" alt="">
<img src="tc3a9lc3a9chargement-3.jpg" alt="">
<img src="images-6.jpg" alt="">
<img src="images-6.jpg" alt="">
<img src="tc3a9lc3a9chargement-1.jpg" alt="">
<img src="tc3a9lc3a9chargement-3.jpg" alt="">
<img src="images-6.jpg" alt="">
<img src="images-6.jpg" alt="">
<img src="tc3a9lc3a9chargement-1.jpg" alt="">
<img src="tc3a9lc3a9chargement-3.jpg" alt="">
<img src="images-6.jpg" alt="">
</marquee>
</section>

<section class="sect_21">
<h1>Village de Koro</h1>
<p>Situé à une dizaine de kilomètres à l’est de la ville de Bobo-Dioulasso, il est implanté sur une colline rocheuse à 3 Km à droite sur l’axe Bobo – Ouagadougou. La population de KORO, composée de Bobo, Dioula, Peulh et Bobo-Dioula, est chiffrée à environ 30.000 habitants. Le village est scindé en 2 parties : une partie paysanne et l’autre constituée de Forgerons. Les paysans s’occupent des cultures pendant toute la période d’hivernage et ne rejoignent le village qu’au terme des activités agricoles. Les forgerons fournissent les outils artisanaux ou agricoles nécessaires aux paysans.</p>
<img src="fetiche_jumeaux.webp" alt="">
<img src="tc3a9lc3a9chargement-4.jpg" alt="">
<img src="tc3a9lc3a9chargement-6.jpg" alt="">
</section>

<section class="sect_22">
<h1>Votre commentaire</h1>
<div>
<textarea name="" id="" cols="30" rows="10">Entrer votre commentaire</textarea>
</div>
<button><a href="">visiter la vile de Sya</a></button>
<button><a href="">Coordonner et conditions</a></button>

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