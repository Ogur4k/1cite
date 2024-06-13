<?php

require_once('db.php');

$nickname = $_POST['nick'];
$log = $_POST['log'];
$pass = $_POST['pass'];
$repassword = $_POST['repass'];
$email = $_POST['email'];

if(empty($log) || empty($pass) || empty($repassword) || empty($email)){
    echo "Заполните поля";
} else {
    if ($pass != $repassword){
        echo "Пароли не совпадают";
    }
    else{
        $sql = "INSERT INTO `Person` (nick,email,login,password) VALUES ('$nickname ', '$email', '$log', '$pass')";
        $conn -> query($sql);
        echo '<script>window.location.href = "../profil.html";</script>';
    }
}
    
