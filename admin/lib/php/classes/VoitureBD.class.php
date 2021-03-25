<?php

class VoitureBD extends Voiture {

    private $_db; //recevoir la valeur de $cnx lors de la connexion à la BD dans index
    private $_data = array();
    private $_resultset;

    public function __construct($cnx){ //$cnx envoyé depuis la page qui instancie
        $this->_db = $cnx;
    }

    public function getAllVoiture(){
        $query = "select * from vue_voitures_marque order by id_voiture";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while($d = $_resultset->fetch()){
            $_data[] = new Voiture($d);
        }
        //var_dump($_data);
        return $_data;
    }

    public function getVoituresByMq($id_marque){
        try{
            $query="select * from vue_voitures_marque where id_marque =:id_marque";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':id_marque',$id_marque);
            $_resultset->execute();

            while($d = $_resultset->fetch()){
                $_data[]= new Voiture($d);
            }
            return $_data;
        }catch (PDOException $e){
            print "Echec de la requête ".$e->getMessage();
        }
    }

}
