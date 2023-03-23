<html>
    <head>
        <title>Display</title>
    </head>

    <style>
        body
        {
            background-color: #D071F9;
        }
        table
        {
            background-color: white;
        }
        .update, .delete
        {
            background:green;
            color:white;
            border:2;
            border-color:white;
            border-radius:7px;
            height:25px;
            width:80px;
            /* font-weight:bold; */
        }
        .delete
        {
            background:red;
        }
    </style>
</html>


<?php
include("connection.php");
// error_reporting(0);

$query = "SELECT * FROM formdata";
$data = mysqli_query($connection,$query);

$total = mysqli_num_rows($data);


//  $result = array(fname);

// echo $total;

if($total != 0)
{
?>

<h2 align="center"><mark>Displaying All Records</mark></h2>
<center><table border="1" cellspacing="7" width="100%">
    
    <tr>
    <th width="5%">Id</th>
    <th width="8%">First Name</th>
    <th width="8%">Last Name</th>
    <th width="10%">Gender</th>
    <th width="20%">Email</th>
    <th width="10%">Phone Number</th>
    <th width="24%">Address</th>
    <th width="15%">Operations</th>
    </tr>


<?php
      while($result = mysqli_fetch_assoc($data))
      {
           echo "<tr>
                   <td>".$result['Id']. "</td>
                   <td>".$result['fname']. "</td>
                   <td> ".$result['lname']. "</td>
                   <td> ".$result['gender']."</td>
                   <td> ".$result['email']. "</td>
                   <td> ".$result['phone']. "</td>
                   <td> ".$result['address']."</td>

    <td><a href='update_design.php?id=$result[Id]'><input type='submit' value='Update' class='update'></a>

    <a href='delete.php?id=$result[Id]'><input type='submit' value='Delete' onclick = 'return checkdelete()' class='Delete'></a></td>

                </tr>";
      }
}
else
{
     echo "No records found";
}


?>
</table>
</center>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record ?');
    }
</script>