<?php

require_once(__DIR__."/../PDO.php");


if (isset($_POST["jour"])&& !empty($_POST['jour'])){
    $dateTime = $_POST['jour'] . " " . $_POST['heure'];
    $sql = 'UPDATE appointments SET dateHour=? WHERE id=?';
    $result = $pdo->prepare($sql);
    $result->execute(array($dateTime, $_GET['id']));
}