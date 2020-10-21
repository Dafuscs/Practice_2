<?php

class DataBase
{
    protected $connect;

    //connect to bd
    public function __construct()
    {
        $this->connect = new PDO("mysql:dbname=resmanager;host=localhost:3306", "root", "root");
    }

    //insert row
    public function insertRow($values = [])
    {
        $stmt = $this->connect->prepare('INSERT INTO users (`full_name`, `email`, `username`, `password`) VALUES ( ?, ?, ?, ?)');
        $stmt->execute($values);
    }

    public function query($stmt)
    {
        return $this->connect->query($stmt);
    }
    public function InsertRecipe($values = []){
        $statement = $this->connect->prepare('INSERT INTO recipe (`name`,`ingredient`,`recipe`,`username`,`name_image`) VALUES (?,?,?,?,?)');
        $statement->execute($values);
    }
    public function SelectRecipes(){
        $stmt = $this -> connect ->query('SELECT `name`,`ingredient`,`recipe`,`username`,`name_image`,`id` FROM recipe');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function execute ($sql, $options){
        $stmt = $this->connect->prepare($sql);
        $stmt->execute($options);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function Deleterecipe()
    {
        $statement = $this->connect->prepare('DELETE FROM recipe WHERE name_image = (?)');
        $statement->execute([$_GET['id']]);
    }
}