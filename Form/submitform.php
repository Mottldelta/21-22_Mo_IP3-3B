<?php

//echo $_POST['zakazjmen'] . "<br>";
//echo $_POST['zakazpoh'] . "<br>";
//echo $_POST['zakaztyp'] . "<br>";
//echo $_GET['zakazjmen'] . "<br>";
//echo $_GET['zakazpoh'] . "<br>";
//echo $_GET['zakaztyp'] . "<br>";

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";

$name = $_POST['zakazjmen'];
$gender = $_POST['zakazpoh'];
$pass = $_POST['zakazheslo'];
$date = $_POST['zakazdatum'];
$cat = $_POST['zakazkat'];
$type = $_POST['zakaztyp'];
$mess = $_POST['zakazzprav'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO customers (name, gender, password, date, categories, acctype, message)
  VALUES ('$name', '$gender', '$pass', '$date', '$cat', '$type', '$mess')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nový zákazník přidán!";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
