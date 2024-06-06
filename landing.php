<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .container {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        .hero {
            text-align: center;
            padding: 50px 0;
        }
        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2em;
            margin-bottom: 40px;
        }
        .logins {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }
        .login {
            text-align: center;
            width: 30%;
        }

        .cta-button {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.2em;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .cta-button:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }
        .cta-button:active {
            background-color: #1e7e34;
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .login h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .login p {
            font-size: 1em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Sample Project</h1>
    </div>
    <div class="container">
        <div class="hero">
            <h1>Welcome to this sample project</h1>
            <p>We offer an interactive dashboard</p>
        </div>
        <div class="logins">
            <div class="login">
                <h3>Access The Service</h3>
                <p>Utilize our creative services</p>
                <a href="./sign-in/login.php"><button class="cta-button">Login</button></a>
            </div>
            <div class="login">
                <h3>Register </h3>
                <p>Try our product out</p>
                <a href="./sign-in/register.php"><button class="cta-button">Sign-up</button></a>
            </div>
        </div>
    </div>
</body>
</html>
