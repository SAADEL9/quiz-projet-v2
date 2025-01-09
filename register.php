<?php

if($_SERVER["REQUEST_METHOD"]==="POST")
{
try{
$pdo = new PDO("mysql:host=localhost;dbname=quiz", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stm=$pdo->prepare("INSERT INTO form_table (full_name,email,password)VALUES (?,?,?)");

$data=array($_POST["full_name"],$_POST["email"],$_POST["password"]);
$stm->execute($data);




}
catch(PDOException $e)
{echo "ERREUR :".$e->getMessage();}



}

?>