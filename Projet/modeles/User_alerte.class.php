<?php
    class User_alerte
    {
        private $_id_alerte;
        private $_id_user;
	
        
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
        
        public function getId_alerte(){ return $this->_id_alerte }
        public function getId_user(){ return $this->_id_user; }
     
		
     
		
		public function setId_alerte($new) {		
			$this->_id_alerte =$new;
		}
		public function setId_user($new) {		
			$this->_id_user =$new;
			}
		
    }
?>