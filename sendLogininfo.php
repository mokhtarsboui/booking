<?php

include "Controller/Users.php";

if((isset($_POST['Username']) && !empty($_POST['Username'])) && (isset($_POST['Password']) && !empty($_POST['Password']))){
    $User_C = new UserC();
    $Result = $User_C->Login($_POST['Username'],$_POST['Password']);
    if($Result == true){
        
        if($_SESSION['type'] == 1){
            header('Location:admin/Customers.php');
        }else{
        header('Location:Loggedin_Pages/main_loggedin.php');
        }
    }else{
    echo "<script> alert('Wrong Password Or UserName')</script>";
    header( "refresh:0; url=login.php"); 
    }
}else{
    header('Location:Login.php');

    
}



?>