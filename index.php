<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        nav {
            background-color: #007bff;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            margin: 0;
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ffdd57;
        }

        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: calc(100vh - 70px);
            padding: 20px;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #555;
        }

        .hero a {
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .hero a:hover {
            background-color: #0056c1;
        }

        @media (max-width: 600px) {
            .hero h2 {
                font-size: 28px;
            }
            .hero p {
                font-size: 16px;
            }
            nav ul li {
                margin-left: 10px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <h1>My Website</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="hero">
        <div>
            <h2>Welcome to My Website</h2>
            <p>This is a modern landing page example with navigation bar and centered content.</p>
            <a href="login.php">Get Started</a>
        </div>
    </div>
</body>
</html>
