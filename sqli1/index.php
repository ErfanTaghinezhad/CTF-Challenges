
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }
        form {
            display: inline-block;
            margin-top: 50px;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Blind SQL Injection Challenge</h1>
    <p>Enter your username and password to login:</p>
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="login" name="login">
    </form>
    <?php
session_start();
$db = new SQLite3('challenge.db');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vulnerable SQL query
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $results = $db->query($query);
    $user = $results->fetchArray(SQLITE3_ASSOC);

    if ($user) {
        echo "login success";
    } else {
        echo "login fail";
    }
}
?>


</body>
</html>

