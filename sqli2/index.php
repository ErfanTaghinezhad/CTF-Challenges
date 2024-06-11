<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Connect to SQLite database
        $db = new SQLite3('database.db');

        // Vulnerable SQL query
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $result = $db->query($query);

        if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
		echo "<p>Welcome, " . htmlspecialchars($row['username']) . "!</p>";
		if($row['username']=='admin') {
			echo "WAPTECTF{SQLI2_Vh^ddf_dddd}";
		}else{
			echo "only admin can see flag";
		}
        } else {
            echo "<p>Invalid login credentials.</p>";
        }

        $db->close();
    }
    ?>
</body>
</html>

