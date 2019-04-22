<?php

session_start();

if (isset($_GET['confirm'])){

	if ($_GET['confirm'] == 'ok'){

		$_SESSION['preencher'] = 1;

		header("Location:calcular.php");
  
	} else {
		$_SESSION['aviso'] = "<div class='alert alert-danger' role='alert'>
	  Preencha o formulário para calcular o valor seu resíduo!
	</div>";
	}
}


?>
