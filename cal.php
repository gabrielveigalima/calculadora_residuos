<?php

session_start();

if isset($_GET['confirm'] == 'ok'){

	header("Location:calcular.php");
  
} else {
	$_SESSION['aviso'] = "<div class='alert alert-danger' role='alert'>
  Preencha o formulário para calcular o valor seu resíduo!
</div>";
}


?>
