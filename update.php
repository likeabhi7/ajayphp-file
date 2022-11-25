<?php include 'conn.php';
$id=$_GET['updateid'];
$sql="SELECT * from ready where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$college=$row['college'];
$course=$row['course'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];


if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $college=$_POST['college']; 
   $course=$_POST['course']; 
   $email=$_POST['email']; 
   $phone=$_POST['phone']; 
   $address=$_POST['address'];  

   $sql="update ready set id=$id,name='$name',college='$college',course='$course',email='$email',phone='$phone',address='$address' where id=$id";
   $result=mysqli_query($con,$sql);
   if($result){
    //    echo " updated successfully";
    //    echo "Data Inserted";
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

<form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your Name" name="name" autocomplete="off" value=<?php echo $name;?>>
    
  </div>

  <div class="form-group">
    <label>College</label>
    <input type="text" class="form-control"  placeholder="Enter Your College Name" name="college" autocomplete="off" value=<?php echo $college;?>>
    
  </div>

  <div class="form-group">
    <label>Course</label>
    <input type="text" class="form-control"  placeholder="Enter Your Course Name" name="course" autocomplete="off" value=<?php echo $course;?>>
    
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name="email" autocomplete="off" value=<?php echo $email;?>>
    
  </div>

  <div class="form-group">
    <label>Phone no</label>
    <input type="text" class="form-control"  placeholder="Enter Your Phone no" name="phone" autocomplete="off" value=<?php echo $phone;?>>
    
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control"  placeholder="Enter Your Address" name="address" autocomplete="off" value=<?php echo $address;?>>
    
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Update</button>
</form>
</div>

</body>
</html>