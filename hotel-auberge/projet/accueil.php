<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="accueil.css">
<link rel="stylesheet" href="css/materialize.min.css">

  <title>ACCUEIL</title>
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

  </ul>
  </nav> </div>











  <div class="caro">





    <div class="slider">
        <ul class="slides">
          <li>
            <img src="images/hotel1.jpg">
            <div class="caption center-align">
              <h3>Hotel Mon auberge</h3>
              <h4 class="light grey-text text-lighten-3">La meilleur déstination.</h4>

            </div>
          </li>
          <li>
            <img src="images/hotel2.jpg">
            <div class="caption left-align">
              <h3>Hotel Mon auberge</h3>
              <h5 class="light grey-text text-lighten-3">La meilleur déstination.</h5>
            </div>
          </li>
          <li>
            <img src="images/hotel3.jpg">
            <div class="caption right-align">
              <h3>Hotel Mon auberge</h3>
              <h5 class="light grey-text text-lighten-3">La meilleur déstination.</h5>
            </div>
          </li>

        </ul>
      </div>






    <ul class="collapsible popout " data-collapsible="accordion">
        <li>
          <div class="collapsible-header center-align grey darken-4 white-text">Description</div>
          <div class="collapsible-body center-align"><span>
            <p>
               L’hôtel Mon auberge est parmi les hôtels de la kabylie, celui qui saura satisfaire à toutes vos
                exigences en matière de confort et de services haut-de-gamme. Il se trouve à quelques métres
                 des échangeurs autoroutiers, et possède un vaste parking pour les voitures, un vrai luxe dans
                  un bon emplacement.<br>
                   il représente le bon
            choix pour les clients qui veulent allier le charme à la tranquillité et à un emplacement
            pratique pour découvrir la ville de Tizi Ouzou, excellents services et design, propre et
             moderne, personnel serviable, Un endroit idéal pour se détendre.</p>

           </span></div>
        </li>
        </ul>





  </div>


    <div class="f3">
      <div class="f31">
        <div class="card">
                    <div class="card-image">
                      <img src="images/Ajax_DJ.jpg">
                      <span class="card-title">Soirées et Dj</span>
                    </div>
                    <div class="card-content center-align">
                      <p> Rendez-vous chaque vendredi et samedi soir de 19h
                         à 23h dans la salle Dj de l'hotel. Au programme des
                         lives et DJ sets à l’heure de l’apéro et du coucher de soleil. </p>
                    </div>

        </div>
      </div>

      <div class="f32">
        <div class="card">
                    <div class="card-image">
                      <img src="images/conf.jpg">
                      <span class="card-title">Evénnements et conférences</span>
                    </div>
                    <div class="card-content center-align">
                      <p>A ne pas rater, de nombreux événnements et conférences
                        organisés par notre équipage, le calendrier est a votre dispotion
                         sur le site de l'hotel.</p>
                    </div>

        </div>
     </div>

      <div class="f33">

        <div class="card">
                    <div class="card-image">
                      <img src="images/azrou.jpg">
                      <span class="card-title ">Guide touristique</span>
                    </div>
                    <div class="card-content center-align">
                      <p>Ce guide touristique met en valeur les richesses socioculturelles
                         et économiques de la Kabylie avec la présentation de plusieurs villages
                         classés patrimoine national. </p>
                    </div>

        </div> </div>

    </div>
<div class="carte">

<a class="crt" href="https://www.google.dz/maps/place/h%C3%B4tel+ittourar+tizi-Ouzou/@36.693775,4.0485473,17z/data=!3m1!4b1!4m5!3m4!1s0x128dc8151a052e79:0x1838018b107c1293!8m2!3d36.693775!4d4.050736?hl=fr">
  <img src="images/carte.png" alt="" width="70%">
</a>


</div>



<hr>
<footer class="page-footer black-text">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 >Mon Auberge</h5>
                <p>Téléphone : +213 (0) 558 867 053
                    Adresse : Lot ameyoud nouvelle ville Tizi Ouzou</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5>Suivez Nous</h5>

                  <a class="fb" href="https://www.facebook.com/"><img src="images/icon-facebook.png" alt=""></a>
              <a class="twitter" href="https://twitter.com/"><img src="images/icon-twitter.png" alt=""></a>
                  <a class="gplus" href="https://plus.google.com/"><img src="images/icon-gplus.png" alt=""></a>

              </div>
            </div>
          </div>
          <div class="footer-copyright black-text">
            <div class="container">
            © 2017 Copyright Text
            </div>
          </div>
        </footer>

</div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
 $('.collapsible').collapsible();
});
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
