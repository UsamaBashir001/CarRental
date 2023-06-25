<?php
// Database configuration
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'rent';

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

// Form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $vehicle = $_POST['vehicle'];
    $price = $_POST['price'];

    // Insert order data into the database
    $sql = "INSERT INTO orders (vehicle, price) VALUES ('$vehicle', '$price')";

    if ($conn->query($sql) === true) {
        // Successful order placement
        echo '<h2>Order Placed</h2>';
        echo '<p>Vehicle: ' . $vehicle . '</p>';
        echo '<p>Rent per Day Price: $' . $price . '</p>';
    } else {
        // Order placement failed
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
