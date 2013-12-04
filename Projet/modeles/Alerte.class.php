<?php
    class Alerte
    {
        private $_id;
        private $_date_heure;
		private $_x;
		private $_y;
		private $_description;
		private $_id_lanceur;
		private $_id_repondeur;
		private $_id_etat_alerte;
		private $_id_nature_lanceur;
		private $_id_attachement;
		private $_id_type_alerte;
     
        public function __construct()
        {
        	$_date_heure=date("d-m-Y");
        	$_x="0.0";
        	$_y="0.0";
        	$_description="description de l'alerte";
        	$_id_lanceur=1;
        	$_id_repondeur=1;
        	$_id_etat_alerte=1;
        	$_id_nature_lanceur=1;
        	$_id_attachement=1;
        	$_id_type_alerte=1;
        }


		public function getNomTable(){ return 'alerte'; }
        public function getId_alerte(){ return $this->_id; }
        public function getDate_heure(){ return $this->_date_heure; }
        public function getX() { return $this->_x; }
        public function getY() { return $this->_y; }
        public function getDescription() { return $this->_description; }
		public function getId_lanceur() { return $this->_id_lanceur; }
		public function getId_repondeur() { return $this->_id_repondeur; }
		public function getId_etat_alerte() { return $this->_id_etat_alerte; }
		public function getId_attachement() { return $this->_id_attachement; }
		public function getId_type_alerte() { return $this->_id_type_alerte; }
		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setDate_heure($new) {		
			$this->_date_heure =$new;
			}
		public function setX($new) {		
			$this->_x =$new;
			}
		public function setY($new) {		
			$this->_y =$new;
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