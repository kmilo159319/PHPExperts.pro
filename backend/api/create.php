<?php
// (A) NO EMAIL/PASSWORD SENT
if (!isset($_POST["createname"]) || !isset($_POST["createpassword"])) { exit("NO"); }

// (B) VALIDATE USER
require "config.php";
require "../../backend/librerias/lib-usuario-php";
$USER = new User();
$user = $USER->save($id=null,$_POST["createname"],$_POST["createmail"],$_POST["createusername"], $_POST["createpassword"]);
if ($user===false) { exit("NO"); }
 
// GENERATE JWT TOKEN
require "vendor/autoload.php";
use Firebase\JWT\JWT;
$now = strtotime("now");
echo JWT::encode([
  "iat" => $now, // ISSUED AT - TIME WHEN TOKEN IS GENERATED
  "nbf" => $now, // NOT BEFORE - WHEN THIS TOKEN IS CONSIDERED VALID
  "exp" => $now + 3600, // EXPIRY - 1 HR (3600 SECS) FROM NOW IN THIS EXAMPLE
  "jti" => base64_encode(random_bytes(16)), // JSON TOKEN ID
  "iss" => JWT_ISSUER, // ISSUER
  "aud" => JWT_AUD, // AUDIENCE
  // WHATEVER USER DATA YOU WANT TO ADD
  "data" => [
    "id" => $user["id"],
    "name" => $user["username"],
    "email" => $user["mail"]
  ],
], JWT_SECRET, JWT_ALGO);


?>