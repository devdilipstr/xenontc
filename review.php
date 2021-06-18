<?php 
include "config.php";
session_start();
if(isset($_POST['out'])){
    session_unset();
    
}
if(isset($_SESSION['uid'])){
    $img = $_SESSION['profile'];
    $body = 0;
    if(isset($_POST['submit'])){
       $uid = $_SESSION['uid'];
       $comment  =$_POST['comment'];
       $rate   = $_POST['rate'];
       $query = "INSERT INTO `reviews` (`uid`, `comment`, `rate`) VALUES ({$uid}, '{$comment}', '{$rate}') ";
       mysqli_query($conn,$query);
       $body = 1;
    }
if($body==0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css
     <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <title>Conduct a quick test</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    </head> 
    <style>
        *{
            
        }
        .star1:hover{
            border:0;
            background-color:none;
        }
    </style>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
     <div class="col-7">
     <img src="logolight.png" alt="" style="width:90px; height:25px;">
    </div>    

    <button class="navbar-toggler d-lg-none border-0 " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
       <img src="navbar.png" alt="" style="width:20px;height:20px;">
    </button>
    <div class="collapse navbar-collapse collpase navs" id="collapsibleNavId" >
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 w-100 ">
        <li class="nav-item"><a href="conduct.php" class="nav-link">Home</a></li>
        <li class="nav-item">
              <a href="about.php" class="custombtn m-3 profile">Back</a>
              
              </li>            

            <li class="nav-item dropdown">
                <button  class="nav-link bg-light border-0 p-2" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="upload/<?php echo $_SESSION['profile'];?>" alt="" style="width:40px;height:40px;border-radius:100%;"></button>
                <div class="dropdown-menu drp p-3 " aria-labelledby="dropdownId" style="" >
                    <p class="h5 m-md-0"><?php echo $_SESSION['uname']; ?></p>
                    <small class="small m-md-0 "><?php echo $_SESSION['sub']; ?></small>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <button type="submit" class="custombtn m-3 text-blue" name="out">log-out</button>    
                    </form>
                   
                  e</a>
                    
                </div>
            </li>
                      </ul>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center p-3 ">
        
        <div class="col-12 text-center">
        <p class="display-4">Write it!</p>
        </div>
        <div class="col-md-6 bg-light p-4" style="border-bottom:10px solid #00a2e8;border-radius:2px;box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);" >
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" class="h-100 bg-light p-4" >
      <div class="col-md-12">
      <p class="lead">Rate us</p>
          <div class="form-group">
          <div class="row text-center" style="transform:translateX(5%);">
          
        
            <div class="col-2 bg-none">
            <button type="button" class="border-0 bg-light h-100 star1 border-0" style="border:0;">
            <img src="team/unselectstar.png" alt="" style="width:100%;" class="star1img">
            </button>
            </div>
            <div class="col-2">
                
            <button type="button" class="border-0 bg-light star2" >
            <img src="team/unselectstar.png" alt="" style="width:100%;" class="star2img">
            </button>

            </div>
            <div class="col-2">
            <button type="button" class="border-0 bg-light star3">
            <img src="team/unselectstar.png" alt="" style="width:100%;" class="star3img">
            </button>

            </div>
            <div class="col-2">
            <button type="button" class="border-0 bg-light star4">
            <img src="team/unselectstar.png" alt="" style="width:100%;" class="star4img">
            </button>

            </div>
            <div class="col-2">
            <button type="button" class="border-0 bg-light star5">
            <img src="team/unselectstar.png" alt="" style="width:100%;" class="star5img">
            </button>

            </div>
        
            </div>
           </div>
           <div class="form-group">
             <div class="form-group">
               <label for="">How was your experience with us</label>
               <textarea class="form-control" name="comment" id="" rows="3"></textarea>
             </div>
           </div>
        <input type="text" class="rate" name="rate" style="display:none;">
          
      <div class="col-12 text-center p-2">
      <button type="submit" class="custombtn" name="submit">Submit</button>
      
      </div>
      </form>
      
    </div>
    </div>
    
</div>
<?php
}else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <title>Conduct a quick test</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    </head> 
    <style>
        *{
            
        }
        .star1:hover{
            border:0;
            background-color:none;
        }
    </style>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
     <div class="col-7">
   <img src="logolight.png" alt="" style="width:90px; height:25px;"> 
    </div>    

    <button class="navbar-toggler d-lg-none border-0 " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
       <img src="navbar.png" alt="" style="width:20px;height:20px;">
    </button>
    <div class="collapse navbar-collapse collpase navs" id="collapsibleNavId" >
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 w-100 ">
        <li class="nav-item"><a href="conduct.php" class="nav-link">Home</a></li>
        <li class="nav-item">
              <a href="about.php" class="custombtn m-3 profile">Back</a>
              
              </li>            

            <li class="nav-item dropdown">
                <button  class="nav-link bg-light border-0 p-2" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="upload/<?php echo $_SESSION['profile'];?>" alt="" style="width:40px;height:40px;border-radius:100%;"></button>
                <div class="dropdown-menu drp p-3 " aria-labelledby="dropdownId" style="" >
                    <p class="h5 m-md-0"><?php echo $_SESSION['uname']; ?></p>
                    <small class="small m-md-0 "><?php echo $_SESSION['sub']; ?></small>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <button type="submit" class="custombtn m-3 text-blue" name="out">log-out</button>    
                    </form>
                   
                    <a href="editp.ph?id=<?php echo $_SESSION['id']?>" class="custombtn m-3 profile" >Profile</a>
                    
                </div>
            </li>
                      </ul>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center p-3  m-4">
        
        <div class="col-12 text-center">
       
        </div>
        <div class="col-md-6 bg-light p-4" style="border-bottom:10px solid #00a2e8;border-radius:2px;box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);" >
         
<div class="col-md-12 text-center m-0 p-0">
<img src="girl.jpg" alt="" style="border-radius:100%;width:120px;height:120px;border-left:14px solid #00a2e8;border-top:14px solid #00a2e8;">
</div>

<div class="col-md-12 col-12 text-md-center text-center showcase2">
<p class="display-4 m-0">Thank you!</p>
<p class="lead">for giving your testimonial using Xenon Test Conductor</p>

</div>
      </form>
      
    </div>
    </div>
    
</div>
<?php
}}else{
    header('location:logint.php');
}
?>

<script src="stars.js"></script>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>