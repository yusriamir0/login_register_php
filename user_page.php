
<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: #fff;">
    <div class="container">
        <div class="form-box active">
            <h2>User Page <span><?php echo $_SESSION['name']; ?></span></h2>
            <p>Welcome, User!</p>
            <button onclick="window.location.href='logout.php'">Logout</button>
        </div>
    </div>
</body>
</html>