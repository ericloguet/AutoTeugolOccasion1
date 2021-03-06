<?php

class ThemeBD extends Theme {

    private $_db; //recevoir la valeur de $cnx lors de la connexion à la BD dans index
    private $_data = array();
    private $_resultset;

    public function __construct($cnx){ //$cnx envoyé depuis la page qui instancie
        $this->_db = $cnx;
    }

    public function getTheme(){
        $query = "select * from ti_marque order by id_marque";
        $_resultset = $this->_db->prepare($query);
        $_resultset->execute();

        while($d = $_resultset->fetch()){
            $_data[] = new Theme($d);
        }
        //var_dump($_data);
        return $_data;
    }
}