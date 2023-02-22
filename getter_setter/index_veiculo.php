<?php  
	
	require_once 'classe_veiculo.php';
	
	$modelo = "Tesla Model Y";
	$cor = "Vermelha";
	$ano = 2021;

	if(isset($modelo) && isset($cor) && isset($ano)) {
		$carro = new Veiculo($modelo,$cor,$ano);
		if(isset($carro)){
			$carro->caracteristicas();
			$carro->estepe();
		} else {
			echo "Erro, verifique se a classe foi corretamente instanciada.";
		}
	} else {
		echo "Verifique a existência dos parâmetros do construtor.";
	}

?>