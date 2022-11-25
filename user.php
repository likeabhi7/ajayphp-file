<?php
include 'conn.php';
if(isset($_POST['submit']))

{
   $name=$_POST['name'];
   $college=$_POST['college']; 
   $course=$_POST['course']; 
   $email=$_POST['email']; 
   $phone=$_POST['phone']; 
   $address=$_POST['address']; 
   
   
    // Validation Form

    

    // if(empty($name)) 
    // {
    //     echo "Please Enter Your Name"."<br>";
    // }
    // if(!preg_match ("/^[a-zA-Z\s]*$/",$name))
    // {
    //     echo "Please Enter Valid name";
    // }

    // if(!preg_match('/^[0-9]*$/',$phone))
    // {
    //     echo "Only Mobile number";
    // }
    // if(strlen($phone)<10)
    // {
    //     echo "Please Enter Phone  Number"."<br>";
    // }
    // if(strlen($phone)>10)
    // {
    //     echo "Your mobile is Long or short Please Enter Valdi Number";
    // }

    // if(empty($email))
    // {
    //     echo "Please Enter Email";
    // }
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    // {
    //     echo "Invalid email Format";
    // }

   $sql="insert into ready (name,college,course,email,phone,address) values ('$name','$college','$course','$email','$phone','$address')";
   $result=mysqli_query($con,$sql);
   if($result){
       
    header('location:display.php');
   }else{
       die(mysqli_error($con));
   }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Opertaion</title>
  </head>
  <body>
<div class="container my-5">
  <h2> Student Details </h2>

<form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your Name" name="name" autocomplete="off" required>
    
  </div>

  <div class="form-group">
    <label>College</label>
    <input type="text" class="form-control"  placeholder="Enter Your College Name" name="college" autocomplete="off" required>
    
  </div>

  <div class="form-group">
    <label>Course</label>
    <input type="text" class="form-control"  placeholder="Enter Your Course Name" name="course" autocomplete="off" required>
    
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name="email" autocomplete="off" required>
    
  </div>

  <div class="form-group">
    <label>Phone no</label>
    <input type="text" class="form-control"  placeholder="Enter Your Phone no" name="phone no" autocomplete="off" required>
    
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control"  placeholder="Enter Your Address" name="address" autocomplete="off" required>
    
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>
</div>

</body>
</html>

<?php 
