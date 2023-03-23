<?php
include("connection.php");
$id = $_GET['id'];

$query = "DELETE FROM formdata WHERE Id= '$id' ";
$data = mysqli_query($connection,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>

    <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/Display.php" />

   <?php
}
else
{
    echo "<script>alert('Failed To Deleted')</script>";
}
?> 