<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$message=$_POST['message'];
@mysql_connect('127.0.0.1','root','') ;

mysql_select_db('auberge');
$requete="insert into contact values('','$nom','$prenom','$email','$message')";
mysql_query($requete);
include('confirm.php');
?>