<?php
    class Etat_alerte
    {
        private $_id;
        private $_libelle;
	
        public function __construct()
	        {
	        	$_libelle="etat_alerte";
	        }

		public function getNomTable(){ return 'etat_alerte'; }
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