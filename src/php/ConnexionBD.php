<?php
    $servername = 'localhost';
    $port = '3308';
    $username = 'root';
    $password = '';
    $dbname = 'autisticproud';

    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", "$username", "$password");
?>