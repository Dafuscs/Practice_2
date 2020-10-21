<?php

require_once 'logic/connect.php';

session_start();

$pdo = new DataBase();
$recipes = $pdo ->SelectRecipes();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
</head>
<body>
<?php echo("" . $_SESSION['username'] . ""); ?>
<br> <a href='logic/exit.php' class=btn-primary'> Выйти <a>
        <br> <a href="loadForm.php">Загрузить рецепт</a>
        <?php foreach ($recipes as $recipe){ ?>
        <table align="center" border="2px">

            <caption>"<?= $recipe['name'] ?>" Автор: <?= $recipe['username'] ?> </caption>

            <tbody align="center">
            <tr>
                <td>
                    <a href="description.php?id=<?= $recipe['id']?>">
                        <img width="650px" src="../images/<?= $recipe['name_image'] ?>" alt="error">
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    Состав: <?php $explodes = explode(',', $recipe['ingredient']);
                    foreach ($explodes as $explode) { ?>
                        <li>
                            <?= $explode; ?>
                        </li>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php if ($_SESSION['username'] == 'admin') { ?>
                    <a href="logic/delete.php?id=<?= $recipe['id']?>">Удалить</a>
                </td>
            </tr>
            <?php } ?>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>
