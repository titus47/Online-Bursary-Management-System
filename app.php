<?php
include("includes/db.php");
if(isset($_POST['submit'])){
  if($_POST['farr']>5000){
  $u_name = $_POST['u_name'];
  $email = $_POST['email'];
  $bday=$_POST['bday'];
  $gender = $_POST['gender'];
  $ward = $_POST['ward'];
  $image_name = $_FILES['file']['name'];
  $image_type = $_FILES['file']['type'];
  $image_size = $_FILES['file']['size'];
  $image_tmp  = $_FILES['file']['tmp_name'];
  $Regno = $_POST['Regno'];
  $sname = $_POST['sname'];
  $level = $_POST['level'];
  $yos =$_POST['yos'];
  $sem = $_POST['sem'];
  $fees = $_POST['fees'];
  $image_name = $_FILES['fst']['name'];
  $image_type = $_FILES['fst']['type'];
  $image_size = $_FILES['fst']['size'];
  $image_tmp  = $_FILES['fst']['tmp_name'];
  $farr = $_POST['farr'];
  $image_name = $_FILES['farrs']['name'];
  $image_type = $_FILES['farrs']['type'];
  $image_size = $_FILES['farrs']['size'];
  $image_tmp  = $_FILES['farrs']['tmp_name'];

     
  if($image_type=="image/jpeg" or $image_type=="image/png" or
  $image_type=="image/gif"){
    
    if($image_size<=500000){
    move_uploaded_file($image_tmp,"images/$image_name");
    }
    else{
    echo "<script>alert('Image size is larger, only 50kb size is allowed ')</script>";
    } 
    
  
  }
  else{
  echo "<script>alert('Image type is invalid')</script>";
  }
  $query="select * from apply where email= '$email'";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)>0){
    echo "<script>alert('Data Already Exist');</script>";
  }else{
    $sql="UPDATE  apply SET email='$email',bday='$bday',gender='$gender',ward='$ward',file='$image_name',Regno='$Regno',sname='$sname',level='$level',yos='$yos',sem='$sem',
          fees='$fees',fst='$image_name',farr='$farr',farrs='$image_name' WHERE u_name='$u_name'";

    if (mysqli_query($conn,$sql)) {
         echo "<script>alert('Successfully Applied');window.location = 'status.php';</script>";
       } else{
        echo "error updating records".mysqli_error($conn);
       }  }
     }else{
      echo "<script>alert('You dont qualify for a bursary');</script>";
     }

 }
 ?>

    















