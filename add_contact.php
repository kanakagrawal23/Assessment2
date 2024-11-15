<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "contact";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the contacts table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    contact VARCHAR(255) NOT NULL
)";

$conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO contacts (name, email, contact) VALUES ('$name', '$email', '$contact')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: Assessment02.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Contact</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.7/css/pico.min.css" />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <li><a href="add_contact.php">Add Contact</a></li>
            <li><a href="Assessment02.php">View Contacts</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Add Contact</h1>
    <form method="post">
        <label for="name">Name</label>
        <input type="text" name="name" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" required>
        
        <label for="contact">Phone</label>
        <input type="text" name="contact" required>
        
        <input type="submit" value="Add Contact">
    </form>
    <a href="Assessment02.php">Back to Home</a>
</main>
</body>
</html>
