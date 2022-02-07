<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";

$custname = $_POST['zakazjmeno'];
$custemail = $_POST['zakazemail'];
$custcountry = $_POST['zakazzem'];
$custid = $_POST['zakazid'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE customers SET name = '$custname', email = '$custemail', country = '$custcountry' WHERE id = $custid";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Uprava!";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
