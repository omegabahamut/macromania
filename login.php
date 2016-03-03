<?php
$login = $_POST['username'];
$password = $_POST['password'];
if ($login == ""){
	header("location: index.html");
}

if ($password == ""){
	header("location: index.html");
}

// 1
	$connectServeur = mysql_connect('localhost','root',"root");
	if(!$connectServeur) {
		die('Failed to connect to server: ' );
	}
		//2
	$bdd =  mysql_select_db('sales',$connectServeur);
	if(!$bdd) {
		die('impossible de selectionner la base' );
	}
		//3
	$requete = "select * from user where username='$login'   and password='$password'";
	$result=mysql_query($requete);
		//4
	if ($result){
		if (mysql_num_rows($result) == 1){
			echo "ok";
			session_start();
			$-session["login" = $login]
			header("location: succes.php");
		} else {
			echo "ko";
			header("location:jp.php");
		}
		
	} else {
			die ("mauvaise requete ".$requete);
		}
?>


