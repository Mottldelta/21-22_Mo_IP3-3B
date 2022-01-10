<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";

$id = $_GET['idzak'];
$sum = $_GET['suma'];
$task = $_GET['ukon'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($task == 1) {
    $sql = "UPDATE customers SET currency = currency - $sum WHERE id = $id";
    } elseif ($task == 2) {
        $sql = "UPDATE customers SET currency = currency + $sum WHERE id = $id";
    } elseif ($task == 3) {
        $sql = "DELETE FROM customers WHERE id = $id"; }
    // use exec() because no results are returned
    $conn->exec($sql);
        if ($task == 1) {
            echo "Poplatek byl stržen!";
        } elseif ($task == 2) {
            echo "Úspory byly započteny!";
        } elseif ($task == 3) {
            echo "Účet byl smazán!";; }
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

        if($task != 3) {
$adress = "detail.php?id=$id";
echo "<br>" . "<a href= ". $adress . ">Zpět na detail uživatele!</a>";
        } else {
            $adress = "index.php";
            echo "<br>" . "<a href= ". $adress . ">Zpět na hlavní stránku!</a>";

}
?>