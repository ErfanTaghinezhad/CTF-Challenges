<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Search Our Products</h1>
    <form method="get" action="">
        <input type="text" name="search" placeholder="Search products...">
        <input type="submit" value="Search">
    </form>
    <div class="results">
        <?php
        if (isset($_GET['search'])) {
            $search = $_GET['search'];

            // Connect to SQLite database
            $db = new SQLite3('database.db');

            // Vulnerable SQL query
            $query = "SELECT * FROM products WHERE name LIKE '%$search%'";

            $results = $db->query($query);

            while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
                echo "<p>Product: " . htmlspecialchars($row['name']) . " - Price: $" . htmlspecialchars($row['price']) . "</p>";
            }

            $db->close();
        }
        ?>
    </div>
</body>
</html>
