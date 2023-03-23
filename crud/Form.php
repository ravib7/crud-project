
<?php include("connection.php"); ?>


<!DOCTYPE html>
<html>
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <link rel="stylesheet" href="style.css">
   <title>crud project</title>   
    
    </head>

    <body>
     <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="input_filed">
                <label>First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input_filed">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>

            <div class="input_filed">
                <label>Password</label>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="input_filed">
                <label>Confirm Passwsword</label>
                <input type="password" class="input" name="conpassword" required>
            </div>

            <div class="input_filed">
                <label>Gender</label>
                <select class="selectarea" name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="input_filed">
                <label>Email Address</label>
                <input type="text" class="input" name="email" required>
            </div>

            
            <div class="input_filed">
                <label>Phone Number</label>
                <input type="number" class="input" name="phone" required>
            </div>

            
            <div class="input_filed">
                <label>Address</label>
                <textarea class="textarea" name="address" required></textarea>
                </div>

                <div class="input_filed">
                <label class="cheak">
                <input type="checkbox" required>
                <span class="cheakmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
                </div>
        
                <div class="input_filed">
                    <input type="submit" value="Register" class="btn" name="register">
                </div>
        </div>

     </div>   
    </body>
</html>


<?php
if(isset($_POST['register']))
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
    
    $data = mysqli_query($connection,$query);

    if($data)
    {
           echo "<script>alert('Data Inserted into Database')</script>";
          
    }
    else
    {
        echo "<script>alert('Failed')</script>";
    }

}


// else  
// {      
//  echo "<script>alert('Fill The Form First')</script>";
// }
// }

?>