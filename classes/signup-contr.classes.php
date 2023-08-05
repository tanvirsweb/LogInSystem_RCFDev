<?php
include("signup.classes.php");

class SignupContr extends Signup{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid,$pwd,$pwdRepeat,$email){
        $this->uid=$uid;
        $this->pwd=$pwd;
        $this->pwdRepeat=$pwdRepeat;
        $this->email=$email;
    }
    
    public function signupUser(){
        if($this->nonEmptyInput()==false){
            //echo 'Empty Input!!';
            header("location:../index.php?error=emptyinput");
            exit();
        }
        if($this->validUid()==false){
            //echo "Invalid Uid!!";
            header("location:../index.php?error=username");
            exit();
        }
        if($this->validEmail()==false){
            //echo "Invalid Email!!";
            header("location:../index.php?error=email");
            exit();
        }
        if($this->pwdMatch()==false){
            //echo "Password didn't match!!";
            header("location:../index.php?error=passwordmatch");
            exit();
        }
        if($this->uidNotTakenCheck()==false){
            //echo "Username or Email taken!!";
            header("location:../index.php?error=useroremailtaken");
            exit();
        }
        $this->setUser($this->uid, $this->pwd, $this->email); 

    }

    private function nonEmptyInput(){
        if( empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) ||  empty($this->email) )
            return false;
        else
            return true;     
    }

    private function validUid(){
        $result;
        if( !preg_match("/^[a-zA-Z0-9]*$/",$this->uid) )
            return false;
        else
            return true;        
    }

    private function validEmail(){        
        if( !filter_var($this->email,FILTER_VALIDATE_EMAIL) )
            return false;
        else
            return true;        
    }

    private function pwdMatch(){
        if( $this->pwd == $this->pwdRepeat ) 
            return true;        
        else 
            return false;        
    }

    private function uidNotTakenCheck(){        
        // from signup.classes.php file's class: current class extended that class              
        return $this->checkUser($this->uid,$this->email) ;
    }

    
}

?>