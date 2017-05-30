<?php
    class db{
       private $db_hostname="localhost";
	private $db_database="dic";
	private $db_username="root";
	private $db_password="";
    
    public function connect (){
        $mysql_connect_str ="mysql:host=$this->db_hostname;dbname=$this->db_database";
        $dbConnection =new PDO($mysql_connect_str,$this->db_username,$this->db_password);
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $dbConnection;
    }
    
    
    
    }



?>