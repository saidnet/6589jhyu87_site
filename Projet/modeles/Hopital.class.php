<?php
    class Hopital
    {
        private $_id;
        private $_designation;
		private $_adresse;
		private $_x;
		private $_y;

		 public function __construct()
        {
        	$_designation="Hopital militaire";
        	$_adresse="Guéliz";
        	$_x="0.0";
        	$_y="0.0";
        }
    
		public function getNomTable(){ return 'hopital'; }
        public function getId(){ return $this->_id; }
        public function getDesignation(){ return $this->_designation; }
        public function getAdresse() { return $this->_adresse; }
        public function getX() { return $this->_x; }
        public function getY() { return $this->_y; }

		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setDesignation($new) {		
			$this->_designation =$new;
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