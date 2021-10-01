<?php
include "dbConn.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $diary = $_POST['diary'];
    

    $insert = mysqli_query($db,"INSERT INTO `tblemp`(`diary`) VALUES ('$dairy')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>