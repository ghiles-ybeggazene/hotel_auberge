<!DOCTYPE html>
 <html>
    <head>

     <title>Réservation</title>
      <!--Import Google Icon Font-->
      <link href="css/icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link rel="stylesheet" href="reservaa.css">

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


       <form name="formulaire" action="reservaa.php" method="post"       onsubmit="return(VerificationDestinataire(this));" >



        <div class="input-field col s12 ">

   <div class="row">
        <div class="input-field col s6">
        <div class="input-field col s6">
      <h> Date Arrivee :<span class="red-text text-darken-2">*</span></h>

        </div>
            </div>
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
           <input type="date"  name="datea"  id="datea" class="datepicker">

        </div>
                  </div>
    </div>
  </div>


       <div class="input-field col s12 ">

   <div class="row">
        <div class="input-field col s6">
        <div class="input-field col s6">
      <h> Date Depart :<span class="red-text text-darken-2">*</span></h>

        </div>
            </div>


       <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">location_off</i>
           <input type="date" name="dated" id="dated" class="datepicker">

        </div>
            </div>
    </div>
  </div>



        <div class="input-field col s12 ">

   <div class="row">
        <div class="input-field col s6">
        <div class="input-field col s6">
       <h>VOS COORDONNE:</h>
       </div>
            </div>



       <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nom" name="nom" type="text" class="validate"             pattern="[a-zA-Z]+[a-zA-Z ]{1,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
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
          <input id="prenom" name="prenom" type="text" class="validate"              pattern="[a-zA-Z]+[a-zA-Z ]{1,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
          <label for="icon_prefix">Prénom: <span class="red-text text-darken-2">*</span></label>
        </div>
            </div>
    </div>
  </div>

     <div class="row">
    <div class="col s12">
      <div class="row">
     <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="tel" name="tel"  type="text" class="validate"              pattern="[0]+[0-9]{1,}" title="Doit commencer par un Zero et ne doit pas contenir d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone">Téléphone : <span class="red-text text-darken-2">*</span></label>
        </div>
                </div>
    </div>
  </div>



     <div class="row">
    <div class="col s12">
      <div class="row">
     <div class="input-field col s6">
          <i class="material-icons prefix">my_location</i>
          <input id="adresse" name="adresse"  type="text" class="validate"              pattern="[a-zA-Z0-9_ -]+" title="Ce champ ne doit pas contenir de caractères spéciaux" autofocus required>
          <label for="icon_telephone">Adresse : <span class="red-text text-darken-2">*</span></label>
        </div>
                </div>
    </div>
  </div>


  <div class="input-field col s12 ">

   <div class="row">
        <div class="input-field col s6">
   <i class="material-icons prefix">call_split</i>
    <select class="icons"  name="typechambre"       id="id_personne"     >


    <option value="0" > Selectionner </option>
      <option value="Chambres simple" data-icon="images/chambre_single_brest_0.jpg" class="left circle">Chambre simple </option>
      <option value="Chambre double" data-icon="images/téléchargement.jpg" class="left circle">Chambre double</option>
      <option value="Chambres tribles" data-icon="images/1triple700.jpg" class="left circle">Suite luxueuse</option>

    </select>
    <label>Type de chambres: <span class="red-text text-darken-2">*</span></label>
  </div>
          </div>

  </div>





<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s2">





                <button class="btn waves-effect waves-light" type="submit" name="action">Réserver
             <i class="material-icons right">send</i>
           </button>
        </div>



        </div>
      </div>
    </div>
			</div>
       </form>








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
























      <script  type="text/javascript">

		  $(document).ready(function() {
    $('select').material_select();
  });


      function VerificationDestinataire(formulaire) {


		   if(document.formulaire.datea.value == "")
    {
     alert("Veuillez entrer votre Date Arrivee!");
     document.formulaire.datea.focus();
     return false;
    }



		   if(document.formulaire.dated.value == "")
    {
     alert("Veuillez entrer votre Date Depart");
     document.formulaire.dated.focus();
     return false;
    }


       if (document.getElementById('id_personne').options[0].selected) {
       	alert('Veuillez sélectionner types de chambres .');
        return false;
       }
       return true;
      }







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
