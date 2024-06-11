<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping service | secure</title>
</head>
<body>
    <h1>Ping service | secure</h1>
    <form method="get" action="">
        <input type="text" name="ip" placeholder="Enter IP address">
        <input type="submit" value="Ping">
    </form>
    <div class="result">
        <?php
        if (isset($_GET['ip'])) {
            $ip = $_GET['ip'];
            // Basic input filter
            $ip = str_replace(array(';', '|', '&', '$', '`', '\\', '<', '>'), '', $ip);
            $output = shell_exec("ping -c 4 $ip");
            echo "<pre>$output</pre>";
        }
        ?>
    </div>
</body>
</html>

