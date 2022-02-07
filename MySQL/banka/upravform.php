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
$id = $_GET['idzak'];
$sql = "SELECT id, name, email, country FROM customers WHERE id = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $email = $row["email"];
        $country =$row["country"];

    }
} else {
    echo "0 results";
}
$conn->close();
?>
<h2>Registrační formulář pro banku</h2>
<form action="upravf.php" method="post">
    <fieldset>
        <legend>Osobní údaje zákazníka: </legend>
        <label for="custname">Jmeno zakazníka:</label>
        <input type="text" name="zakazjmeno" id="custname" <?php echo "value=$name"?> autofocus><br>
        <label for="custemail">Email zakazníka:</label>
        <input type="email" name="zakazemail" id="custemail" <?php echo "value=$email"?>><br>
        <label for="custcountry">Země zakazníka:</label>
        <input type="text" name="zakazzem" id="custcountry" <?php echo "value=$country"?>>
        <input type="text" name="zakazid" <?php echo "value=$id"?> hidden>
    </fieldset>
    <!--    Submit button-->
    <input type="submit">
