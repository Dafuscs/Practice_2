<?php
require_once 'connect.php';

session_start();

$pdo = new DataBase();


if (!file_exists("../images"))
{
    mkdir("../images", 0777,true);
}

$filename = date_create_from_format('U.u' , microtime(true))->format('Y_m_d_H_i_s_u');
$array = explode(".", $_FILES['images']['name']);
$array = array_pop($array);
$filename = $filename . "." . $array;

move_uploaded_file($_FILES['images']['tmp_name'], "../images/$filename");

$name_recipe = $_POST['name_recipe'];
$ingredient = $_POST['ingredient'];
$recipe = $_POST['recipe'];


$pdo -> InsertRecipe([$name_recipe,$ingredient,$recipe,$_SESSION['username'],$filename]);



header('Location: ../mainpage.php');