<?php
session_start();

// Database connection
$dsn = 'mysql:host=localhost;dbname=users';
$dbusername = 'root';
$password = '';

try {
    $pdo = new PDO($dsn,$dbusername, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['user_name'] ?? '';
    $password = $_POST['user_password'] ?? '';

    if (empty($name) || empty($password)) {
        die("Email and password are required.");
    }

    // Fetch user from the database
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $name, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // Password Verification
    if ($user && $password === $user['password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../Index.php");
        exit;
    } else {
        echo "Invalid Username or password.";
    }
}
?>
