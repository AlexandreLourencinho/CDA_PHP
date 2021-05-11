<?php
$host="127.0.0.1:3306";
$dbname="record";
$charset="UTF8";
$user="root";
$mdp="1234";
$dsn="mysql:host=$host;dbname=$dbname;charset=$charset";
try{
    $db= new PDO($dsn,$user,$mdp);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "hello dB!";
}
catch (Exception $e){
    echo "Erreur : ".$e->getMessage().'<br>';
    echo "Numéro : ".$e->getCode().'<br>';
    die('fin du script');
}

var_dump($db);
















?>