<?php  

	class Carro extends Veiculo {

		public function andar() { 
			echo "Estou dando partida no carro. <br>"; 
		}

		public function caracteristicas() { 
			echo "O carro é um {$this->getModelo()} de cor {$this->getCor()} fabricado em {$this->getAno()}. <br>"; 
		}
	}
	
?>
