<?php
session_start();
include 'db.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check for user in the database
    $stmt = $conn->prepare("SELECT studentID, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($studentID, $hashed_password);
        $stmt->fetch();
        
        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Set session variables
            $_SESSION['studentID'] = $studentID;
            // Redirect to homepage
            header("Location: homepage.php");
            exit();
        } else {
            echo "<script>alert('Invalid password!'); location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('No user found with this email!'); location.href='login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>