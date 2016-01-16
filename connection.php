<?php

class Connection{
    protected $host="localhost";
    protected $dbname="yemek2";
    protected $user="root";
    protected $pass="asdf";
    protected $DBH;

    function __construct(){

        try{
            $this->DBH=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
            $this->DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    public function closeConnection(){
        $this->DBH=null;
    }
}

