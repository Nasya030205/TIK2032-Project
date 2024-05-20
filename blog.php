<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flower_blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch posts from the database
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasya'Flower Page</title>
    <link rel="stylesheet" href="css/blog.css">
    <script src="javascript/blog.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/128/346/346167.png" alt="logo" class="logo-img" />
            <h1 class="logo-title">Nasya'Flower Page</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="galery.html">GALERY</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="kontak.html">KONTAK</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<h2>" . $row["title"]. "</h2>";
                echo "<p>" . $row["content"]. "</p>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
