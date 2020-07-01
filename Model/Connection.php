<?php
define('DBCON','mysql:host=localhost;dbname=app;charset=utf8');
define('USR','root');
define('PSW','');
class DBConnection{

     private  $db;
    
    function __construct(){
            
try{
        $this->db = new PDO(DBCON, USR,PSW);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
    }

        $db = new DBConnection();