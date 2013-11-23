<?php
    class Connexion
    {
        private $_db;
        
        public function __construct()
        {
			try {
				$this->_db = new PDO('mysql:host=localhost;dbname=sfe1', 'root', '');			
			} catch (PDOException $e) {
				echo 'Connexion échouée : ' . $e->getMessage();
			}
        }
        
        public function getConnexion()
        {
			return $this->_db;
        }
        
        
}
?>