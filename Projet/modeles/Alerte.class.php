<?php
    class Alerte
    {
        private $_id;
        private $_date;
		private $_x;
		private $_y;
		private $_description;
		private $_etat;
		private $_nature;
		private $_attachement;
		private $_lanceur;
		private $_intervenant;
		private $_type;
		
        public function __construct()
        {
        	$this->_date=date('Y-m-d H:i:s');
        	$this->_x="0.0";
        	$this->_y="0.0";
        	$this->_description="description de l'alerte";
        	$this->_etat="a";
        	$this->_nature="v";
        	$this->_attachement="lien.jpg";
        	$this->_lanceur=1;
        	$this->_intervenant=1;
        	$this->_type=1;
        }


		public function getNomTable(){ return 'alerte'; }
        public function getId(){ return $this->_id; }
        public function getDate(){ return $this->_date; }
        public function getX() { return $this->_x; }
        public function getY() { return $this->_y; }
        public function getDescription() { return $this->_description; }
        public function getEtat() { return $this->_etat; }
        public function getNature() { return $this->_nature; }
        public function getAttachement() { return $this->_attachement; }

		public function getLanceur() { return $this->_lanceur; }
		public function getIntervenant() { return $this->_intervenant; }
		public function getType() { return $this->_type; }

		public function getEtatLibelle() {
			switch ($this->_etat) {
			    case "a":
			        return "En Attente";
			        break;
			    case "c":
			        return "En Cours";
			        break;
			    case "r":
			        return "Résolue";
			        break;
			    case "n":
			        return "Non-Résolue";
			        break;
			    case "l":
			        return "Annullé";
			        break;
			    case "f":
			        return "Fousse Alerte";
			        break;
			    default:
			       return "";
			}
		}
        public function getNatureLibelle() {
        	switch ($this->_nature) {
			    case "v":
			        return "Victime";
			        break;
			    case "t":
			        return "Témoin";
			        break;
			    default:
			       return "";
			}
        }
		public function getTypeLibelle() {
			switch ($this->_type) {
			    case  1:
			        return "Accident";
			        break;
			    case  2:
			        return "Incendie";
			        break;
			    case  3:
			        return "Vol";
			        break;
			    case  4:
			        return "Viol";
			        break;
			    default:
			       return "";
			}
		}


		public function setId($new) {		
			$this->_id =$new;
		}
		public function setDate($new) {		
			$this->_date =$new;
			}
		public function setX($new) {		
			$this->_x =$new;
			}
		public function setY($new) {		
			$this->_y =$new;
			}
		public function setDescription($new) {		
			$this->_description =$new;
			}
		public function setEtat($new) {		
			$this->_etat =$new;
			}
		public function setNature($new) {		
			$this->_nature =$new;
			}
		public function setAttachement($new) {		
			$this->_attachement =$new;
			}
		public function setLanceur($new) {		
			$this->_lanceur =$new;
			}
		public function setIntervenant($new) {		
			$this->_intervenant =$new;
			}
		public function setType($new) {		
			$this->_type =$new;
			}

    }
?>