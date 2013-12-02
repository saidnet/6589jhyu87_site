<?php
    class utilisateurManager
    {
        private $_db; // Instance de PDO
        
        public function __construct($db)
        {
            $this->setDb($db);
        }
        
        public function add(utilisateur $F,$clef)
        {
			//$pass2=$this->CryptVernam($F->getPass2(), $clef);
            $q = $this->_db->prepare('INSERT INTO utilisateur SET login = :login, pass1 = :pass1,pass2 = :pass2,id_ques=:id_ques,id_type=:id_type,email=:email');
            
            $q->bindValue(':login', $F->getLogin());
            $q->bindValue(':pass1', $F->getPass1());
			$q->bindValue(':pass2', $this->CryptVernam($F->getPass2(), $clef));
			$q->bindValue(':id_ques', $F->getId_ques());
			$q->bindValue(':id_type', $F->getId_type());
			$q->bindValue(':email', $F->getEmail());
    
			
            $q->execute();
        }
        
		function CryptVernam($MDP, $Clef){
								
			$LClef = strlen($Clef);
			$LMDP = strlen($MDP);
								
			if ($LClef < $LMDP){
						
				$Clef = str_pad($Clef, $LMDP, $Clef, STR_PAD_RIGHT);
			
			}
						
			elseif ($LClef > $LMDP){

				$diff = $LClef - $LMDP;
				$_Clef = substr($Clef, 0, -$diff);

			}
					
			return $MDP ^ $Clef; // La fonction envoie le texte crypté
					
		}
        public function delete(utilisateur $c)
        {
            $this->_db->exec('DELETE FROM utilisateur WHERE Id_utilisateur = '.$c->getId_utilisateur());
        }
        
        public function get($id)
        {
            $id = (int) $id;
            
            $q = $this->_db->query('SELECT * FROM utilisateur WHERE Id_utilisateur = '.$id);
            $donnees = $q->fetch(PDO::FETCH_ASSOC);
            
			$c= new utilisateur();
			$c->hydrate($donnees);
			
            return($c);
        }
        
        public function getList()
        {
            $utilisateurS = array();
            
            $q = $this->_db->query('SELECT * FROM utilisateur');
            
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
			     $F= new utilisateur();
				 $F->hydrate($donnees);
                $utilisateurS[] = $F;
            }
            
            return $utilisateurS;
        }
        
        public function update(utilisateur $c)
        {
            $q = $this->_db->prepare('UPDATE utilisateur SET login = :login, pass1 = :pass1,pass2 = :pass2,id_ques=:id_ques,id_type=:id_type,email=:email WHERE Id_utilisateur =:id ');
            
            $q->bindValue(':login', $F->getLogin());
            $q->bindValue(':pass1', $F->getPass1());
			$q->bindValue(':pass2', $F->getPass2());
			$q->bindValue(':id_ques', $F->getId_ques());
			$q->bindValue(':id_type', $F->getId_type());
			$q->bindValue(':email', $F->getEmail());
			$q->bindValue(':id', $c->getId_utilisateur(), PDO::PARAM_INT);
           
		   $q->execute();
        }
        
        
        
        
        public function setDb(PDO $db)
        {
            $this->_db = $db;
        }
		public function vrif(array $login)
        {
			$log=$login['user'];
			$mot=$login['pass'];
		    $q=$this->_db->query("select pass1 from utilisateur WHERE login='".$log."'");
			$rep=$q->fetch(PDO::FETCH_ASSOC);
			if(!isset($rep['pass1']))	return 'Le pseudo n existe pas';
			if($rep['pass1']==md5($mot))	return 'ok';
			else	return 'mot de pass incorect';
        }
		
		public function anti_injection( $user, $pass ) {
			# on regarde s'il n'y a pas de commandes SQL
				$banlist = array (
					"insert", "select", "update", "delete", "distinct", "having", "truncate",
					"replace", "handler", "like", "procedure", "limit", "order by", "group by",
					"INSERT", "SELECT", "UPDATE", "DELETE", "DISTINCT", "HAVING", "TRUNCATE",
					"REPLACE", "HANDLER", "LIKE", "PROCEDURE", "LIMIT", "ORDER BY", "GROUP BY" 
					);
				if ( eregi ( "[a-zA-Z0-9]+", $user ) ) {
					$user = trim ( str_replace ( $banlist, '', $user ));
					//$user = $user;
				} else {
					$user = NULL;
				}

				# on regarde si le mot de passe est bien alphanumérique
				# on utilise strtolower() pour faire marcher str_ireplace()
				if ( eregi ( "[a-zA-Z0-9]+", $pass ) ) {
					$pass = trim ( str_replace ( $banlist, '', $pass  ) );
					//$pass = $pass;
				} else {
					$pass = NULL;
				}

				# on fait un tableau
				# s'il y a des charactères illégaux, on arrête tout
				$array = array ( 'user' => $user, 'pass' => $pass );
				if ( in_array ( NULL, $array ) ) {
					die ( 'ERREUR : Injection SQL détectée' );
				} else {
					return $array;
				}
			}
		/*
		public function vrif($log,$mot)
        {
		    $q=$this->_db->query("select 1 from utilisateur where exists ( SELECT * FROM utilisateur WHERE login='".$log."' AND pass='".$mot."')");
			$rep=$q->fetch(PDO::FETCH_ASSOC);
			if($rep['1']==1)	return true;
			else	return false;
        }
		/*
			public function vrif($log,$mot)
        {
			$q = $this->_db->prepare('select 1 from utilisateur where exists ( SELECT * FROM utilisateur WHERE login=:log AND pass=:mot)');
            $q->bindValue(':log', $log);
            $q->bindValue(':mot', $mot);
           
		    $q->execute();
			$rep=$q->fetch(PDO::FETCH_ASSOC);
			if($rep['1']==1)	return true;
			else	return false;
        }
		//*/
    }
