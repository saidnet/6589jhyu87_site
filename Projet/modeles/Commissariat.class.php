<?php
    class Commissariat
    {
        private $_id;
        private $_designation;
		private $_x;
		private $_y;

    	public function __construct()
	        {
	        	$_designation="Central";
	        	$_x="0.0";
	        	$_y="0.0";
	        }

    	public function getNomTable(){ return 'commissariat'; }
        public function getId(){ return $this->_id; }
        public function getDesignation(){ return $this->_designation; }
        public function getX() { return $this->_x; }
        public function getY() { return $this->_y; }
        

		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setDesignation($new) {		
			$this->_designation =$new;
			}
		public function setX($new) {		
			$this->_x =$new;
			}
		public function setY($new) {		
			$this->_y =$new;
			}
		
		
       
    }
?>