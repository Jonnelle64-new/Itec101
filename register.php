<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection script
include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $studentID = $_POST['studentID'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate the passwords
    if ($password !== $confirmPassword) {
        echo "Passwords do not match."; // Error message for password mismatch
        exit;
    }

    // Hash the password for secure storage
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo "Email already registered."; // Exit if email exists
        $stmt->close();
        exit;
    }
    $stmt->close();
     // Check if the email already exists
     $stmt = $conn->prepare("SELECT studentID FROM users WHERE studentID = ?");
     $stmt->bind_param("s", $studentID);
     $stmt->execute();
     $stmt->store_result();
     
     if ($stmt->num_rows > 0) {
         echo "studentID already registered.";
         $stmt->close();
         exit;
     }
     $stmt->close();

    // Prepare an SQL statement for insertion
    $stmt = $conn->prepare("INSERT INTO users (studentID, fullname, email, phone, gender, course, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
        exit;
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param("sssssss", $studentID, $fullname, $email, $phone, $gender, $course, $hashedPassword);

    // Execute the statement and handle potential errors
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error; // Output any SQL errors
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>