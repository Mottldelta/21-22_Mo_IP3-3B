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
$id = $_GET['id'];
$sql = "SELECT id, name, email, country, currency FROM customers WHERE id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>" .$row["name"] . "</b>" . "<br>" . $row["email"] . "<br>" . $row["country"] . "<br>" . $row["currency"];
    }
} else {
    echo "0 results";
}
$conn->close();

$adress = "index.php";
echo "<br>" . "<a href= ". $adress . ">Zpět na hlavní stránku!</a>";
?>