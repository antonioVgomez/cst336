<?php

function getDatabaseConnection()
{
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "bfeaad637110cb";
    $password = "c0419d9c";
    $dbname="heroku_303da836d19345a";
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
    
    

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
    
  }

?>