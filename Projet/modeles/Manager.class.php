<?php
/*
Réalisé par : Said MOUNJI
Description : 
*/
    class Manager
    {
        private $_db;
        private $nom_table;
        private $nbr_att;
        private $tab_att;
        private $tab_type;
        
        public function __construct(PDO $db)
        {
        	$this->_db=$db;
        	$tab_att = array();
        	$tab_type = array();
        }

        public function init($obj)
        {
        	$this->nom_table=$obj->getNomTable();

        	$resultat = $this->_db->query("SHOW COLUMNS FROM ".$this->nom_table.";");
            while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
            {
            	$this->tab_att[]=$ligne['Field'];
            	$this->tab_type[] = $ligne['Type'];
            }
            $this->nbr_att = count($this->tab_att);
        }


        public function ajouter($obj)
        {
        	$this->init($obj);
        	$requete="INSERT INTO ".$this->nom_table." VALUES( NULL, ";
        	for($i=1;$i<$this->nbr_att-1;$i++)
        	{
        		$method = 'get'.ucfirst($this->tab_att[$i]);
        		$val=$obj->$method();
        		if($this->tab_type[$i]=='int(11)')
        			$requete = $requete.$val.", ";
        		else 	$requete = $requete.'"'.$val.'", ';
        	}

        	$method = 'get'.ucfirst($this->tab_att[$this->nbr_att - 1]);
        	$val=$obj->$method();
        	if($this->tab_type[$this->nbr_att - 1]=='int(11)')
        			$requete = $requete.$val." )";
        	else 	$requete = $requete.'"'.$val.'" )';
			
			//echo $requete;
			$this->_db->exec($requete);
        }

        public function delete($obj)
        {
        	$this->init($obj);
        	$requete="DELETE FROM ".$this->nom_table." WHERE id = ".$obj->getId();
            $this->_db->exec($requete);
        }
        
        public function getByID($nm_obj,$id)
        {
        	$requete="SELECT * FROM ".$nm_obj." WHERE id = ".$id;
            $resultat=$this->_db->query($requete);
            $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
            $new_elem = NEW $nm_obj();
           	
            $new_elem = $this->hydrate($nm_obj,$ligne);
			
            return($new_elem);
        }
        
        public function getWhere($nm_obj,$condition)
        {
            $list_elem = array();
            
            $requete='SELECT * FROM '.$nm_obj." ".$condition;
            $resultat = $this->_db->query($requete);
            
            while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
            {
                 $elem= new $nm_obj();
                 $elem = $this->hydrate($nm_obj,$ligne);
                $list_elem[] = $elem;
            }
            
            return $list_elem;
        }

        public function getList($nm_obj)
        {
            $list_elem = array();
            
            $resultat = $this->_db->query('SELECT * FROM '.$nm_obj);
            
            while($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
            {
			     $elem= new $nm_obj();
				$elem = $this->hydrate($nm_obj,$ligne);
                $list_elem[] = $elem;
            }
            
            return $list_elem;
        }

        public function getListWhere($nm_obj,$condition)
        {
            $list_elem = array();
            
            $resultat = $this->_db->query('SELECT * FROM '.$nm_obj." ".$condition);
            
            while($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
            {
                 $elem= new $nm_obj();
                $elem = $this->hydrate($nm_obj,$ligne);
                $list_elem[] = $elem;
            }
            
            return $list_elem;
        }
        public function update($obj)
        {   
            $this->init($obj);
        	$requete="UPDATE ".$this->nom_table." SET ";
        	for($i=1;$i<$this->nbr_att-1;$i++)
        	{
        		$method = 'get'.ucfirst($this->tab_att[$i]);
        		$val=$obj->$method();
        		if($this->tab_type[$i]=='int(11)')
        			$requete = $requete.$this->tab_att[$i]." = ".$val.", ";
        		else 	$requete = $requete.$this->tab_att[$i]." = '".$val."', ";
        	}

        	$method = 'get'.ucfirst($this->tab_att[$this->nbr_att - 1]);
        	$val=$obj->$method();
        	if($this->tab_type[$this->nbr_att - 1]=='int(11)')
        			$requete = $requete.$this->tab_att[$this->nbr_att - 1]." = ".$val;
        	else 	$requete = $requete.$this->tab_att[$this->nbr_att - 1]." = '".$val."'";

        	$requete = $requete." WHERE id = ".$obj->getId();

			$this->_db->exec($requete);
        }

        public function hydrate($nm_obj,array $donnees)
		{
			$obj=new $nm_obj();
			foreach ($donnees as $key => $value)
			{
				$method = 'set'.ucfirst($key);
				if (method_exists($obj, $method))
				{
					$obj->$method($value);
				}
			}
			return $obj;
		}
    }