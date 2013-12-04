<?php
    class Attachement
    {
        private $_id;
        private $_lien;
	
	 	public function __construct()
	        {
	        	$_lien="img/lien.jpg";
	        }
        
		public function getNomTable(){ return 'attachement'; }
        public function getId(){ return $this->_id; }
        public function getLien(){ return $this->_lien; }
     
		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setLien($new) {		
			$this->_lien =$new;
			}
		
    }
?>