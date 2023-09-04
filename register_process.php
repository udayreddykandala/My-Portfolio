<?php



session_start();

// Check if the user is already logged in, and if so, redirect them to the protected content
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "uday";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 
// Retrieve form data

error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the 'users' table
    $sql = "INSERT INTO users (username, password, email, phone) VALUES ('$username', '$hashedPassword', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['user_id'] = 1; // Store a session variable to indicate the user is logged in
        header("Location: index.php");
        exit();

    } else {
        $error_message = "Invalid username or password";
    }
} else {
    echo "Form data not properly submitted.";
}
?>
