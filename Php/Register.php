<?php
// Database connection
$dsn = 'mysql:host=localhost;dbname=users';
$dbusername = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $dbusername, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Handle registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['user_name'] ?? '';
    $email = $_POST['user_email'] ?? '';
    $password = $_POST['user_password'] ?? '';

    if (empty($name) || empty($email) || empty($password)) {
        die("All fields are required.");
    }


    // Insert user data
    $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);

    try {
        $stmt->execute();
        echo "Registration successful!";
        header("Location: ../login.html");
    } catch (PDOException $e) {
        echo "Registration failed: " . $e->getMessage();
    }
}
?>
