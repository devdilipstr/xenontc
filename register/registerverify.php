<?php
include "../config.php";
include "smtpconfig.php";
if(isset($_POST['submit'])){
    $verify = $_POST['mail_to_verify'];    
    $query = "SELECT* FROM `login`";
    $check= mysqli_query($conn,$query);
    
    $counter = 0;
    while($row = mysqli_fetch_assoc($check)){
       if($verify==$row['mail']){
           $counter++;
       }else{

    }
    }   
    if($counter<=0){
    $max  = 999999;
    $min = 100000;
    $code   = rand($min,$max);
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer; 
    // $mail->SMTPDebug = 3;                                   // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username =$mailid;                 // SMTP username
$mail->Password = $pass;                          // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($mailid, 'XenonTestConductor');
$mail->addAddress($verify, 'Dear Applicant');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('business.xenon@outlook.in', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('../PNG.png', 'PNG');    // Optional name
$mail->addEmbeddedImage('../logo.png','PNG');
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'verification';
$mail->Body    = '
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>XenonTC</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<style>
 *{
    font-family: Poppins, sans-serif; 

 }
 
.logo{
        width:300px;    
        height:160px;
        }
      @media(max-width:310px){
          .logo{
              width:100%;
              height:100%;
          }
      }
</style>
</head>
<body>
  <div class="container">
  <div class="row m-4 justify-content-center">
  <div class=""  text-center align-items-center m-0"  >
  <img src="cid:PNG" alt="" class="logo">
  </div>
  
  <div class="col-12">
  <div class="row justify-content-center" style="padding-top: 10vh;text-align:center;">
  <form   class="bg-light p-4" style="border-radius:2px;box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);">
  <p class="lead" style="font-size: 30px;font-weight: bolder;">'.$code.'</p>
  <h4>This is your One Time Password</h4>
  <small>Please do not share this OTP</small>
  </form>
  </div>
  <div class="col-12" style="width:100%;text-align:left;">
  <h2>Team</h2>
  <p class="lead">Xenon</p>
  </div>
  </div>
</body>
</html>  

';
// $mail->AltBody = 'ds';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    session_start();
    $_SESSION['mail'] = $verify;
    $_SESSION['otp'] = $code;
    header("location:verifyotp.php");
}
   }
else{
    echo '<div class="alert alert-primary text-center" role="alert">';
    echo '<strong>Email address is already used please try with another one.</strong>';
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
      <img src="../logo.png" alt=""  class="logo">
      </div><div class="col-12 m-0 p-0 text-center align-items-center "  >
      </div>
      
      
      <div class="col-12">
      <div class="row justify-content-center " style="padding-top: 10vh;">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="bg-light p-4" style="border-radius:2px;box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);">
      <div class="col-md-12">
      <p class="h2">Sign Up</p>
        <div class="form-group">
          <label for="">Enter Your Email Address:</label>
          <input type="text"
            class="form-control" name="mail_to_verify" id="" aria-describedby="helpId" placeholder="">
        </div>
        
      </div>
      <div class="col-12">
      <button type="submit" class="custombtn" name="submit">Verify</button>
      <a href="../logint.php" type="button" class="custombtn">Sign In</a>
      </div>
      </form>
      
      </div>
      </div>    
  
</body>
</html>