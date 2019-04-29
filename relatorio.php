<?php

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("dompdf/autoload.inc.php");

session_start();

include_once('connect/connect.php');

//Tratando dados do formulário

#if (isset($_POST['category']) && isset($_POST['subcategory']) && isset($_POST['amount'])){

if (isset($_POST['dest']) && isset($_POST['subcategory']) && isset($_POST['amount'])){

	
	#$category 		= mysqli_escape_string($conn, $_POST['category']);
	$dest 	= mysqli_escape_string($conn, $_POST['dest']);
	$subcategory 	= mysqli_escape_string($conn, $_POST['subcategory']);
	$amount 		= mysqli_escape_string($conn, $_POST['amount']);

	$query = mysqli_query($conn, "SELECT name, price FROM sub_category WHERE id = ".$subcategory."") or die(mysqli_error($conn));
    $resultado = mysqli_fetch_assoc($query);

    $valor = ($resultado['price'] * $amount) + $dest;
	
    $texto = "Os resíduos plásticos de ".$resultado['name']." gerados tem potencial para retornar mensalmente para sua empresa: <center><h1><strong>R$".$valor."</strong></h1></center> <br>Você pode transformar este potencial em realidade através da Plataforma da Polen . A Polen é uma plataforma online que conecta empresas que geram resíduos com empresas que compram resíduos, em todo o Brasil. Através dela, sua empresa pode vender seus resíduos de plástico, começar a cortar custos e fazer receita extra. <a target='_blanck' href= 'https://www.brpolen.com.br/register/seller/?lang=pt-br'>Cadastre-se gratuitamente aqui!</a>";

    

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html('
		
		<!DOCTYPE html>
		<html>
		<head>
			<title>Calculadora do Potencial Econômico dos Resíduos Plásticos - Polen</title>
			<meta name="description" content="Cálculo do Potencial Econômico dos Resíduos Plásticos">
    		<meta name="author" content="Polen - Solução e Valoração de Resíduos">
    		<link rel="icon" href="./img/LOGO-BOLA_semfundo_USAR-ESSE-LOGO.png">

    		<style type="text/css">
		      .logo{
		          background-image: url("./img/Cabecalho.png");
		          color: #fff;
				  background-position:center top;
				  height: 200px;
				  width: 100%;
				  background-size: cover;		
				  margin-top: -50px;
				  margin-left: -50px;
				  margin-right: -50px;
				  
		      }
		      body{
		      	font-family: "Montserrat", sans-serif;
		      	color: #232f3e;;
		      }
		    </style>
		</head>
		<body>
			<div class="logo" >.</div>
			<h1  style="text-align: center;">Relatório do Potencial Econômico dos Resíduos Plásticos</h1>
			<p>'.$texto.'</p>
		</body>
		</html>
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_polen_potencial_economico_dos_residuos_plasticos.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);

} 

else {
    $_SESSION['aviso'] = "<div class='alert alert-danger' role='alert'>    Preencha o formulário para iniciar o cálculo do valor potencial presente no seu resíduo!  </div>";

  header("Location: index.php");
  
}

?>