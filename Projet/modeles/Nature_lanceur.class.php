<?php
    class Nature_lanceur
    {
        private $_id;
        private $_libelle;

        public function __construct()
	        {
	        	$_libelle='nature_lanceur';
	        }
        
		public function getNomTable(){ return 'nature_lanceur'; }
        public function getId(){ return $this->_id; }
        public function getLibelle(){ return $this->_libelle; }
     
		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setLibelle($new) {		
			$this->_libelle =$new;
			}
		
    }
?>