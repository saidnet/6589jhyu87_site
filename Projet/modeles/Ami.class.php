<?php
    class Ami
    {
        private $_id;
        private $_nom;
		private $_prenom;
		private $_num_telef;

		 public function __construct()
        {
        	$_nom="name";
        	$_prenom="family name";
        	$_num_telef="0654789632";
        }

   		public function getNomTable(){ return 'ami'; }
        public function getId(){ return $this->_id; }
        public function getNom(){ return $this->_nom; }
        public function getPrenom() { return $this->_prenom; }
        public function getNum_telef() { return $this->_num_telef; }

		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setNom($new) {		
			$this->_nom =$new;
			}
		public function setPrenom($new) {		
			$this->_prenom =$new;
			}
		public function setNum_telef($new) {		
			$this->_num_telef =$new;
			}
		
       
    }
?>