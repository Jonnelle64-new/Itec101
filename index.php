<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Delights - Your Culinary Journey Starts Here</title>
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
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            overflow: hidden;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(15px);
            width: 90%;
            max-width: 450px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            background: linear-gradient(to right, #ff7eb3, #ff758c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }

        .card {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(255, 255, 255, 0.15);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }

        .card a {
            text-decoration: none;
            color: #ffdd57;
            font-size: 1.2em;
            font-weight: 600;
            transition: color 0.3s;
        }

        .card a:hover {
            color: #ff758c;
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
            transition: transform 0.3s;
            width: 100%;
        }

        .button:hover {
            transform: scale(1.08);
            background: linear-gradient(90deg, #ff7eb3, #ff758c);
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #ddd;
        }

        .footer a {
            color: #ff758c;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #ffdd57;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Gourmet Delights</h1>
        <div class='card'><a href='login.php'>Login</a></div>
        <div class='card'><a href='forgot-password.php'>Forgot Password</a></div>
        <button class="button" onclick="location.href='regform.php'">Register New User</button>
        <div class="footer">
    <p>Need help? <a href='https://www.facebook.com/zhaksu' target="_blank" rel="noopener noreferrer">Contact Us</a></p>
</div>
    </div>
</body>

</html>