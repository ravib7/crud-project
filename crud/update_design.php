

<?php include("connection.php"); 
$id = $_GET['id'];

$query = "SELECT * FROM formdata WHERE Id= '$id'";
$data = mysqli_query($connection,$query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>


<!DOCTYPE html>
<html>
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <link rel="stylesheet" href="style.css">
   <title>Update Page</title>   
    
    </head>

    <body>
     <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Update Student Details
        </div>

        <div class="form">
            <div class="input_filed">
                <label>First Name</label>
                <input type="text" value="<?php echo $result['fname'];?>" class="input" name="fname" required>
            </div>

            <div class="input_filed">
                <label>Last Name</label>
                <input type="text" value="<?php echo $result['lname'];?>" class="input" name="lname" required>
            </div>

            <div class="input_filed">
                <label>Password</label>
                <input type="password" value="<?php echo $result['password'];?>" class="input" name="password" required>
            </div>

            <div class="input_filed">
                <label>Confirm Passwsword</label>
                <input type="password" value="<?php echo $result['conpassword'];?>" class="input" name="conpassword" required>
            </div>

            <div class="input_filed">
                <label>Gender</label>
                <select class="selectarea" name="gender" required>
                    <option value="">Select</option>
                    
                    <option value="Male"
 
                    <?php
                        if($result['gender'] == 'Male')
                        {
                             echo "selected";
                        }
                    ?>
                    >Male</option>

                    <option value="Female" 
                    
                    <?php
                        if($result['gender'] == 'Female')
                        {
                             echo "selected";
                        }
                    ?>
                    >Female</option>
                </select>
            </div>

            <div class="input_filed">
                <label>Email Address</label>
                <input type="text" value="<?php echo $result['email'];?>" class="input" name="email" required>
            </div>

            
            <div class="input_filed">
                <label>Phone Number</label>
                <input type="number" value="<?php echo $result['phone'];?>" class="input" name="phone" required>
            </div>

            
            <div class="input_filed">
                <label>Address</label>
                <textarea class="textarea" name="address" required><?php echo $result['address'];?></textarea>
                </div>

                <div class="input_filed">
                <label class="cheak">
                <input type="checkbox" required>
                <span class="cheakmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
                </div>
        
                <div class="input_filed">
                    <input type="submit" value="Update" class="btn" name="Update">
                </div>
        </div>

     </div>   
    </body>
</html>


<?php
if(isset($_POST['Update']))
    {
    $fname        =    $_POST['fname'];
    $lname        =    $_POST['lname'];
    $password     =    $_POST['password'];
    $conpassword  =    $_POST['conpassword'];
    $gender       =    $_POST['gender'];
    $email        =    $_POST['email'];
    $phone        =    $_POST['phone'];
    $address      =    $_POST['address'];


    //  if($fname !="" && $lname !="" && $password !="" && $conpassword !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
    //  {
    $query = "INSERT INTO formdata (fname, lname, password, conpassword, gender, email,phone, address) 
    VALUES('$fname', '$lname', '$password', '$conpassword', '$gender', '$email', '$phone', '$address')";

    $query = "Update formdata set fname='$fname',lname='$lname',password='$password',conpassword='$conpassword',gender='$gender',email='$email',phone='$phone',address='$address' WHERE id='$id'";
    
    $data = mysqli_query($connection,$query);

    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
        ?>
           
           <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/Display.php" />

        <?php
    }
    else
    {
        echo "<script>alert('Failed To Update')</script>";
    }

}

?>