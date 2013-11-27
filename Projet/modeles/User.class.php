<?php
    class utilisateur
    {
        private $_id_utilisateur;
		private $_login;
		private $_pass1;
		private $_pass2;
		private $_email;
		private $_id_ques;
		private $_ques;
		private $_id_type;
		private $_type;
     
        
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
        
        public function getId_utilisateur(){ return $this->_id_utilisateur; }
        public function getLogin() { return $this->_login; }
        public function getPass1() { return $this->_pass1; }
		public function getPass2() { return $this->_pass2; }
		public function getEmail() { return $this->_email; }
		public function getId_ques() { return $this->_id_ques; }
		public function getId_type() { return $this->_id_type; }
		public function getType() { return $this->_type; }
		
     
		
		public function setId_utilisateur($newID) {		
			$newID= (int) $newID;
			if ($newID>= 0)
			$this->_id_utilisateur =$newID;
		}
		public function setId_ques($newID) {		
			$newID= (int) $newID;
			if ($newID>= 0)
			$this->_id_ques =$newID;
		}
		public function setId_type($newID) {		
			$newID= (int) $newID;
			if ($newID>= 0)
			$this->_id_type =$newID;
		}
		
		
        public function setLogin($newS) {
				if (is_string($newS) && strlen($newS) <= 50)
				{
					$this->_login = $newS;
				}
			}
			
        public function setPass1($V) {
		    
			if (is_string($V) && strlen($V) <= 50)
			 $this->_pass1=$V; 
			}
		public function setPass2($V) {
		    
			if (is_string($V) && strlen($V) <= 50)
			 $this->_pass2=$V; 
			}
		 
			 public function setEmail($F)
               {           
			if (is_string($F) && strlen($F) <= 50)
            $this->_email =$F;
			
               }   
		   public function setType($F)
               {           
			if (is_string($F) && strlen($F) <= 50)
            $this->_type =$F;
			
               }        
     
       
    }
?>