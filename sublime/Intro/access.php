<?php
require_once("handler.php");

$uname=$_POST["username"];
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];

$object = new intro();
$object->save($uname,$fname,$lname,$email,$password);














?>