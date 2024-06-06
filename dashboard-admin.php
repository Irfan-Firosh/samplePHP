<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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
            padding: 20px;
            text-align: center;
        }
        .center {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            height: 100%;
            width: 100%;
        }
        .cta-button {
            margin-top: 100px;
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
        }
        
    </style>
</head>
<body>
    <header class="header">Admin Page</header>
    <div class="center">
        <a href="./landing.php"><button class="cta-button">Logout</button></a>
        <a href="./user-management.php"><button class="cta-button">User Management</button></a>
    </div>
</body>
</html>