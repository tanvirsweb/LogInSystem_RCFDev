<?php 
class Dbh{
    protected function connect() {
        try{
            //code..for XAMPP
            $username="root";
            $password="";
            $dbh=new PDO('mysql:host=localhost;dbname=ooploginsystem',$username,$password);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error!: ".$e->getMessage()."<br>";
            die();
        }
        
    }
}


?>
<!-- 
On XAMPP run:

create database ooploginsystem;

CREATE TABLE users(
	users_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    users_uid TINYTEXT NOT NULL,
    users_pwd LONGTEXT NOT NULL,
    users_email TINYTEXT NOT NULL
); -->