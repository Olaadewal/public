<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    margin-top: 100px;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    font-weight: bold;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #0070ba;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
}

button:hover {
    background-color: #005aa3;
}

.forgot-password {
    font-size: 14px;
    color: #0070ba;
    cursor: pointer;
}

/* ... (previous CSS content) ... */

footer {
    margin-top: 20px;
    text-align: center;
    font-size: 14px;
}

footer p {
    margin-bottom: 10px;
}

footer ul {
    list-style: none;
    padding: 0;
}

footer ul li {
    display: inline;
    margin-right: 15px;
}

footer ul li a {
    text-decoration: none;
    color: #0070ba;
}

footer ul li a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Login to PayPal</h1>
        <form>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Log In</button>
        </form>
        <p class="forgot-password">Forgot your password?</p>

        <footer>
            <p>&copy; 2023 PayPal. All rights reserved.</p>
            <ul>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </footer>
    </div>
</body>
</html>
