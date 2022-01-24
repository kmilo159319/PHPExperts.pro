<?php
// (A) NO EMAIL/PASSWORD SENT
if (!isset($_POST["user"])) { exit("NO"); }


// (B) DECODIFICO EL TOKEN
require "../../backend/api/config.php";
require "../../backend/api/vendor/autoload.php";
use Firebase\JWT\JWT;
try { $jwt = JWT::decode($_POST["user"], JWT_SECRET, [JWT_ALGO]); }
catch (Exception $e) { exit("NO"); }
 
// VALIDO EL USUARIO EN LA BASE DE DATOS POR SEGURIDAD Y VERIFICO SI EL TOKEN YA CADUCADO
$now = strtotime("now");
if ($jwt->iss !== JWT_ISSUER ||
    $jwt->nbf > $now || $jwt->exp < $now) { header('Location: /homepage.html'); }

    $array = json_decode(json_encode($jwt), true);
    $id_usuario =  ($array['data']['id']);


// (B) VALIDATE USER
require "../../backend/librerias/lib-usuario-php";
$USER = new User();
$user = $USER->search($id_usuario);
if ($user===false) { exit("NO"); }

echo json_encode($user);




    

// (B) VALIDATE USER
/*require "config.php";
require "../../backend/librerias/lib-usuario-php";
$USER = new User();
$user = $USER->save($_POST["createname"],$_POST["createmail"],$_POST["createusername"], $_POST["createpassword"]);
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
*/

?>