<?php


$hostname='127.0.0.1:3307';
$username='root';
$password='desarrollo123';
$dbname='phpexperts';

$conectar = mysqli_connect($hostname,$username,$password,$dbname);


if(!$conectar){echo "'se encontro un error al intentar conectar con el servidor";};

?>


