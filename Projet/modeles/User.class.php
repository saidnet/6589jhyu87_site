<?php
    class User
    {
        private $_id;
        private $_cin;
		private $_login;
		private $_password;
		private $_nom;
		private $_prenom;
		private $_num_telef;
		private $_id_etat_user;
		private $_id_type_user;
		private $_id_role;
     
     	 public function __construct()
        {
        	$_cin="EE101010";
        	$_login="user";
        	$_password="pass";
        	$_nom="first name";
        	$_prenom="family name";
        	$_num_telef="0600125896";
        	$_id_etat_user=1;
        	$_id_type_user=1;
        	$_id_role=1;
        }

        
		public function getNomTable(){ return 'user'; }
        public function getId(){ return $this->_id; }
        public function getCin(){ return $this->_cin; }
        public function getLogin() { return $this->_login; }
        public function getPassword() { return $this->_password; }
		public function getNom() { return $this->_nom; }
		public function getPrenom() { return $this->_prenom; }
		public function getId_etat_user() { return $this->_id_etat_user; }
		public function getId_type_user() { return $this->_id_type_user; }
		public function getId_role() { return $this->_id_role; }
		
     
		
		public function setId($new) {		
			$this->_id =$new;
		}
		public function setCin($new) {		
			$this->_cin =$new;
			}
		public function setLogin($new) {		
			$this->_login =$new;
			}
		public function setPassword($new) {		
			$this->_password =$new;
			}
		public function setNom($new) {		
			$this->_nom =$new;
			}
		public function setPrenom($new) {		
			$this->_prenom =$new;
			}
		public function setId_etat_user($new) {		
			$this->_id_etat_user =$new;
			}
		public function setId_type_user($new) {		
			$this->_id_type_user =$new;
			}
		public function setId_role($new) {		
			$this->_id_role =$new;
			}
       
    }
?>