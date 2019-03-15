<?php

include "base.php";

if (isset($_POST['mdp'])) {
    if ($_POST['mdp'] != "" and $_POST['pseudo'] != "") {
        $mdp = $_POST['mdp'];
        $pseudo = $_POST['pseudo'];
        $nb = @mysql_fetch_array(mysql_query("select count(*) as nb,id,type from login where pseudo='$pseudo' and passe='$mdp'"));
        if ($nb['nb'] == 1) {
            $_SESSION['id'] = $nb['id'];
            if ($nb['type'] == "admin")
                $_SESSION['admin'] = $nb['type'];
         
        } else {

            ?>
            <SCRIPT LANGUAGE="Javascript">alert("Login ou mot de passe incorrect");
            </SCRIPT>    <?php


        }
    } else {
        ?>
        <SCRIPT LANGUAGE="Javascript">alert("Vous devez remplir tous les champs!");
        </SCRIPT>    <?php

    }
} else if (isset($_GET['sortir'])) {
    unset($_SESSION);
    session_destroy();
    header("location:index.php");
}
if (!(isset($_SESSION['admin']))&&!(isset($_SESSION['pharmacien']))) {
    header('Location: /projet/admin/admin.php');
    exit;
}

$table=mysql_query("select * from contact")or die (mysql_error());









?>

<body>
    
    <table>
        <thead>
        <tr>
            <th data-fieled="nom">nom</th>
            <th data-fieled="prenom">prenom</th>
            <th data-fieled="email">email</th>
            <th data-fieled="message">message</th>
           
            
        </tr>
        </thead>
        <?php while($b=mysql_fetch_array($table)){?>
        <tbody>
           <tr>
            <td><?php echo $b['nom'] ?></td>
            <td><?php echo $b['prenom'] ?></td>
            <td><?php echo $b['email'] ?></td>
            <td><?php echo $b['message'] ?></td>
           
            
        </tr>
        </tbody>
        <?php } ?>
    </table>
    
</body>
