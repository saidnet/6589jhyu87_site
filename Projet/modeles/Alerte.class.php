<?php
    class Alerte
    {
        private $_id_alerte;
        private $_date_heure;
		private $_position;
		private $_description;
		private $_id_lanceur;
		private $_id_repondeur;
		private $_id_etat_alerte;
		private $_id_nature_lanceur;
		private $_id_attachement;
		private $_id_type_alerte;
     
        
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
        
        public function getId_alerte(){ return $this->_id_alerte; }
        public function getDate_heure(){ return $this->_date_heure; }
        public function getPosition() { return $this->_position; }
        public function getDescription() { return $this->_description; }
		public function getId_lanceur() { return $this->_id_lanceur; }
		public function getId_repondeur() { return $this->_id_repondeur; }
		public function getId_etat_alerte() { return $this->_id_etat_alerte; }
		public function getId_attachement() { return $this->_id_attachement; }
		public function getId_type_alerte() { return $this->_id_type_alerte; }
		
     
		
		public function setId_alerte($new) {		
			$this->_id_alerte =$new;
		}
		public function setDate_heure($new) {		
			$this->_date_heure =$new;
			}
		public function setPosition($new) {		
			$this->_position =$new;
			}
		public function setDescription($new) {		
			$this->_description =$new;
			}
		public function setId_lanceur($new) {		
			$this->Id_lanceur =$new;
			}
		public function setId_repondeur($new) {		
			$this->_id_repondeur =$new;
			}
		public function setId_etat_alerte($new) {		
			$this->_id_etat_alerte =$new;
			}
		public function setId_attachement($new) {		
			$this->_id_attachement =$new;
			}
		public function setId_type_alerte($new) {		
			$this->_id_type_alerte =$new;
			}
       
    }
?>