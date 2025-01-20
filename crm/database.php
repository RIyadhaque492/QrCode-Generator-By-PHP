<?php
session_start();
$qr_file_path="URL"; 
     define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "qr");

$con=  mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>