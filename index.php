<?php
session_start();
require "User.php";

$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($user->login($_POST["username"], $_POST["password"])) {
        $_SESSION["user"] = $_POST["username"];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid login. <a href='login.php'>Try again</a>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>

<form method="POST">
    <h2>Login</h2>
    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>
