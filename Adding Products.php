<?php
 $servername = "shepurebeauty-server.mysql.database.azure.com";
 $username = "fravpuuhiz";
 $password = "2143K785O44BY288$";
 $dbname = "shpurebeauty-database";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 // Check connection
 if ($conn->connect_error) { 
     die("Connection failed: ". $conn->connect_error);
 }
// Prepare and execute the SQL statement to insert the product
// Use prepared statements to prevent SQL injection
$stmt = $pdo->prepare("INSERT INTO products (product_name, price) VALUES (:product_name, :price)");
$stmt->bindParam(':product_name', $productName);
$stmt->bindParam(':price', $price);

$productName = $_POST["product_name"];
$price = $_POST["price"];
$stmt->execute();
?>


<?php
// Connect to the database
// ... (database connection code)

// Prepare and execute the SQL statement to delete the product
// Use prepared statements to prevent SQL injection
$stmt = $pdo->prepare("DELETE FROM products WHERE product_id = :product_id");
$stmt->bindParam(':product_id', $productId);

$productId = $_POST["product_id"];
$stmt->execute();
?>


<?php
// Connect to the database
// ... (database connection code)

// Prepare and execute the SQL statement to update the product
// Use prepared statements to prevent SQL injection
$stmt = $pdo->prepare("UPDATE products SET product_name = :new_product_name, price = :new_price WHERE product_id = :product_id");
$stmt->bindParam(':product_id', $productId);
$stmt->bindParam(':new_product_name', $newProductName);
$stmt->bindParam(':new_price', $newPrice);

$productId = $_POST["product_id"];
$newProductName = $_POST["new_product_name"];
$newPrice = $_POST["new_price"];
$stmt->execute();
?>

