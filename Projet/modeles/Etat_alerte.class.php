<?php
    class Etat_alerte
    {
        private $_id_etat_alerte;
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
        
        public function getId_etat_alerte(){ return $this->_id_etat_alerte; }
        public function getLibelle(){ return $this->_libelle; }
     
		
     
		
		public function setId_etat_alerte($new) {		
			$this->_id_etat_alerte =$new;
		}
		public function setLibelle($new) {		
			$this->_libelle =$new;
			}
		
    }
?>