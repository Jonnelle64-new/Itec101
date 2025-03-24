<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Access - Reset Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .reset-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease-in-out;
        }
        .reset-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .reset-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            font-size: 16px;
        }
        .reset-container button {
            width: 100%;
            padding: 12px;
            background: #ff758c;
            border: none;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        .reset-container button:hover {
            background: #ff7eb3;
        }
        .reset-container .back-login {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .reset-container .back-login:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <h2>Reset Password</h2>
        <form action="reset_password_processing.php" method="POST"> 
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($_GET['email']); ?>"> <!-- Pass email as hidden field -->
            <input type="password" name="new_password" placeholder="Enter new password" required>
            <input type="password" name="confirm_password" placeholder="Confirm new password" required>
            <button type="submit">Reset Password</button>
        </form>
        <a href="login.php" class="back-login">Back to Login</a>
    </div>
</body>
</html>