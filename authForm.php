<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link href="styles.css" media="screen" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet''>
</head>
<body>
<div class="window login">
    <div id="login">
        <h2 >Авторизация</h2>
        <form action="logic/auth.php" method="post">
        <p><label for="user_login">Логин<br>
                <input class="input" id="username" name="username" size="25"
                       type="text" value=""></label></p>
            <p><label for="user_password">Пароль<br>
                    <input class="input" id="password" name="password" size="25"
                           type="password" value=""></label></p>
            <p class="submit"><input class="button" name="login" type= "submit" value="Войти"></p>
            <p class="regtext">Ещё не зарегистрированы? <a href= "registForm.php">Зарегистрируйтесь</a>!</p>
        </form>
    </div>
</div>
</body>
</html>