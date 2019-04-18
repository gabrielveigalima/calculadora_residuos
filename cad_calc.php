<?php

session_start();

include_once('connect/connect.php');

//Tratando dados do formulário

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['name_company']) && isset($_POST['destination']) && isset($_POST['category']) && isset($_POST['subcategory']) && isset($_POST['amount'])){

	$name 			= mysqli_escape_string($conn, $_POST['name']);
	$email 			= mysqli_escape_string($conn, strtolower ($_POST['email']));
	$tel 			= mysqli_escape_string($conn, $_POST['tel']);
	$name_company 	= mysqli_escape_string($conn, $_POST['name_company']);
	$destination 	= mysqli_escape_string($conn, $_POST['destination']);
	$category 		= mysqli_escape_string($conn, $_POST['category']);
	$subcategory 	= mysqli_escape_string($conn, $_POST['subcategory']);
	$amount 		= mysqli_escape_string($conn, $_POST['amount']);


	$query = mysqli_query($conn, "SELECT id 
								FROM users 
								WHERE email = '$email'") or die(mysqli_error($conn));
	$num_rows = mysqli_num_rows($query);
	if ($num_rows > 0){
		echo "cadastrado";
	}else{
		echo "não cadastrado";
	}
	
} else {
	echo "Preencha todos os campos!";
	header('Location:index.php');
} 
