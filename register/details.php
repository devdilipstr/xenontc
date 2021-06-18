<?php
include "../config.php";
include "smtpconfig.php";
session_start();

if(isset($_POST['submit'])){
    $id  = $_SESSION['id'];
    $name  = $_POST['uname'];
    $dest = $_POST['sub'];
    $pass = $_POST['pass'];
    $update_name  = "UPDATE `login` SET `uname` = '{$name}' WHERE `login`.`id` = $id" or die("error code:01@name");
    $update_dest  =  "UPDATE `login` SET `sub` = '{$dest}' WHERE `login`.`id` = $id" or die("error code:02@sub");
    $update_pass  =  "UPDATE `login` SET `pass` = '{$pass}' WHERE `login`.`id` = $id" or die("error code:03@pass");
    $run_name = mysqli_query($conn,$update_name) or die("error code:04@name" . mysqli_error($conn));
    $run_dest = mysqli_query($conn,$update_dest) or die("error code:05@sub" . mysqli_error($conn));
    $run_pass = mysqli_query($conn,$update_pass) or die("error code:06@pass" . mysqli_error($conn));

    $img= $_FILES['img']['name'];
    $img_tmp= $_FILES['img']['tmp_name'];
    move_uploaded_file($img_tmp,"../upload/".$img) or die("image upload failed");
    $query = "UPDATE `login` SET `profile` = '{$img}' WHERE `login`.`id`=$id";
    $result= mysqli_query($conn,$query)  or die("connection failed" .mysqli_error($conn));
    $_SESSION['uid'] = $id;
    $_SESSION['uname'] = $name;
    $_SESSION['sub'] = $dest;
    $_SESSION['profile'] = $img ;
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XenonTC</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../PNG.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
    body{
        font-family: 'Poppins', sans-serif;
    }
    </style>
</head>
<body>
      <div class="container">
      <div class="row m-4 justify-content-center">
      <div class="  text-center align-items-center m-0"  >
      <img src="../logo.png" alt="" class="logo">
      </div>
      
      
      <div class="col-12 h-100">
      <div class="row justify-content-center " style="padding-top: 10vh;">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" class="h-100 bg-light p-4" style="border-radius:2px;box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);">
      <div class="col-md-12">
      <p class="h2">Sign Up</p>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text"
            class="form-control" name="uname" id="" aria-describedby="helpId" aria-autocomplete="none">
          </div>
          <div class="form-group">
          <label for="">Destignation</label>
          <input type="text"
            class="form-control" name="sub" id="" aria-describedby="helpId">
          </div><div class="form-group">
          <label for="">Password</label>
          <input type="password"
            class="form-control" name="pass" id="" aria-describedby="helpId" aria-autocomplete="none">
          </div>
        <div class="form-group">
          <label for="">Select Your Profile Image:</label>
          <input type="file"
            class="form-control" name="img" id="" aria-describedby="helpId" placeholder="">
        </div>
        </div>
      </div>
      <div class="col-12 text-center p-2">
      <button type="submit" class="custombtn" name="submit">SignUp</button>
      
      </div>
      </form>
      
      </div>
      </div>    
  
</body>
</html>