<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
<a href="logout.php">logout</a>
<h1 style="text-algin:center">WELCOME <?php $_SESSION['name']; ?>  </h1>

    
</body>
</html>