<?php  
	
	class Veiculo {

		public $modelo, $cor, $ano;

		public function __construct($modelo,$cor,$ano){ 
			$this->modelo = $modelo; 
			$this->cor = $cor; 
			$this->ano = $ano; 
		}

		public function andar() { 
			echo "{$this->modelo} em movimento. <br>"; 
		}

		public function parar() { 
			echo "{$this->modelo} está parado. <br>"; 
		}
	}

?>