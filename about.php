<?php 
include "config.php";
session_start();
if(isset($_POST['submit'])){
    session_unset();
    
}   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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
    </style>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
     <div class="col-7">
      <a href="/"><img src="logolight.png" alt="logo" style="width:30px; height:30px;"></a>
    </div>    

    <button class="navbar-toggler d-lg-none border-0 " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
       <img src="navbar.png" alt="" style="width:20px;height:20px;">
    </button>
    <div class="collapse navbar-collapse collpase navs" id="collapsibleNavId" >
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 w-100 ">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <?php
        if(isset($_SESSION['uid'])){
            ?>
        <li class="nav-item">
              <a href="review.php" class="custombtn m-md-3 profile">+Testimonial</a>
              
              </li>            

            <li class="nav-item dropdown m-md-0 m-3">
                <button  class="nav-link bg-light border-0 p-2" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="upload/<?php echo $_SESSION['profile'];?>" alt="" style="width:40px;height:40px;border-radius:100%;"></button>
                <div class="dropdown-menu drp p-3 " aria-labelledby="dropdownId" style="" >
                    <p class="h5 m-md-0"><?php echo $_SESSION['uname']; ?></p>
                    <small class="small m-md-0 "><?php echo $_SESSION['sub']; ?></small>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <button type="submit" class="custombtn m-3 text-blue" name="submit">log-out</button>    
                    </form>
                   
                    
                    
                </div>
            </li>
            <?php
        }else{?>
          
          <a href="logint.php" class="custombtn ">Log in</a>    
        <?php }?>
                      </ul>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center p-3">
        
        <div class="col-12 text-center">
        <p class="display-4">Who we are?</p>
        </div>
        <div class="col-md-6 bg-light p-4" style="border-bottom:10px solid #00a2e8;">
        <div class="col-12 text-center p-3">
        <img src="man.png" alt="" style="width:200px;height:190px;border:20px solid #00a2e8; border-radius:100%;">
        
        </div>
            <p class="lead" style="font-size:26px;">We are <span style="font-weight:bolder;">Xenon</span> ,Xenon is a team of youngest programmer provide different type of free services to the people.Actually We are from India, But we serve the people all over the world</p>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12 text-center p-4 ">
            <div class="display-4 m-0" style="font-weight:bold;">Our team</div>
            
        </div>
    </div>
    <div class="row justify-content-center" >
        <div class="col-md-4 col-11 p-4" >
        <div class="col-12  text-center p-3 bg-light text-light" style="box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);">
        <img src="team/me.png" alt="" style="width:200px;height:200px;border:20px solid #00a2e8; border-radius:100%;">
    </div>
           <div class="col-12 text-center p-3 bg-dark text-light " style="">
           
           <h2 class="h3" style="transform:translateY(40%);">Dilip Suthar</h2>
           <p class="lead m-0 " style="opacity:.5;">Founder</p>
           <p  style="font-weight:10px;"><span style="color:#00a2eB;font-size:20px;">'</span>Xenon is not just a commnity,it is more even that.<span style="color:#00a2eB;font-size:20px;">'</span></p>
           </div>
        </div>
    </div>
    <div class="row">
     <div class="col-12 border-t-1" style="transform:translateY(50%);border-bottom:5px solid #00a2e8;">        
    <p class="display-4 text-center">Testimonial</p>
    </div>
    <div class="col-12">    
    
    <div id="carouselId" class="carousel slide m-4 p-4 bg-light" data-ride="carousel" style="box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);">
        <ol class="carousel-indicators m-4" style="transform:translateY(100%);">
        
            <li class="bg-dark" data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li  class="bg-dark" data-target="#carouselId" data-slide-to="1"></li>
            <li class="bg-dark" data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <?php  
        $query= "SELECT* FROM `reviews`";
        $run  = mysqli_query($conn,$query);
        
    
        ?>
        <div class="carousel-inner" role="listbox">
            <?php 
            $counter = mysqli_num_rows($run);
            
            $num =0;

            while($row =  mysqli_fetch_assoc($run)){
                $uid = $row['uid'];
            $udetail ="SELECT * FROM `login` WHERE `id`={$uid}" or die("query failed");
            $uquery  = mysqli_query($conn,$udetail);
            $ufetch = mysqli_fetch_assoc($uquery);
                
                    if($num==$counter-3){
                    
            ?>
            
            <div class="carousel-item active text-center justify-content-center">
            <div class="col-md-5 text-center justify-content-center m-auto" >
            <img src="team/star<?php echo $row['rate']; ?>.png" alt="" style="width:100%;" class="">
            </div>
            <p class="lead"><span style="color:#00a2eB;font-size:20px;">'</span><?php echo $row['comment'];?><span style="color:#00a2eB;font-size:20px;">'</span></p>
            <img src="upload/<?php echo $ufetch['profile'];?>" alt="" style="width:150px;height:150px;border:20px solid #00a2e8; border-radius:100%;">
            <h2 class="m-0"><?php echo $ufetch['uname'];?></h2>
            <h4 class="small m-0"><?php echo $ufetch['sub'];?></h4>
            </div>
            <?php
        }elseif($num>=$counter-3){
            ?>
            <div class="carousel-item  text-center justify-content-center">
            <div class="col-md-5 text-center justify-content-center m-auto" >
            <img src="team/star<?php echo $row['rate']; ?>.png" alt="" style="width:100%;" class="">
            </div>
            <p class="lead"><span style="color:#00a2eB;font-size:20px;">'</span><?php echo $row['comment'];?><span style="color:#00a2eB;font-size:20px;">'</span></p>
            <img src="upload/<?php echo $ufetch['profile'];?>" alt="" style="width:150px;height:150px;border:20px solid #00a2e8; border-radius:100%;">
            <h2 class="m-0"><?php echo $ufetch['uname'];?></h2>
            <h4 class="small m-0"><?php echo $ufetch['sub'];?></h4>
            </div>
        <?php }else{

        
        }?>
    
        <?php  
        $num++;
        }
        ?>
            </div>
    </div>
    </div>

    </div>
    
</div>
<?php
?>
</script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>