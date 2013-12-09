<?php
    class User
    {
        private $_id;
        private $_cin;
		private $_login;
		private $_password;
		private $_nom;
		private $_prenom;
		private $_email;
		private $_tel;
		private $_operateur;
		private $_serial;
		private $_avatar;
		private $_disponibilite;
		private $_lastx;
		private $_lasty;
		private $_role;
		private $_type;
		private $_etat;
     
     	 public function __construct()
        {
        	$_cin="EE101010";
        	$_login="user";
        	$_password="pass";
        	$_nom="first name";
        	$_prenom="family name";
       		$_email="";
        	$_tel="0600125896";
        	$_operateur="";
			$_serial="";
			$_avatar="";
			$_disponibilite="";
			$_lastx="";
			$_lasty="";
        	$_role=1;
        	$_type=1;
        	$_etat=1;
        }

        
		public function getNomTable(){ return 'user'; }
        public function getId(){ return $this->_id; }
        public function getCin(){ return $this->_cin; }
        public function getLogin() { return $this->_login; }
        public function getPassword() { return $this->_password; }
		public function getNom() { return $this->_nom; }
		public function getPrenom() { return $this->_prenom; }
		public function getEmail() { return $this->_email; }
		public function getTel() { return $this->_tel; }
		public function getOperateur() { return $this->_operateur; }
		public function getSerial() { return $this->_serial; }
		public function getAvatar() { return $this->_avatar; }
		public function getDisponibilite() { return $this->_disponibilite; }
		public function getLastx() { return $this->_lastx; }
		public function getLasty() { return $this->_lasty; }
		public function getRole() { return $this->_role; }
		public function getType() { return $this->_type; }
		public function getEtat() { return $this->_etat; }
		
     
		
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
		public function setEmail($new) {
			$this->_email;
			}
		public function setTel($new) { 
			$this->_tel; 
			}
		public function setOperateur($new) { 
			$this->_operateur; 
			}
		public function setSerial($new) {
			 $this->_serial; 
			}
		public function setAvatar($new) {
			 $this->_avatar;
			}
		public function setDisponibilite($new) {
			 $this->_disponibilite; 
			}
		public function setLastx($new) { 
			$this->_lastx; 
			}
		public function setLasty($new) { 
			$this->_lasty; 
			}	
		public function setRole($new) {		
			$this->_role =$new;
			}
		public function setType($new) {		
			$this->_type =$new;
			}
		public function setEtat($new) {		
			$this->_etat =$new;
			}
       
    }
?>