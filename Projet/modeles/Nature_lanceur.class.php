<?php
    class Nature_lanceur
    {
        private $_id_nature_lanceur;
        private $_libelle;
	
        
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
        
        public function getId_nature_lanceur(){ return $this->_id_nature_lanceur; }
        public function getLibelle(){ return $this->_libelle; }
     
		
     
		
		public function setId_nature_lanceur($new) {		
			$this->_id_nature_lanceur =$new;
		}
		public function setLibelle($new) {		
			$this->_libelle =$new;
			}
		
    }
?>