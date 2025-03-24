<?php
// Enable error reporting for debugging (optional, comment out in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection script
include 'db.php';

// Fetch users from the database
$result = $conn->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>User Dashboard</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Course</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['studentID']}</td>
                        <td>{$row['fullname']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['course']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No users found.</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>