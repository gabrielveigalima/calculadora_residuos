<?php


include_once('connect/connect.php');

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['name_company']) && isset($_POST['destination']) && isset($_POST['category']) && isset($_POST['subcategory']) && isset($_POST['amount'])){

	$name = mysqli_escape_string($conn, $_POST['name']);
	echo $name;

	$email = mysqli_escape_string($conn, strtolower ($_POST['email']));
	echo $email;

	$tel = mysqli_escape_string($conn, $_POST['tel']);
	echo $tel;

	$name_company = mysqli_escape_string($conn, $_POST['name_company']);
	echo $name_company;

	$destination = mysqli_escape_string($conn, $_POST['destination']);
	echo $destination;

	$category = mysqli_escape_string($conn, $_POST['category']);
	echo $category;

	$subcategory = mysqli_escape_string($conn, $_POST['subcategory']);
	echo $subcategory;

	$amount = mysqli_escape_string($conn, $_POST['amount']);
	echo $amount;
	
} else {
	echo "Preencha todos os campos!";
} 
