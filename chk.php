<?php

session_start();

$admins = array('Karem','Mohammed','Ahmed','Fadel','Aisha');

$pass = 123;

if ($_SERVER['REQUEST_METHOD'] == 'POST')

{

    $user = $_POST['username'];

    if(in_array($user , $admins) && $_POST['password'] == $pass){

        echo 'Admin found <br><br>';

        $_SESSION['user'] = $user;

        
    
        echo '<br>Welcome '. $_SESSION['user'] . ' you will be redirected shortly';

        header('REFRESH:2;URL=control.php');

    }else{

        echo 'Erorr: input not valid';


    }

   
}else{

    echo 'Erorr: none valid request.';


}


?>
