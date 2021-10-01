<?php
include "dbConn.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $diary = $_POST['diary'];
    

    $insert = mysqli_query($db,"INSERT INTO `users`(`diary`) VALUES ('$diary')");

    if(!$insert)
    {
        echo mysqli_error($db);
       
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Records added successfully.");'; 
        echo 'window.location.href = "welcome.php";';
        echo '</script>';
        //echo "<script>alert('Records added successfully.'); window.location.href = "welcome.php";</script>";
    }
}

mysqli_close($db); // Close connection
?>