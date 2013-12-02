<?php
    class news
    {
        private $_id_news;
		private $_titre;
		private $_description;
		
     
        
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
        
        public function getId_news(){ return $this->_id_news; }
        public function getTitre() { return $this->_titre; }
		public function getDescription() { return $this->_description; }
		
     
		
		public function setId_news($newID) {		
			$newID= (int) $newID;
			if ($newID>= 0)
			$this->_id_news =$newID;
			}		

        public function setDescription($V) {
		    
			if (is_string($V) && strlen($V) <= 500)
			 $this->_description=$V; 
			}
			
		public function setTitre($V) {
		    
			if (is_string($V) && strlen($V) <= 500)
			 $this->_titre=$V; 
			}
     
       
    }
?>