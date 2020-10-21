<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link href="styles.css" media="screen" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet''>
</head>
<body>
        <div class="window register">
            <div id="login">
                <h1 align="center">Регистрация</h1>
            <form action="logic/registration.php" id="registForm" method="post" name="registForm">
                <p><label for="name">Полное имя<br>
                        <input align="center" class="input" id="name" name="name" size="30"  type="text" value=""></label></p>
                <p><label for="email">email<br>
                        <input class="input" id="email" name="email" size="30" type="email" value=""></label></p>
                <p><label for="login">Имя пользователя<br>
                        <input class="input" id="login" name="login" size="25" type="text" value=""></label></p>
                <p><label for="password">Пароль<br>
                        <input class="input" id="password" name="password" size="25"   type="password" value=""></label></p>
                <p class="submit"><input class="button" type="submit" value="Зарегистрироваться"></p>
                <p class="regtext">Уже зарегистрированы? <a href= "authForm.php">Войдите</a>!</p>
            </form>
            </div>
        </div>
    </body>
</html>