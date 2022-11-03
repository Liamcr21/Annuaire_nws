<?php

class bdd
    {
        public $connection;

        public function __construct()
        {
            $this->db_connect();
        }
       
        public function db_connect()
        {
            $this->connection = mysqli_connect('localhost','root','','annuaire_nws');
            if(mysqli_connect_error())
            {
                die(" Connexion échoué ");
            }
        }

        public function check($a)
        {
            $return = mysqli_real_escape_string($this->connection,$a);
            return $return;
        }


    }

?>