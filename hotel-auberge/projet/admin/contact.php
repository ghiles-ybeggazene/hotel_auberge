<?php
   include"base.php";
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
        <?php 
                                                 } ?>
    </table>
    
</body> 

