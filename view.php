<?php
$db = new SQLite3('flowers.db');
$result = $db->query('SELECT * FROM orders');

echo "<h1>Customer Orders</h1>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>ID</th><th>Flower</th><th>Quantity</th></tr>";

while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['flower']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "</tr>";
}
echo "</table>";
?>
