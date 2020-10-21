<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка</title>
</head>
<body>

<form action="mainpage.php" method="post" enctype="multipart/form-data">
    <button>Главная</button>
</form>

<form action="logic/load.php"  method="post" enctype="multipart/form-data">
    <p><label for="name_recipe">Наименование рецепта<br>
            <input class="input" id="name_recipe" name="name_recipe" size="32"  type="text" value=""></label></p>
    <p><label for="name_recipe">Ингредиенты(через запятую)<br>
            <textarea cols="100px" rows="5px" class="none" id="ingredient" name="ingredient"></textarea>
    <p><label for="name_recipe">Рецепт<br>
            <textarea cols="100px" rows="5px" class="none" id="recipe" name="recipe"></textarea>
            <form action="logic/load.php"  method="post" enctype="multipart/form-data">
                <br><input type="file" name="images">
                <input type="submit"><br>
            </form>

</body>
</html>