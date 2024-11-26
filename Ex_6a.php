<?php
$servername = "localhost";
$username = "Elaya";
$password = "1234";
$dbname = "4039base";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM yourtable";
$result = $conn->query($sql);

echo "<h1>Data from Database</h1>";
echo "<table border='1'><tr><th>Column 1</th><th>Column 2</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["column1"] . "</td><td>" . $row["column2"] . "</td></tr>";
    }
}
echo "</table>";

$conn->close();
?>
