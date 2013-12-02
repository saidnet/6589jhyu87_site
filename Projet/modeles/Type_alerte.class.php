<?php
    class Type_alerte
    {
        private $_id_type_alerte;
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
        
        public function getId_type_alerte(){ return $this->_id_type_alerte; }
        public function getLibelle(){ return $this->_libelle; }
     
		
     
		
		public function setId_type_alerte($new) {		
			$this->_id_type_alerte =$new;
		}
		public function setLibelle($new) {		
			$this->_libelle =$new;
			}
		
    }
?>