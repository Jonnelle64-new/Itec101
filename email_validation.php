<?php
include 'db.php'; // Ensure this is the correct path to your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $current_password = $_POST['current_password'];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if email exists in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User exists, now check the provided current password
            $user = $result->fetch_assoc();
            $hashed_password = $user['password']; // Assuming you have a column named 'password'

            // Verify the current password with the stored hashed password
            if (password_verify($current_password, $hashed_password)) {
                // If password matches, redirect to password reset
                header("Location: reset-password.php?email=" . urlencode($email)); // Send email to reset password page
                exit();
            } else {
                echo "Current password is incorrect."; // Error message for incorrect password
            }
        } else {
            echo "Email not found in our records."; // Email not found
        }

        $stmt->close();
    } else {
        echo "Invalid email format."; // Invalid email format
    }
}

$conn->close();
?>