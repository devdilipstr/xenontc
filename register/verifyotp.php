<?php
include "../config.php";
include "smtpconfig.php";
session_start();
if(isset($_POST['submit'])){
$enter_otp = $_POST['OTP_to_verify'];
$otp = $_SESSION['otp'];
$mailid = $_SESSION['mail'];

if($enter_otp==$otp){
    $query= "INSERT INTO `login` (`mail`,`uname`,`pass`,`profile`,`sub`) VALUES ('{$mailid}','','','','')" or die("error 545");
    mysqli_query($conn,$query) or die("error 546" . mysqli_error($conn));
    $max = "SELECT* FROM `login`";
    $result = mysqli_query($conn,$max);
    $maxval = mysqli_num_rows($result);
    $_SESSION['id']  = $maxval;
    header('location:details.php');
}else{
    echo '<div class="alert alert-primary" role="alert">';
    echo "<strong>Please enter correct OTP</strong>";
    echo '</div>';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XenonTC</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/site.webmanifest">
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
      
      
      <div class="col-12">
      <div class="row justify-content-center " style="padding-top: 10vh;">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="bg-light p-4" style="border-radius:2px;box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);">
      <div class="col-md-12">
      <p class="h2">Sign Up</p>
        <div class="form-group">
          <label for="">Enter OTP received at your mail address</label>
          <input type="text"
            class="form-control" name="OTP_to_verify" id="" aria-describedby="helpId" placeholder="">
        </div>
        
      </div>
      <div class="col-12">
      <button type="submit" class="custombtn" name="submit">Verify</button>
      <a href="registerverify.php" type="button" class="custombtn">Send Again</a>   
      </div>
      </form>
      
      </div>
      </div>    
  
</body>
</html>