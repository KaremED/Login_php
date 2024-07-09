<?php 

    session_start();    

    if($_SESSION['user']){

        echo 'Welcome '. $_SESSION['user'] . ' Your Admin';

        echo '<pre>';
        print_r($_SESSION);  
        echo '</pre>';

    }else{

        echo 'None Valid Authentication'. $_SESSION['user'] . '';

    }
