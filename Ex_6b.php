<?php
$xml = simplexml_load_file("data.xml") or die("Error: Cannot create object");
echo "<h1>Items from XML</h1>";
echo "<table border='1'><tr><th>Name</th><th>Price</th></tr>";

foreach($xml->item as $item) {
    echo "<tr><td>" . $item->regno . "</td><td>" . $item->name . "</td></tr>";
}
echo "</table>";
?>
