<?php
/**
 * This class allows us to access the database where we will be able to store
 * the information of the players and make a record of their results.
 */
    class Db {
        private $server="localhost";
        private $user="root";
        private $password="";
        private $con;

        public function __construct(){
            try {
                $this -> con = new PDO("mysql:host=$this->server;dbname=game", $this -> user, $this -> password);
                $this -> con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                return "connection failure".$e;
            }
        }

        public function execute($sql){                 //Insert/delete/update
            $this -> con -> exec($sql);
            return $this -> con -> lastInsertId();
        }
    }
?>