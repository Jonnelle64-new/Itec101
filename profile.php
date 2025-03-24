<?php
session_start();
include 'db.php'; // Ensure you include your database connection

if (!isset($_SESSION['studentID'])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit();
}

// Fetch user profile data
$studentID = $_SESSION['studentID'];
$stmt = $conn->prepare("SELECT fullname, email, phone, gender, course FROM users WHERE studentID = ?");
$stmt->bind_param("s", $studentID);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Similar styles as your existing styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: url('your_background_image.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .home-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 15px;
            background: linear-gradient(90deg, #ff758c, #ff7eb3);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
            text-decoration: none;
        }
        .profile-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        .profile-info {
            margin: 10px 0;
        }
        .logout-button {
            margin-top: 20px;
            padding: 10px 20px;
            background: linear-gradient(90deg, #ff758c, #ff7eb3);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<a href="homepage.php" class="home-button">Home</a>
    <div class="profile-container">
        <h1>User Profile</h1>
        <div class="profile-info">Name: <?php echo $user['fullname']; ?></div>
        <div class="profile-info">Email: <?php echo $user['email']; ?></div>
        <div class="profile-info">Phone: <?php echo $user['phone']; ?></div>
        <div class="profile-info">Gender: <?php echo $user['gender']; ?></div>
        <div class="profile-info">Course: <?php echo $user['course']; ?></div>
        <form method="post" action="logout.php">
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
</body>
</html>