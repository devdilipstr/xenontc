<?php
include "config.php";
  if(isset($_POST['submit'])){
    $user  =mysqli_real_escape_string($conn,$_POST['user'] );
    
    $pass  = $_POST['pass'] ;
    $query = "SELECT * FROM `login` WHERE `uname` = '{$user}'" or die("query failed");
    
    $result = mysqli_query($conn,$query) or die("connection failed" . mysqli_error($conn));
    if(mysqli_num_rows($result)>0){
      $row = mysqli_fetch_assoc($result);
      if($row['uname']==$user && $row['pass']==$pass){
        session_start();
        $_SESSION['uid'] = $row['id'];
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['sub'] = $row['sub'];
        $_SESSION['profile'] = $row['profile'];
        header("location:index.php");
      }else{
        echo "
        <div class='alert alert-danger text-center' role'alert'>
            <strong>Either password or username is incorrect.</strong>
        </div>";            
       
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XenonTC</title
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
    body{
        font-family: 'Poppins', sans-serif;
        overflow-x:hidden;
    }
    
        .logo{
        
        width:300px;    
        height:300px;
        }
        .container{
           display:flex;
           align-items:center;
           justify-content:center;
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
      <div class="container" style="min-height:100vh">
      <div class="row  justify-content-center">
      <div class="  text-center align-items-center m-0"  >
     
      </div><div class="col-md-6 m-0 p-0 text-center align-items-center "  >
      <img src="logo.png" class="logo">
      </div>
      
      
      <div class="col-md-6 justify-content-center" style="align-items:center">
      <div class="row justify-content-center ">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="bg-light p-4" style="border-radius:2px;box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);">
      <div class="col-md-12">
      <p class="h2">Sign In</p>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text"
            class="form-control" name="user" id="" aria-describedby="helpId" placeholder="">
        </div>
      </div>
      <div class="col-md-12">
      <div class="form-group">
          <label for="">Password</label>
          <input type="text"
            class="form-control" name="pass" id="" aria-describedby="helpId" placeholder="">
        </div>
      </div>
      <div class="col-12">
      <button type="submit" class="custombtn" name="submit">Submit</button>
      <a href="register/registerverify.php" type="button" class="custombtn">Register</a>
      </div>
      </form>
      
      </div>
      </div>    
  
</body>
</html>