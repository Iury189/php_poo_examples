<?php  

	class Moto extends Veiculo {

		public function andar() { 
			echo "Estou dando partida na motoclicleta. <br>"; 
		}

		public function caracteristicas() { 
			echo "A moto é uma {$this->getModelo()} de cor {$this->getCor()} fabricada em {$this->getAno()}. <br>"; 
		}
	}
	
?>