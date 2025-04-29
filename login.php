<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Showroom Login</title>
    <style>
        /* Import Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

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
            background: url('login_bg.jpg') no-repeat center center/cover;
            position: relative;
        }

        /* Background Overlay */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Dark overlay for better contrast */
            z-index: -1;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transition: 0.3s ease-in-out;
        }

        .login-container:hover {
            transform: translateY(-5px);
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #fff;
            font-weight: 600;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            outline: none;
            transition: 0.3s;
        }

        .login-container input::placeholder {
            color: #ddd;
        }

        .login-container input:focus {
            background: rgba(255, 255, 255, 0.6);
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            color: white;
            transition: 0.3s;
        }

        .login-container button:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }

        .error-message {
            color: #ffcccb;
            font-size: 14px;
            margin-top: 5px;
        }

        .register-link {
            margin-top: 10px;
            font-size: 14px;
            color: #fff;
        }

        .register-link a {
            color: #ffcccb;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 400px) {
            .login-container {
                padding: 20px;
            }
            .login-container input, .login-container button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Car Showroom Login</h2>
        <form id="loginForm">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p id="errorMessage" class="error-message"></p>
        </form>
        <p class="register-link">Don't have an account? <a href="register.html">Register here</a></p>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('errorMessage');

            // Sample credentials for validation
            const validUsername = "user";
            const validPassword = "user123";

            if (username === validUsername && password === validPassword) {
                alert("Login Successful");
                window.location.href = 'homepage.php';
            } else {
                errorMessage.textContent = "Username or Password Invalid";
            }
        });
    </script>
</body>
</html>
