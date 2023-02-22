<?php 

	require_once '../interface/interface.php';
	require_once '../interface/implements_sistema.php';

	$sistema = new Sistema();
	if(isset($sistema)){
		$sistema->create();
		$sistema->read();
		$sistema->update();
		$sistema->delete();
	} else {
		echo "Erro, verifique se a classe foi corretamente instanciada.";
	}
?>