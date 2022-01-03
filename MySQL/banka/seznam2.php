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
$country = $_GET['country'];
$sql = "SELECT id, name, currency FROM customers WHERE country = '$country'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"] . " tento zákazník má na účtě: " . $row["currency"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

$adress = "index.php";
echo "<br>" . "<a href= ". $adress . ">Zpět na hlavní stránku!</a>";
?>