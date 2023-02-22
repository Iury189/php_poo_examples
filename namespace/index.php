<?php
	
	require_once 'model/aluno.php';
	require_once 'view/aluno.php';
	require_once 'controller/aluno.php';

	use model\Aluno as AlunoModel;
	use view\Aluno as AlunoView;
	use controller\Aluno as AlunoController;

	$aluno1 = new AlunoModel();
	$aluno2 = new AlunoView();
	$aluno3 = new AlunoController();

	if(isset($aluno1) && isset($aluno2) && isset($aluno3)) {
		$aluno1->imprimir();	
		$aluno2->imprimir();
		$aluno3->imprimir();
	} else {
		echo "Verifique a existência dos parâmetros do construtor.";
	}

?>