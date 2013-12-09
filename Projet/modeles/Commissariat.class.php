<?php
    class Commissariat
    {
        private $_id;
        private $_designation;
        private $_adress;
		private $_x;
		private $_y;
		private $_image;


    	public function __construct()
	        {
	        	$_designation="Central";
	        	$_adress="adr";
	        	$_x="0.0";
	        	$_y="0.0";
	        	$_image="img.jpg";
	        }

    	public function getNomTable(){ return 'commissariat'; }
        public function getId(){ return $this->_id; }
        public function getDesignation(){ return $this->_designation; }
        public function getAdress(){ return $this->_adress; }
        public function getX() { return $this->_x; }
        public function getY() { return $this->_y; }
        public function getImage() { return $this->_image; }

		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setDesignation($new) {		
			$this->_designation =$new;
			}
		public function setAdress($new) {
			$this->_adress =$new;
			}
		public function setX($new) {
			$this->_x =$new;
			}
		public function setY($new) {		
			$this->_y =$new;
			}
		public function setImage($new) { 
			$this->_image=$new; 
			}
		
       
    }
?>