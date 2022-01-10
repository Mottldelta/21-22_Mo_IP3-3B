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
        echo "<b>" .$row["name"] . "</b>" . "<br>" . $row["email"] . "<br>" . $row["country"] . "<br> Zůstatek na účtu: " . $row["currency"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


$adress1 = "edit.php?idzak=$id&suma=";
echo "<br>" . "<a href= ". $adress1 . ">Strhnout poplatek za kreditní kartu</a><br>";
$adress2 = "edit.php?idzak=$id&suma=";
echo "<br>" . "<a href= ". $adress2 . ">Strhnout poplatek za účet</a><br>";
$adress = "seznam.php";
echo  "<a href= ". $adress . ">Zpět na seznam zákazníků!</a><br>";
?>