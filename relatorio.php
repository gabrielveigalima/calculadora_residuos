<?php

session_start();

include_once('connect/connect.php');

//Tratando dados do formulário

#if (isset($_POST['category']) && isset($_POST['subcategory']) && isset($_POST['amount'])){

if (isset($_POST['subcategory']) && isset($_POST['amount'])){

	
	#$category 		= mysqli_escape_string($conn, $_POST['category']);
	$subcategory 	= mysqli_escape_string($conn, $_POST['subcategory']);
	$amount 		= mysqli_escape_string($conn, $_POST['amount']);

	$query = mysqli_query($conn, "SELECT price FROM sub_category WHERE id = ".$subcategory."") or die(mysqli_error($conn));
    $resultado = mysqli_fetch_assoc($query);

    $valor = $resultado['price'] * $amount;
	

	
	$html = '<p>';	
	$html .= $valor;
	
	$html .= '</p>';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Celke - Relatório de Transações</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>