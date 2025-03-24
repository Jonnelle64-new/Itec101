<?php
include 'db.php'; // Ensure this is the correct path to your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate the passwords
    if ($new_password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash the new password for secure storage
    $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

    // Update password in the database
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $hashedPassword, $email);

    if ($stmt->execute()) {
        echo "Password reset successful! You can now <a href='login.php'>login</a>.";
    } else {
        echo "Error: " . $stmt->error; // Output any SQL errors
    }

    // Close the statement and the database connection
    $stmt->close();
}

$conn->close();
?>