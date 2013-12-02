<?php
    class Ami
    {
        private $_id_ami;
        private $_nom;
		private $_prenom;
		private $_num_telef;
    
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
        
        public function getId_ami(){ return $this->_id_ami; }
        public function getNom(){ return $this->_nom; }
        public function getPrenom() { return $this->_prenom; }
        public function getNum_telef() { return $this->_num_telef; }

		
     
		
		public function setId_ami($new) {		
			$this->_id_ami =$new;
		}
		public function setNom($new) {		
			$this->_nom =$new;
			}
		public function setPrenom($new) {		
			$this->_prenom =$new;
			}
		public function setNum_telef($new) {		
			$this->_num_telef =$new;
			}
		
       
    }
?>