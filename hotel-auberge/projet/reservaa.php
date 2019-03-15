<?php


$datea=$_POST['datea'];
$dated=$_POST['dated'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$adresse=$_POST['adresse'];
$typechambre=$_POST['typechambre'];
//var_dump($datea.$dated.$nom.$prenom.$tel.$adresse.$typechambre);
//exit;
@mysql_connect('127.0.0.1','root','') ;

mysql_select_db('auberge');
$requete="insert into reservation (datea,dated,nom,prenom,tel,adresse,typechambre)values('$datea','$dated','$nom','$prenom','$tel','$adresse','$typechambre')";
mysql_query($requete)or die(mysql_error());
include('confirmreserva.php');
	

?>