<?php
    class Alerte
    {
        private $_id;
        private $_date;
		private $_x;
		private $_y;
		private $_description;
		private $_etat;
		private $_nature;
		private $_attachement;
		private $_lanceur;
		private $_intervenant;
		private $_type;
		
        public function __construct()
        {
        	$_date=date("d-m-Y");
        	$_x="0.0";
        	$_y="0.0";
        	$_description="description de l'alerte";
        	$_etat="a";
        	$_nature="v";
        	$_attachement="lien.jpg";
        	$_lanceur=1;
        	$_intervenant=1;
        	$_type=1;
        }


		public function getNomTable(){ return 'alerte'; }
        public function getId(){ return $this->_id; }
        public function getDate(){ return $this->_date; }
        public function getX() { return $this->_x; }
        public function getY() { return $this->_y; }
        public function getDescription() { return $this->_description; }
        public function getEtat() { return $this->_etat; }
        public function getNature() { return $this->_nature; }
        public function getAttachement() { return $this->_attachement; }

		public function getLanceur() { return $this->_lanceur; }
		public function getIntervenant() { return $this->_intervenant; }
		public function getType() { return $this->_type; }
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setDate($new) {		
			$this->_date =$new;
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

    }
?>