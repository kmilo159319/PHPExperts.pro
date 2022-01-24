<?php
// (A) NO EMAIL/PASSWORD SENT
if (!isset($_POST["name"]) || !isset($_POST["password"]) || !isset($_POST["mail"]) || !isset($_POST["username"])) { exit("NO"); }

//VALIDATE USER
require "config.php";
require "../../backend/librerias/lib-usuario-php";
$USER = new User();
$user = $USER->save($_POST["id"],$_POST["name"],$_POST["mail"],$_POST["username"], $_POST["password"]);
if ($user===false) { exit("NO"); }


?>