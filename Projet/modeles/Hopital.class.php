<?php
    class Hopital
    {
        private $_id_hopital;
        private $_nom;
		private $_adresse;
    
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
        
        public function getId_hopital(){ return $this->_id_hopital; }
        public function getNom(){ return $this->_nom; }
        public function getAdresse() { return $this->_adresse; }
        

		
     
		
		public function setId_hopital($new) {		
			$this->_id_hopital =$new;
		}
		public function setNom($new) {		
			$this->_nom =$new;
			}
		public function setAdresse($new) {		
			$this->_adresse =$new;
			}
		
		
       
    }
?>