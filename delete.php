<?php include "conn.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from ready where id =$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo " Deleted successfull";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
    }
?>