<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Access - Forgot Password</title>
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
    <a href="index.php" class="home-button">Home</a>
    <div class="reset-container">
        <h2>Forgot Password</h2>
        <form action="email_validation.php" method="POST">  
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="current_password" placeholder="Enter your current password" required> <!-- New password input -->
            <button type="submit">Reset Password</button>  
        </form>
        <a href="login.php" class="back-login">Back to Login</a>
    </div>
</body>
</html> 