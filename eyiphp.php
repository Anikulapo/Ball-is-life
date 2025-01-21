<?php
$host = 'localhost';
$db = 'online_shop';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
include 'db.php';

$itemId = $_POST['item-id'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO orders (item_id, quantity, name, email) VALUES ('$itemId', '$quantity', '$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>

<?php
include 'db.php';

$sql = "SELECT * FROM items";
$result = $conn->query($sql);
$items = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
}
echo json_encode($items);
$conn->close();
?>

<?php
echo "<h1>Payment Page</h1>";
echo "<p>Payment integration coming soon...</p>";
?>


<?php
include 'db.php';

$sql = "SELECT * FROM items";
$result = $conn->query($sql);
$items = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
}
echo json_encode($items);
$conn->close();
?>

