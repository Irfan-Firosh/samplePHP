<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbms = "practicePHP";

$conn = new mysqli($servername, $username, $password, $dbms);

$name = "test";
$mail = "john@doe";
$number = "+971";
$fpass = "fpass";

$mail = "motish@gmail.com";

$sql = "SELECT email FROM credentials WHERE email='$mail'";

$result = $conn->query($sql);
print $result->num_rows;


?>