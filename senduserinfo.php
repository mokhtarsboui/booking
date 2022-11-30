<?php
include "Model/User.php";
include "Controller/Users.php";

if((isset($_POST['Firstname']) && !empty($_POST['Firstname'])) && (isset($_POST['Lastname']) && !empty($_POST['Lastname'])) && (isset($_POST['Email']) && !empty($_POST['Email'])) && (isset($_POST['phone']) && !empty($_POST['phone'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) && $_POST['confirm_password']== $_POST['password'] ){
    $img = NULL;
    if(($_FILES['photo']['size']>0)){
        $img = (file_get_contents($_FILES['photo']['tmp_name']));
    }
    $User = new user($_POST['Firstname'],$_POST['Lastname'],$_POST['Email'],$_POST['phone'],$_POST['password']);
    $User_C = new UserC();
    $User_C->AddUser($User,$img);
    header('Location:login.php');
}else{
    header('Location:Register.php');
}
?>