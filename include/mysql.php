<?php


$connection = mysqli_connect("localhost", "root", "", "tanarok");
if (!$connection) {
    /*logMessage("Error", "Failed to connect to MySQL:" . mysqli_connect_error());
    errorPage();*/
    //die(mysqli_connect_error()); //ha a die-t meghívom akkor megáll az oldal betőltése
}
$connection->query("SET NAMES utf8");
$connection->query("SET CHARACTER SET utf8");
$connection->set_charset('utf8');
$connection->set_charset('utf-8');
?>
