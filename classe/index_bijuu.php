<?php 

	require_once '../classe/classe_bijuu.php'; 

	$bijuu = array();

	$raca = "Raposa";
	$tipo = "Nove caudas";
	$cor = "Amarela";

	if (isset($raca) && isset($tipo) && isset($cor)) {
		$bijuu[0] = new Bijuu($raca,$tipo,$cor);
		if (isset($bijuu[0])) {
			$bijuu[0]->caracteristicas();
		} else {
			echo "Erro, verifique se a classe foi corretamente instanciada.";
		}
	} else {
		echo "Verifique a existência dos parâmetros do construtor.";
	}

	echo "<br>";

	$raca = "Gato";
	$tipo = "Duas caudas";
	$cor = "Azul";

	if (isset($raca) && isset($tipo) && isset($cor)) {
		$bijuu[1] = new Bijuu($raca,$tipo,$cor);
		if (isset($bijuu[1])) {
			$bijuu[1]->caracteristicas();
		} else {
			echo "Erro, verifique se a classe foi corretamente instanciada.";
		}
	} else {
		echo "Verifique a existência dos parâmetros do construtor.";
	}

?>