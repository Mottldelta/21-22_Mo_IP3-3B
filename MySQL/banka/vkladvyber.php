<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";

$money = $_POST['money'];
$task = $_POST['task'];
$id = $_POST['id'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($task == 1) {
    $sql = "UPDATE customers SET currency = currency - $money WHERE id = $id";
    }
    if($task == 2) {
        $sql = "UPDATE customers SET currency = currency + $money WHERE id = $id";
    }
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Úloha provedena!";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
