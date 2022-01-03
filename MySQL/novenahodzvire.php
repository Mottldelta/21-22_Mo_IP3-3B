<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoo";

$name = array('Greg', 'Henry', 'Rudolf', 'Carl', 'Frederick');
$randname = rand(0,4);
$animal = array('Doplhin', 'Sperm whale', 'Shark');
$randanim = rand(0,2);
$class = "";
if($animal[$randanim] == 'Shark') {
    $class = "Chondrichthyes";
} else {
    $class = "Mammalia";
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO animals (name, animal, class, IDrun)
  VALUES ('$name[$randname]', '$animal[$randanim]', '$class', 1)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nově je v akvariu zvíře " . $animal[$randanim] . " se jmenuje " . $name[$randname];
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>