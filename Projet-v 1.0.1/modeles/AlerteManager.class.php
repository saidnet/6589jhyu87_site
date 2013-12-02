<?php
    class newsManager
    {
        private $_db; // Instance de PDO
        
        public function __construct($db)
        {
            $this->setDb($db);
        }
        
        public function add( news $info)
        {
            $q = $this->_db->prepare('INSERT INTO  news SET titre=:titre , description = :description');
            

		    $q->bindValue(':titre', $info->getTitre());
            $q->bindValue(':description', $info->getDescription());
            $q->execute();
        }
        
        public function delete( news $info)
        {
            $this->_db->exec('DELETE FROM  news WHERE id_galerie = '.$info->getId_news());
        }
        
        public function get($id)
        {
            $id = (int) $id;
            
            $q = $this->_db->query('SELECT * FROM  news WHERE id_galerie = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            
			$info= new  news();
			$info->hydrate($donnees);
			
            return($info);
        }
        
        public function getList()
        {
            $newsS = array();
            
            $q = $this->_db->query('SELECT * FROM  news');
            
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
			     $c= new  news();
				$c->hydrate($donnees);
                $newsS[] = $c;
            }
            
            return $newsS;
        }
        
        public function update( news $info)
        {
            $q = $this->_db->prepare('UPDATE  news SET  SET titre=:titre , description = :description where id_galerie= :id');
            
			$q->bindValue(':id', $info->getId_news(), PDO::PARAM_INT);
		    $q->bindValue(':titre', $info->getTitre());
            $q->bindValue(':description', $info->getDescription());
            
            $q->execute();
        }
        public function getLastId()
		{
			$q = $this->_db->query('SELECT Max(id_news) as last FROM  news');
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            return $donnees['last'];
		}
		
        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
    }
?>