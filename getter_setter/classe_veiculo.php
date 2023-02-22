<?php  
	
	class Veiculo {

		private $modelo, $cor, $ano;

		public function getModelo() { return $this->modelo; }
		
		public function setModelo($modelo) { $this->modelo = $modelo; }

		public function getCor() { return $this->cor; }

		public function setCor($cor) { $this->cor = $cor; }

		public function getAno() { return $this->ano; }

		public function setAno($ano) { $this->ano = $ano; }

		public function __construct($modelo,$cor,$ano) { 
			$this->setModelo($modelo); 
			$this->setCor($cor); 
			$this->setAno($ano); 
		}

		public function caracteristicas(){
			echo "Carro {$this->getModelo()} de cor {$this->getCor()} ano de lançamento {$this->getAno()}.<br>"; 
		}

		public function estepe() { 
			echo "Esse carro tem pneu de estepe. <br>"; 
		}
	}
	
?>
