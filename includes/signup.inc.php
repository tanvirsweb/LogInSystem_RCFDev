<?php 
if(isset($_POST['submit'])){
    //Grabing the data
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];
    $pwdRepeat=$_POST['pwdrepeat'];
    $email=$_POST['email'];
    // Instantiate SignupContr class    
    include "../classes/signup-contr.classes.php";
    $signup=new SignupContr($uid, $pwd, $pwdRepeat, $email);
    
    //Running error handlers and user signup
    $signup->signupUser();

    //Going back to front page
    header("location:../index.php?error=none");
}
?>