<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbms = "practicePHP";

$conn = new mysqli($servername, $username, $password, $dbms);

$sql = "ALTER TABLE credentials MODIFY COLUMN `password` VARCHAR(256)";

$conn->query($sql);


?>