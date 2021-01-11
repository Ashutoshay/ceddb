<?php
session_start(); 
//DataBase Connection Start here
// $connect = new PDO("mysql:host=localhost;dbname=myDB","root","");
$connect = new mysqli("localhost","root","","cedcab");

// Check connection
if ($connect -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connect -> connect_error;
  exit();
}



?>