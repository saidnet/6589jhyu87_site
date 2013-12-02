<?php
    class Attachement
    {
        private $_id_attachement;
        private $_lien;
	
        
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
        
        public function getId_attachement(){ return $this->_id_attachement; }
        public function getLien(){ return $this->_lien; }
     
		
     
		
		public function setId_attachement($new) {		
			$this->_id_attachement =$new;
		}
		public function setLien($new) {		
			$this->_lien =$new;
			}
		
    }
?>