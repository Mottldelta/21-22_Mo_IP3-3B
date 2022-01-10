<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";

$id = $_GET['idzak'];
$sum = $_GET['suma'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE customers SET currency = currency - $sum WHERE id = $id";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Poplatek byl stržen!";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

$adress = "detail.php?id=$id";
echo "<br>" . "<a href= ". $adress . ">Zpět na detail uživatele!</a>";
?>