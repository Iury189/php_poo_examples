<?php
	
	abstract class DevilHunter {

		private $sword, $gun;

		public function getSword() { return $this->sword; }

		public function setSword($sword) { $this->sword = $sword; }

		public function getGun() { return $this->gun; }

		public function setGun($gun) { $this->gun = $gun; }

		public function __construct($sword,$gun) { 
			$this->setSword($sword); 
			$this->setGun($gun); 
		}

		abstract function falar();

	}

?>