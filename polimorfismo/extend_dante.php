<?php  

	class Dante extends DevilHunter {

		public function falar() { 
			echo "Let's rock!!! <br>"; 
		}

		private function armory() { 
			echo "My sword is {$this->getSword()} and my weapons are {$this->getGun()}. <br>"; 
		}

		protected function legacy() { 
			echo "My Legacy. <br>"; 
		}

		public function view() { 
			$this->Armory(); 
			$this->Legacy(); 
		}
	}

?>