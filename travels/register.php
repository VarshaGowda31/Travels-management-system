<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration - Travel Management</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('photos/regbg.jpg') center/cover no-repeat fixed;
            color: #fff;
        }

        header {
    
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin: 0;
            text-align: left;
            color:black;
        }
        h2 {
            color: black;
            text-align: left;
        }

        .top-right {
            position: relative;
            top: 10px;
            right: 10px;
        }

        .container {
            max-width: 450px;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.8); /* Adding some transparency to the background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        img {
            width: 29%;
    border-radius: 8px;
    margin-bottom: -8px;
    margin-left: 158px;
}

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"], .button {
            background-color: #4caf50;
            color: #fff;
            padding: 5px 11px;
    border: none;
    border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
        }

        .button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1><i>Travel Management</i></h1>
        <div class="top-right">
            <button class="button" onclick="location.href=''login.php">Sign In</button>
            <button class="button" onclick="location.href='#'">Contact</button>
            <button class="button" onclick="location.href='#'">About</button>
        </div>
    </header>

    <div class="container">
        <img src="logio.png" alt="Travel Image">
        <h2>User Registration</h2>
        <form action="registration_handler.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" required>

            <span class="error"><?php echo $password_err; ?></span>

            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <input type="submit" value="Register" class="button">
        </form>
    </div>
</body>
</html>