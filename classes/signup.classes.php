<?php
include("dbh.classes.php");
class Signup extends Dbh{

    // $dbh=new PDO('mysql:host=localhost;dbname=ooploginsystem',$username,$password);
    // $stmt= $dbh->prepare('SELECT users_uid FROM users WHERE users_uid=? OR users_email=?;');
    // $stmt->execute( array($uid,$email) );
    
    protected function checkUser($uid,$email){
        $stmt=$this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid=? OR users_email=?;');
        if( !$stmt->execute( array($uid,$email) ) ){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount()>0){
            return false;
            // username OR email already taken
        }
        else{
            return true;
        }        
    }

    protected function setUser($uid, $pwd, $email){
        $stmt=$this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES(?, ?, ?);');

        $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);

        if( !$stmt->execute( array($uid, $hashedPwd, $email) ) ){
            $stmt=null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt=null;
    }

}
?>