<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, currency FROM customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $adress = "detail.php?id=$id";
        $link = $row["name"];
        echo "<a href=".$adress.">$link</a>" . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

$adress = "index.php";
echo "<br>" . "<a href= ". $adress . ">Zpět na hlavní stránku!</a>";
?>