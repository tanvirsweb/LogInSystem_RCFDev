<?php
    session_start();
    session_unset();//unset all session variables
    session_destroy();//destroy all session variables
    header('location: ../index.php?error=none');
?>