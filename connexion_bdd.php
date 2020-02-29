<?php
$servername = "localhost";
try {
    $conn = new PDO("mysql:host=$servername;dbname=edt20", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "".'<br/>';
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}