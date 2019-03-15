<?php

@mysql_connect("localhost","root","");
@mysql_select_db("auberge");


 ?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="http://localhost/IHM/accueil.css">
<link rel="stylesheet" href="http://localhost/IHM/css/materialize.css">

  <title>ADMIN</title>
</head>
<body>
      <div class="navbar-fixed">


  <nav>


  <ul class="topnav" id="myTopnav">
    <li class="icon">
      <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
    </li>
     <li><a href="admin.php?sortir=1">Deconnexion</a></li>
    <li><a href="confirmation.php">reservation</a></li>
    <li><a href="contact.php">contact</a></li>
   
  </ul>
  </nav> </div>
  

  
  <hr>
  
<!--
  <div class="pied">
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

                  <a class="fb" href="https://www.facebook.com/"><img src="http://localhost/IHM/images/icon-facebook.png" alt=""></a>
              <a class="twitter" href="https://twitter.com/"><img src="http://localhost/IHM/images/icon-twitter.png" alt=""></a>
                  <a class="gplus" href="https://plus.google.com/"><img src="http://localhost/IHM/images/icon-gplus.png" alt=""></a>

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
-->
<script>

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
