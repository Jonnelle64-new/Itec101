<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
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
            background: url('background1.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            overflow: hidden;
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

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            width: 90%;
            max-width: 450px;
            max-height: 80vh;
            overflow-y: auto;
            text-align: center;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 15px;
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            text-align: left;
            font-weight: 600;
            color: #ddd;
            margin-top: 10px;
        }

        .input-group, input, select {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            border: 1px solid #ff7eb3;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            outline: none;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2);
            margin-top: 5px;
        }

        input::placeholder {
            color: #ccc;
        }

        input:focus, select:focus {
            background: rgba(255, 255, 255, 0.4);
            border: 1px solid #ffdd57;
        }

        /* Improved Dropdown Styling */
        select {
            appearance: none;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.3);
            color: white;
            border: 1px solid #ff7eb3;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            outline: none;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2);
        }

        select:focus {
            background: rgba(255, 255, 255, 0.5);
            border: 1px solid #ffdd57;
        }

        select option {
            background: rgba(0, 0, 0, 0.9);
            color: white;
            font-size: 16px;
            padding: 10px;
        }

        button {
            margin-top: 15px;
            padding: 14px;
            background: linear-gradient(90deg, #ff758c, #ff7eb3);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: transform 0.3s;
            width: 100%;
        }

        button:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #ff7eb3, #ff758c);
        }

        .footer {
            margin-top: 10px;
            font-size: 14px;
            color: #ddd;
        }

        .footer a {
            color: #ff758c;
            text-decoration: none;
        }

        .footer a:hover {
            color: #ffdd57;
        }

        /* Scrollbar styling */
        .container::-webkit-scrollbar {
            width: 6px;
        }

        .container::-webkit-scrollbar-thumb {
            background: #ff758c;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<a href="index.php" class="home-button">back</a>
    <div class="container">
        <h2>Student Registration</h2>
        <form action="register.php" method="post">
            <label for="studentID">Student ID</label>
            <input type="number" id="studentID" name="studentID" required>

            <label for="fullname">Last Name, First Name, Middle Initial</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" maxlength="11" pattern="[0-9]{11}" placeholder="09123456789" required>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label for="course">Course</label>
            <select id="course" name="course" required>
                <option value="">Select Course</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Business Administration">Business Administration</option>
                <option value="Engineering">Engineering</option>
                <option value="Psychology">Psychology</option>
                <option value="Other">Other</option>
            </select>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit">Register</button>
        </form>
        <p>Need help? <a href='https://www.facebook.com/zhaksu' target="_blank" rel="noopener noreferrer">Contact Us</a></p>
    </div>
</body>
</html>
