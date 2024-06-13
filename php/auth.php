<?php

require_once('db.php');

$log = $_POST['log'];
$pass = $_POST['pass'];

if(empty($log) || empty($pass)){
    echo "Заполните поля";
}else {
    $sql = "SELECT * FROM `Person` WHERE `login` = '$log' AND `password` = '$pass';";
    $result =$conn->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){
            echo "Добро пожаловать " . $row['nick'];
            $id = $row['id'];
            echo '<script>window.location.href = "../profil.php";</script>';
        }
    }else{
        echo "Пользователь не найден";
    }
}