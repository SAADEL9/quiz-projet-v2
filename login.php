<?php

if($_SERVER["REQUEST_METHOD"]==="POST")
{
try{$pdo = new PDO("mysql:host=localhost;dbname=quiz", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$email=$_POST["email"];
$password=$_POST["password"];




}
catch(PDOException $e)
{echo "ERREUR :".$e->getMessage();}



}

?>