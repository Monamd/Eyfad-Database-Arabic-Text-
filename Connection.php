<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


 //localhost because the server is local, if not, the servername will change
 //username and password which I set them, must be the same
$servername = "sql201.epizy.com";
$username = "epiz_26190033";
$password = "3Yibo4YjUI";


// Create connection
$conn = new mysqli($servername, $username, $password, $DBname);

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO("mysql:host=$servername;dbname=epiz_26190033_test", $username, $password,$opt);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
?>




