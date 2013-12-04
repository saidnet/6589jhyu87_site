<?php
    class Role
    {
        private $_id;
        private $_libelle;
	
		public function __construct()
        {
        	$_libelle='role';
        }

        public function getNomTable(){ return 'role'; }
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