<?php 	
	include('connection.php');

	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

	if (!$_POST['submit']) {
		echo 'entrer les champs requis!';
		header('location: salut_visiteur.php');

	}
	else{
		mysqli_query("INSERT INTO users(`id`,`username`,`firstname`,`lastname`) VALUES(NULL,'$username','$firstname','$lastname')") or die(mysql_error());

		echo "USER has been added!";
		header('Loaction: salut_visiteur.php');
	}
 ?>