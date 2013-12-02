<?php
    class Comissariat
    {
        private $_id_comissariat;
        private $_nom;
		private $_position;
    
		public function hydrate(array $donnees)
		{
			foreach ($donnees as $key => $value)
			{
				// On récupère le nom du setter correspondant à l'attribut
				$method = 'set'.ucfirst($key);
				
				// Si le setter correspondant existe
				if (method_exists($this, $method))
				{
					// On appelle le setter
					$this->$method($value);
				}
			}
		}
        
        public function getId_comissariat(){ return $this->_id_comissariat; }
        public function getNom(){ return $this->_nom; }
        public function getPosition() { return $this->_position; }
        

		
     
		
		public function setId_comissariat($new) {		
			$this->_id_comissariat =$new;
		}
		public function setNom($new) {		
			$this->_nom =$new;
			}
		public function setPosition($new) {		
			$this->_position =$new;
			}
		
		
       
    }
?>