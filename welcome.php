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
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?> <a href="logout.php">Logout</a> <br><br>
    <form action="insert.php" method="POST">
        <textarea name="diary" id="diary" placeholder="Type your text here!"></textarea><br>
        <input type="submit" name="submit" value="Submit" style="margin-left: 46%">
    </form>
   
    
</body>
</html>