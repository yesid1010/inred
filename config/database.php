<?php

$server   = "localhost";
$username = "root"; //id14010795_inredd
$password = ""; //hJ@/7rv-W\AW!=3<
$database = "inred";//id14010795_inred


$mysqli = new mysqli($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>