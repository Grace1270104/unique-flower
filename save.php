

<?php
$db = new SQLite3('flowers.db');

// Get form data
$flower = $_POST['flower'];
$quantity = $_POST['quantity'];

// Insert into database
$db->exec("INSERT INTO orders (flower, quantity) VALUES ('$flower', '$quantity')");

echo "Order saved successfully!";
?>
