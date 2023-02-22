<?php  
	
	require_once '../polimorfismo/classe_dh.php';
	require_once '../polimorfismo/extend_dante.php';

	$sword = "Rebellion";
	$gun = "Ebony & Ivory";

	if (isset($sword) && isset($gun)) {
		$dante = new Dante($sword,$gun);
		if (isset($dante)) {
			$dante->falar();
			$dante->view();
		} else {
			echo "Erro, verifique se a classe foi corretamente instanciada.";
		}
	} else {
		echo "Verifique a existência dos parâmetros do construtor.";
	}

?>