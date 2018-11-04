<?php

// Connexion à la base de données
require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['VisName']) && isset($_POST['start']) && isset($_POST['end'])){

	$Title = $_POST['title'];
	$VisName = $_POST['VisName'];
	$PosAddress = $_POST['PosAddress'];
	$Category = $_POST['Category'];
	$NumberRoom = $_POST['NumberRoom'];
	$FName = $_POST['FName'];
	$Designation = $_POST['Designation'];
	$Department = $_POST['Department'];
	$Number = $_POST['Number'];
	$start = $_POST['start'];
	$end = $_POST['end'];

	$sql = "INSERT INTO events(title, VisName,PosAddress,Category,NumberRoom,FName,Designation,Department,Number, start, end) values ('$Title','$VisName','$PosAddress','$Category','$NumberRoom','$FName','$Designation','$Department','$Number', '$start', '$end')";
	//$req = $bdd->prepare($sql);
	//$req->execute();

	echo $sql;

	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);


?>
