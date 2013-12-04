<?php
    class Type_user
    {
        private $_id;
        private $_libelle;
	
        public function __construct()
	        {
	        	$_libelle='type_user';
	        }

		public function getNomTable(){ return 'type_user'; } 
        public function getId(){ return $this->_id }
        public function getLibelle(){ return $this->_libelle; }
     
		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setLibelle($new) {		
			$this->_libelle =$new;
			}
		
    }
?>