<?php 

	require_once '../heranca/classe_veiculo.php';
	require_once '../heranca/extend_carro.php';
	require_once '../heranca/extend_moto.php'; 

	$modelo = "Renault";
	$cor = "Vermelha";
	$ano = 2020;

	if(isset($modelo) && isset($cor) && isset($ano)) {
		$carro = new Carro($modelo,$cor,$ano);
		if(isset($carro)) {
			$carro->andar();
			$carro->parar();
			$carro->parabrisa();
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
			$moto->andar();
			$moto->parar();
			$moto->darGrau();
		} else {
			echo "Erro, verifique se a classe foi corretamente instanciada.";
		}
	} else {
		echo "Verifique a existência dos parâmetros do construtor.";
	}
	
?>