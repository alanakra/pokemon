<?php
 class PersonnageManager{
  private $db;

    public function __construct($db){
        $this->db=$db;
    }

    public function setDb($db){
        $this->db = $db;
    }


    public function getAllPersonnage(){
        $requete = "SELECT * FROM personnages ORDER BY name"; 
        $stmt = $this->db->query($requete);

        while ($donnees = $stmt->fetch(PDO::FETCH_ASSOC)){

            $personnages[] = new Personnage($donnees);
        }

        return $personnages;

    }

    public function getOnePersonnageById($id){
     $requete = "SELECT * FROM personnages WHERE id={$id}";
     $select = $this->db->query($requete);
     $personnage=$select->fetch(PDO::FETCH_ASSOC);
     $perso = new Personnage($personnage);
     return $perso;
    }

    public function createPersonnage(Personnage $perso){
    $requete = "INSERT INTO personnages VALUES (NULL, '" . $perso->getName() ."'," . $perso -> getPv() . "," . $perso -> getAtk() . ");";
        $stmt = $this->db->query($requete);
     echo $requete;
    }

    public function updatePersonnage(Personnage $perso){
        $requete = $this->db->prepare("UPDATE personnages SET pv =:pv, atk=:atk WHERE id=:id");
        $requete->bindValue(':pv', $perso->getPv());
        $requete->bindValue(':atk', $perso->getAtk());
        $requete->bindValue(':id', $perso->getId());
        $requete->execute();
    }

    public function deletePersonnage($id){
     $requete = "DELETE FROM personnages WHERE id={$id}";
     $stmt = $this->db->query($requete);
     $personnage = $stmt->fetch(PDO::FETCH_ASSOC);
     $this->db->exec($requete);
    }
 }


?>



