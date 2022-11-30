<?php


include "Model/User.php";
include "Controller/Users.php";
session_start();

if((isset($_POST['FirstName']) && !empty($_POST['FirstName'])) && (isset($_POST['LastName']) && !empty($_POST['LastName'])) && (isset($_POST['Email']) && !empty($_POST['Email'])) && (isset($_POST['Phone']) && !empty($_POST['Phone']))){ 
    $img = NULL;
    if(($_FILES['photo']['size']>0)){
        $img = (file_get_contents($_FILES['photo']['tmp_name']));
    }
    
    if(isset($_POST['Oldpwd']) && !empty($_POST['Oldpwd']) && (isset($_POST['Newpwd'])) && !empty($_POST['Newpwd']) && (isset($_POST['Newpwdconfrim'])) && !empty($_POST['Newpwdconfrim']) && ($_POST['Newpwdconfrim']) == $_POST['Newpwd'] && password_verify($_POST['Oldpwd'],$_SESSION['Password'])){
        $User = new user($_POST['FirstName'],$_POST['LastName'],$_POST['Email'],$_POST['Phone'],$_POST['Newpwd']);
            $User_C = new UserC();
            $User_C->UpdateUser($User,$img);
        
    }else if(empty($_POST['Oldpwd']) && empty($_POST['Newpwd']) && empty($_POST['Newpwdconfrim'])){
    $User = new user($_POST['FirstName'],$_POST['LastName'],$_POST['Email'],$_POST['Phone'],$_POST['Newpwd']);
            $User_C = new UserC();
            $User_C->UpdateUser($User,$img);

    }
    header('Location:Loggedin_Pages/Modify.php');
    
      
}else{
    echo "<script> alert('Something Missing')</script>";
    header( "refresh:0; url=Loggedin_Pages/Modify.php"); 
   # header('Location:Loggedin_Pages/Modify.php');
}


?>