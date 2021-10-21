<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title class="wlcm">Welcome</title>
</head>
<body>
    
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a class="logout" href="logout.php">Logout</a>
</body>
</html>