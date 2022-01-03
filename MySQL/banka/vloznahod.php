<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banks";

$name = array('Peter Random', 'John Johnny', 'Norman Osborn', 'Donald Duck', 'Steven Spielberg');
$randname = rand(0,4);
$email = array('rand@random.org', 'johnny@random.org', 'osbcorp@random.org', 'duck@random.org', 'steven@random.org');
$country = array('France', 'Spain', 'Germany', 'Vietnam', 'South Korea', 'China');
$randcountry = rand(0,5);
$currency = rand(0,10000);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO customers (name, email, country, currency)
  VALUES ('$name[$randname]', '$email[$randname]', '$country[$randcountry]', $currency)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "$name[$randname] byl přidán do databáze banky";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

$adress = "index.php";
echo "<br>" . "<a href= ". $adress . ">Zpět na hlavní stránku!</a>";
?>