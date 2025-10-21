<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";
$conn = newqli($servername, $username, $passoword, $dbname);
if ($conn -> connect_error){
    die("erro na conexão:" . $conn -> connect_error);
}
?>