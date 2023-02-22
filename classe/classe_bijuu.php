<?php

	class Bijuu {
		
		public $raca, $tipo, $cor;

		public function __construct($raca,$tipo,$cor) { 
			$this->raca = $raca; 
			$this->tipo = $tipo; 
			$this->cor = $cor; 
		}
		
		public function caracteristicas() { 
			echo "A bijuu é {$this->raca} do tipo {$this->tipo} de cor {$this->cor}.<br>"; 
		}

	}

?>