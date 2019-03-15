<!DOCTYPE html>
 <html>
    <head>
     <title>Contact</title>
      <!--Import Google Icon Font-->
      <link href="css/icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="cont.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


     <meta charset="utf-8">



    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>



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



        <div class="g">
        <form name="formulaire" action="cont.php" method=post  >





           <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">


        </div>
            </div>
    </div>
  </div>



        <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nom" name="nom" type="text" class="validate"       pattern="[a-zA-Z]+[a-zA-Z ]{1,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
          <label for="icon_prefix">Nom: <span class="red-text text-darken-2">*</span></label>
        </div>
            </div>
    </div>
  </div>



         <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="prenom" name="prenom" type="text" class="validate"       pattern="[a-zA-Z]+[a-zA-Z ]{1,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
          <label for="icon_prefix">Prenom:<span class="red-text text-darken-2">*</span></label>
        </div>
            </div>
    </div>
  </div>


     <div class="row">
    <div class="col s12">
      <div class="row">
     <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email"  type="email" class="validate"              pattern="[a-zA-Z]+[a-zA-Z@_-.0-9]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone" for="email" data-error="wrong" data-success="right">Adresse e-mail:<span class="red-text text-darken-2">*</span></label>
        </div>
          </div>
    </div>
  </div>


       <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">textsms</i>
          <input type="text" id="message" name="message"  class="validate"                   pattern="[a-zA-Z0-9_- ]" title="Ce champ ne doit contenir de caractères spéciaux" autofocus required>
          <label for="autocomplete-input">Votre Demande:<span class="red-text text-darken-2">*</span></label>
        </div>
      </div>
    </div>
  </div>



      <div class="row">
      <div class="col s12">

        <div class="input-field col s6">

        <div class="input-field col s6">
      <button class="btn waves-effect waves-light" type="submit" onclick="return verifform();return false" name="action">Envoyer
    <i class="material-icons right">send</i>
  </button>


      </div>

      </div>
       </div> </div>


 </form>


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




   </body>
  </html>
