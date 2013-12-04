<?php
    class Hopital
    {
        private $_id_hopital;
        private $_nom;
		private $_adresse;
		private $_x;
		private $_y;

		 public function __construct()
        {
        	$_nom="Hopital militaire";
        	$_adresse="Guéliz";
        	$_x="0.0";
        	$_y="0.0";
        }
    
		public function getNomTable(){ return 'hopital'; }
        public function getId(){ return $this->_id; }
        public function getNom(){ return $this->_nom; }
        public function getAdresse() { return $this->_adresse; }
        public function getX() { return $this->_x; }
        public function getY() { return $this->_y; }

		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setNom($new) {		
			$this->_nom =$new;
			}
		public function setAdresse($new) {		
			$this->_adresse =$new;
			}
		public function setX($new) {		
			$this->_x =$new;
			}
		public function setY($new) {		
			$this->_y =$new;
			}	
		
		
       
    }
?>