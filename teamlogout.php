<?php 
        session_start();
        
        //unset all of the session variables
        $_SESSION = array();

        //destroy the session
        session_destroy();

        //Redirect to the login page or any other desired destination
        header("Location: index.html");
        exit();


?>