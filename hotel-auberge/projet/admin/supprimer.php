<?php 
include'base.php';
$id=$_GET['id'];
    mysql_query("delete from reservation where id='$id'")or die (mysql_error());


?>