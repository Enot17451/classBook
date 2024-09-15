<?php
include_once "classes.php";

$connect = new PDO("mysql:host=127.0.0.1;port=3306;dbname=school", "root", "");

function getAllClasses()
{
    global $connect;
    return $connect->query("SELECT * FROM class")->fetchAll(PDO::FETCH_CLASS,"Klass");
}

function getAllClassRoomPlaces($grade,$letter)
{
    global $connect;
    $class_id = $connect ->query("select id from class where grade = '$grade' and letter = '$letter'")->fetchAll(PDO::FETCH_ASSOC)[0];
    return $connect->query("SELECT * FROM places where class_id = {$class_id['id']}")->fetchAll(PDO::FETCH_CLASS,"Place");
}

