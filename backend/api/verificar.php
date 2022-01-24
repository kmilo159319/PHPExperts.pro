<?php
// (A) NO EMAIL/PASSWORD SENT
if (!isset($_POST["username"]) || !isset($_POST["password"])) { exit("NO"); }


// (B) VALIDATE USER
require "config.php";
require "../../backend/librerias/lib-usuario-php";
$USER = new User();
$user = $USER->verify($_POST["username"], $_POST["password"]);

if ($user===false) { exit("NO"); }
 
// (C) GENERATE JWT TOKEN
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