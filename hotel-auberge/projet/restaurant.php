<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
     <link rel="stylesheet" href="projet.css">
     <link rel="stylesheet" href="css/materialize.min.css">
     <meta name="viewport" content="width=device-width , initial-scale=1.0">
</head>
<body>

         <div class="corps">
<div class="navbar-fixed">


<nav>




<ul class="topnav" id="myTopnav">
 <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
  <li><a href="contaaa.php">Contact</a></li>
  <li><a href="reservaaa.php">Reservation</a></li>
  <li><a href="restaurant.php">Restauration</a></li>
  <li><a href="chambres.php">Chambres et services</a></li>
  <li><a href="accueil.php">Acceuil</a></li>

</nav> </div>

   <div class="car">

        <div class="slider">
    <ul class="slides">
      <li>
        <img  src="images/luxury_hotel_lancester_restaurant_a-02-942.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Restaurant</h3>
          <h5 class="light grey-text text-lighten-3">Mon Auberge</h5>
        </div>
      </li>
      <li>
        <img  src="images/luxury_hotel_lancester_courtyard-942.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>courtyard</h3>
          <h5 class="light grey-text text-lighten-3">Mon Auberge</h5>
        </div>
      </li>
      <li>
        <img  src="images/luxury_hotel_lancester_bar-942.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Bar</h3>
          <h5 class="light grey-text text-lighten-3">Mon Auberge.</h5>
        </div>
      </li>
      <li>
        <img  src="images/4%20-%20Copie.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Cafeteria</h3>
          <h5 class="light grey-text text-lighten-3">Mon Auberge.</h5>
        </div>
      </li>
    </ul>
  </div>
        <div class="text hoverable center-align">

      <p>
      Que vous soyez un groupe professionnel, résident ou passagés,MON AUBERGE avec sa salle café restaurant vous invite à découvrir les plats variés de notre chef cuisinier passant de la pause café et petit déjeuner, jusqu'à la restauration.</p>
      <div class="hide-on-med-and-down">
      <p>
      Pour accompagner vos réunions d’affaire et séminaires, Notre restaurant vous accueille et vous propose une  prestation complète et adaptée selon vos besoins (coffrets-repas,  Repas à table, Pause café).
          </p>

      <p>
          Pour organiser vos repas d’exception (anniversaires, mariages, baptême …) le restaurant du Palace Appart Hôtel vous accompagne tout au long de ces heureux évènements en assurant à vos invités un confort et un service de restauration de haute qualité.</p>
          </div>
      <b><i><u>Nos Services</u></i></b>
      <ul>
      <li>Ouvert tous les jours de 06h00 jusqu’à 23h00.</li>
      <li>Petit déjeuné gratuit pour les résidents du palace.</li>
      <li>Ambiance du restaurant : Conviviale.</li>
      <li>Type de cuisine : Cuisine du monde.</li>
      <li>Menu : gastronomique, (Entrée, suite, dessert, café ou thé).</li>
  </ul>
  </div>
</div>
    </div>
     <hr>
      <footer class="page-footer black-text">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 >Mon Auberge</h5>
                <p>Téléphone : +213 (0) 558 867 053
                    Adresse : Lot ameyoud nouvelle ville Tizi Ouzou.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5>Suivez Nous</h5>

                  <a class="fb" href="https://www.facebook.com/">  <img src="images/icon-facebook.png" alt=""> </a>
                  <a class="twitter" href="https://twitter.com/"> <img src="images/icon-twitter.png" alt=""> </a>
                  <a class="gplus" href="https://plus.google.com/"> <img src="images/icon-gplus.png" alt=""> </a>

              </div>
            </div>
          </div>
          <div class="footer-copyright black-text">
            <div class="container">
            © 2017 Copyright Text
            </div>
          </div>
        </footer>


          <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
      $('.slider').slider();
    });
      function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

</script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
