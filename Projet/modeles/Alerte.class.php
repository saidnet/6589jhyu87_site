<?php
    class Alerte
    {
        private $_id;
        private $_date_heure;
		private $_x;
		private $_y;
		private $_description;
		private $_etat;
		private $_nature;
		private $_attachement;
<<<<<<< HEAD
		private $_lanceur;
		private $_intervenant;
=======
		private $_id_lanceur;
		private $_id_intervenant;
>>>>>>> bfb8f67339b123a91f35a1be3c9ecced29c30b45
		private $_type;
		
		
		private $_id_type_alerte;
     
        public function __construct()
        {
        	$_date_heure=date("d-m-Y");
        	$_x="0.0";
        	$_y="0.0";
        	$_description="description de l'alerte";
        	$_etat="";
        	$_nature="";
        	$_attachement="lien.jpg";
<<<<<<< HEAD
        	$_lanceur=1;
        	$_intervenant=1;
=======
        	$_id_lanceur=1;
        	$_id_intervenant=1;
>>>>>>> bfb8f67339b123a91f35a1be3c9ecced29c30b45
        	$_type=1;
        }


		public function getNomTable(){ return 'alerte'; }
        public function getId_alerte(){ return $this->_id; }
        public function getDate_heure(){ return $this->_date_heure; }
        public function getX() { return $this->_x; }
        public function getY() { return $this->_y; }
        public function getDescription() { return $this->_description; }
        public function getEtat() { return $this->_etat; }
        public function getNature() { return $this->_nature; }
        public function getAttachement() { return $this->_attachement; }
<<<<<<< HEAD
		public function getLanceur() { return $this->_lanceur; }
		public function getIntervenant() { return $this->_intervenant; }
		public function getType() { return $this->_type; }
=======
		public function getId_lanceur() { return $this->_id_lanceur; }
		public function getId_intervenant() { return $this->_id_intervenant; }
		public function getType() { return $this->_type; }
		
		
		
     
>>>>>>> bfb8f67339b123a91f35a1be3c9ecced29c30b45
		
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
		public function setEtat($new) {		
			$this->_etat =$new;
			}
		public function setNature($new) {		
			$this->_nature =$new;
			}
		public function setAttachement($new) {		
			$this->_attachement =$new;
			}
		public function setLanceur($new) {		
			$this->_lanceur =$new;
			}
		public function setIntervenant($new) {		
			$this->_intervenant =$new;
			}
		public function setType($new) {		
			$this->_type =$new;
			}
<<<<<<< HEAD
=======
		
>>>>>>> bfb8f67339b123a91f35a1be3c9ecced29c30b45
    }
?>