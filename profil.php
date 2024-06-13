<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profil.css">
    <title>Document</title>
</head>
<body>
    <div class="nav" id="home">
        <div class="logo">

        </div>
        <div>
            <a href="index.html">Главная</a>
            <a href="shop.php">Магазин</a>
            <a href="index.html #About">О нас</a>
            <a href="profil.php">Личный кабинет</a>
            <a href="rooms.html">Комнаты</a>
        </div>  
    </div>
    <?php
        /*$server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "default_db";
        
        $conn = mysqli_connect($server, $username, $password, $dbname);*/
        $conn = new mysqli('mysql:host=147.45.251.11; port=3306; dbname=default_db', 'gen_user', '12345z12345z');
        $query = "set names utf8";
        $conn->query($query);
        $query = "SELECT * FROM default_db.Profil";
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()){
            echo '
            <div class="person">
                <div class="photo">
                    <img src="'.$row["photo"].'">
                </div>
                <div class="info">
                    <h2>Профиль</h2><br>
                    <h3 id="name">'.$row["person_name"].'</h3><br>
                    <a>'.$row["email"].'</a>
                <div class="btnPh">
                    <button>Загрузить фото</button>  
                </div>
                <div class="btnPh">
                    <button>Корзина</button>  
                </div>
            </div>
        </div>
            ';
        }
    ?>
    <div class="btnLo">
        <button>Загрузить персонажа</button>
    </div>
    <div class="list">
    <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "default_db";
        
        $conn = mysqli_connect($server, $username, $password, $dbname);
        $query = "set names utf8";
        $conn->query($query);
        $query = "SELECT * FROM default_db.Lists WHERE person_name = 'test'";
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()){
            echo '
            <div class="image">
                <img src="'.$row['chart'].'"><br>
            </div>
            ';
        }
    ?>
    </div>
</body>
</html>