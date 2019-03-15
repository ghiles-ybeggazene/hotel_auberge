<?php
session_start();
include "base.php";


$table=mysql_query("select * from reservation")or die (mysql_error());









?>

<body>
    
    <table>
        <thead>
        <tr>
            <th data-fieled="nom">nom</th>
            <th data-fieled="prenom">prenom</th>
            <th data-fieled="datea">date arrivé</th>
            <th data-fieled="dated">date depart</th>
            <th data-fieled="telephone">telephone</th>
            <th data-fieled="type">type de chambre</th>
            
        </tr>
        </thead>
        <?php while($b=mysql_fetch_array($table)){?>
       <tbody>
            <tr>
            <td><?php echo $b['nom'] ?></td>
            <td><?php echo $b['prenom'] ?></td>
            <td><?php echo $b['datea'] ?></td>
            <td><?php echo $b['dated'] ?></td>
            <td><?php echo $b['tel'] ?></td>
            <td><?php echo $b['typechambre'] ?></td>
            <td><a href="supprimer.php?id=<?php echo $b['id']?>"><button type="submit" >Supprimer</button></a></td>
            
        </tr>
        </tbody>
        <?php } ?>
    </table>
    
    <hr>
</body>
