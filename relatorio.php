<?php

session_start();

include_once('connect/connect.php');

//Tratando dados do formulário

#if (isset($_POST['category']) && isset($_POST['subcategory']) && isset($_POST['amount'])){

if (isset($_POST['subcategory']) && isset($_POST['amount'])){

	
	#$category 		= mysqli_escape_string($conn, $_POST['category']);
	$subcategory 	= mysqli_escape_string($conn, $_POST['subcategory']);
	$amount 		= mysqli_escape_string($conn, $_POST['amount']);

	$query = mysqli_query($conn, "SELECT name, price FROM sub_category WHERE id = ".$subcategory."") or die(mysqli_error($conn));
    $resultado = mysqli_fetch_assoc($query);

    $valor = $resultado['price'] * $amount;
	
    echo "Os resíduos plásticos de ".$resultado['name']." gerados tem potencial para retornar R$".$valor." mensalmente para sua empresa.<br><br>Você pode transformar este potencial em realidade através da Plataforma da Polen . A Polen é uma plataforma online que conecta empresas que geram resíduos com empresas que compram resíduos, em todo o Brasil. Através dela, sua empresa pode vender seus resíduos de plástico, começar a cortar custos e fazer receita extra. <a target='_blanck' href= 'https://www.brpolen.com.br/'>Cadastre-se gratuitamente aqui!</a>";



}
?>