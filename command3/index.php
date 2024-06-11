<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping service | no output</title>
</head>
<body>
    <h1>Ip Test</h1>
    <form method="get" action="">
        <input type="text" name="ip" placeholder="Enter IP address">
        <input type="submit" value="Ping">
    </form>
    <div class="result">
        <?php
        if (isset($_GET['ip'])) {
            $ip = $_GET['ip'];
            
            $output = shell_exec("ping -c 4 $ip > /dev/null 2>&1 & echo $?");
            if (trim($output) == "0") {
                echo "<p>Ping successful.</p>";
            } else {
                echo "<p>Ping failed.</p>";
            }
        }
        ?>
    </div>
</body>
</html>

