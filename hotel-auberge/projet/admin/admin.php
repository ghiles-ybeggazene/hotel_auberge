
<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="http://localhost/projet/css/materialize.min.css">
<link href="http://localhost/projet/css/icons.css" rel="stylesheet">

  <title>Admin</title>
</head>
<body>

<script type="text/javascript" src="http://localhost/projet/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/projet/js/materialize.min.js"></script>


    <form class="for" action="client.php" method="POST">



  <i class="large material-icons prefix">account_circle</i>
        <div class="row">


          <div class="input-field ">
         <input id="icon_prefix" type="text" class="validate" name="pseudo">
          <label for="icon_prefix">Nom d'utilisateur</label>
        </div>

        <div class="input-field">
          <input type="password" class="validate" name="mdp">
          <label for="password">Password</label>
        </div>
      </div>
   <button class="btn waves-effect waves-light" type="submit" onclick="return verifform();return false" name="action">Connecter
    <i class="material-icons right">send</i>
  </button>
    </form>



    
</body>      
</html>
