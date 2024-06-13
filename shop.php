<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/shop.css">
    <title>Document</title>
</head>
<body>
    <div class="nav" id="home">
        <div class="logo">

        </div>
        <div>
            <a href="index.html">Главная</a>
            <a href="shop.html">Магазин</a>
            <a href="index.html #About">О нас</a>
            <a href="per.html">Регистарция</a>
            <a href="per.html">Авторизация</a>
        </div>  
    </div>
    <div class="shop">
        <div class="search">
            <form>
                <input type="text" placeholder="Найти" name="search">
                <button type="submit">&#128269;</button>   
            </form>
        </div>
        <div class="elements">
                <?php
                $server = "localhost";
                $username = "root";
                $password = "";
                $dbname = "default_db";
                
                $conn = mysqli_connect($server, $username, $password, $dbname);
                $query = "set names utf8";
                $conn->query($query);
                $query = "SELECT * FROM default_db.Product";
                $result = $conn->query($query);
                while($row = $result->fetch_assoc()){
                    echo '
                        <div class="element">
                            <div class="image">
                                <img src="'.$row["image"].'"><br>
                            </div>
                            <div class="tx">
                            <a><b>Название: </b>'.$row["name"].'</a><br>
                            <a><b>Цена: </b>'.$row["count"].' р.</a>
                            </div>
                        </div>
                    ';
                }
                ?>
        </div>
    </div>
</body>
</html>