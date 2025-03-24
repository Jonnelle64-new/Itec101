<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Access - Login</title>
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
            background: url('background2.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease-in-out;
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
        .home-button:hover {
            background: linear-gradient(90deg, #ff7eb3, #ff758c);
            transform: scale(1.05);
        }
        h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
            color: #333;
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 1px 1px 5px rgba(255, 255, 255, 0.7);
        }
        .input-group {
            margin: 15px 0;
        }
        .input-group input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            font-size: 16px;
        }
        .button {
            margin-top: 20px;
            padding: 12px 20px;
            background: linear-gradient(90deg, #ff758c, #ff7eb3);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
            text-align: center;
            width: 100%;
        }
        .button:hover {
            background: linear-gradient(90deg, #ff7eb3, #ff758c);
            transform: scale(1.05);
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        .footer a {
            color: #ff758c;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer a:hover {
            color: #ff7eb3;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-button">back</a>
    <div class="container">
        <h1>Login to Gourmet Delights</h1>
        <form action="login_processing.php" method="POST">
            <div class="input-group">
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="button">Login</button>
        </form>
        <div class="footer">
            <p><a href="forgot-password.php">Forgot Password?</a></p>
            <p><button class="button" onclick="location.href='regform.php'">Register New User</button></p>
        </div>
    </div>
</body>
</html>
