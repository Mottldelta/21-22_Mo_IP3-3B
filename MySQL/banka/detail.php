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
        $ucet = $row["currency"];
        echo "<b>" .$row["name"] . "</b>" . "<br>" . $row["email"] . "<br>" . $row["country"] . "<br> Zůstatek na účtu: " . $row["currency"] . "<br>";

    }
} else {
    echo "0 results";
}
$conn->close();

$uspory = (($ucet/100)*5);

$adress1 = "edit.php?idzak=$id&ukon=1&suma=20";
echo "<br>" . "<a href= ". $adress1 . ">Strhnout poplatek za kreditní kartu</a><br>";
$adress2 = "edit.php?idzak=$id&ukon=1&suma=100";
echo "<a href= ". $adress2 . ">Strhnout poplatek za účet</a><br>";
$adress3 = "edit.php?idzak=$id&ukon=1&suma=$ucet";
echo "<a href= ". $adress3 . ">Vynulovat účet</a><br>";
$adress4 = "edit.php?idzak=$id&ukon=2&suma=$uspory";
echo "<a href= ". $adress4 . ">Započíst úspory</a><br>";
$adress5 = "edit.php?idzak=$id&ukon=3&suma=0";
echo "<a href= ". $adress5 . ">Smazat účet</a><br>";
$adress = "seznam.php";
echo  "<br>" . "<a href= ". $adress . ">Zpět na seznam zákazníků!</a><br>";
?>