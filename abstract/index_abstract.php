<?php 

	require_once '../abstract/classe_veiculo.php';
	require_once '../abstract/extend_carro.php';
	require_once '../abstract/extend_moto.php';
	
	$modelo = "BMW";
	$cor = "Vermelha";
	$ano = 2020;

	if(isset($modelo) && isset($cor) && isset($ano)) {
		$carro = new Carro($modelo,$cor,$ano);
		if(isset($carro)) {
			$carro->caracteristicas();
			$carro->andar();
		} else {
			echo "Erro, verifique se a classe foi corretamente instanciada.";
		}
	} else {
		echo "Verifique a existência dos parâmetros do construtor.";
	}

	echo"<br>";

	$modelo = "Harley";
	$cor = "Vermelha";
	$ano = 2019;

	if(isset($modelo) && isset($cor) && isset($ano)) {
		$moto = new Moto($modelo,$cor,$ano);
		if(isset($moto)) {
			$moto->caracteristicas();
			$moto->andar();
		} else {
			echo "Erro, verifique se a classe foi corretamente instanciada.";
		}
	} else {
		echo "Verifique a existência dos parâmetros do construtor.";
	}

?>