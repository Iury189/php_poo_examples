<?php

	class Bijuu {
		
		public $raca;
		public $tipo;
		public $cor;

		public function __construct($raca,$tipo,$cor){
			$this->raca = $raca;
			$this->tipo = $tipo;
			$this->cor = $cor;
		}
		
		public function Caracteristicas(){
			echo "A bijuu é uma {$this->raca} do tipo {$this->tipo} de cor {$this->cor}.<br>";
		}

	}

	$bijuu = new Bijuu("Raposa","Nove caudas","Amarela");
	$bijuu->Caracteristicas();
	
?>