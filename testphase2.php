<?php 
include "config.php";
session_start();
if(isset($_GET['id'])){
  $table= $_GET['id'];
$query = "SELECT * FROM {$table} ";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);

if(isset($_POST['submit'])){
  $counter=  $rows;
 
  $num =1;
  while($num<=$counter){
    if($num==1){
             $q = $_POST[$num];
             $queryf = "INSERT INTO `{$table}_submit`(`{$num}`) VALUES ('{$q}')";
             mysqli_query($conn,$queryf) or die("connection failed"  .mysqli_error($conn));
    }else{
     $queryz = "SELECT* FROM `{$table}_submit`";
     $resultz= mysqli_query($conn,$queryz);
     $maxz  =mysqli_num_rows($resultz);
     $q = $_POST[$num];
    $queryf = "UPDATE `{$table}_submit` SET `{$num}` = '{$q}' WHERE `{$table}_submit`.`id` = {$maxz}" or die("queryf failed" . mysqli_error($conn) );
     mysqli_query($conn,$queryf);
    }
   $num++;
  }
  $queryz = "SELECT* FROM `{$table}_submit`";
  $resultz= mysqli_query($conn,$queryz);
  $maxz  =mysqli_num_rows($resultz);
  $_SESSION['id'] =  $maxz;
  $_SESSION['max'] =  $rows;  
  $_SESSION['table']  =$table;
header("location:result.php");
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="style.css">
     <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Conduct a quick test</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    </head> 
<body>
  <div class="layer">
<nav class="navbar navbar-expand-sm navbar-light bg-light ">
     <div class="col-7">
     <img src="logolight.png" alt="" style="width:90px; height:25px;">
    </div>    

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse collpase navs" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100 ">
           <li class="nav-item">
           <a href="about.php" class="nav-link custombtn" style="">About</a>
           </li>  
        </ul>
</nav>
<?php

if($rows > 0){
?>
<div class="container-fluid ">
 <div class="row ">
     <div class="col-12 text-center bg-dark p-4 text-light">
     <p class="display-3 m-0"><?php echo $table ?></p>
     <p class="lead ">Subject</p>
     </div>
 </div>
 <div class="container m-2">
 <form action="<?php echo $_SERVER['PHP_SELF'] ."?id=$table"; ?>" method="post">
  <?php
  $op = 0;
  $i= 1;
  while($row  =  mysqli_fetch_assoc($result)){
  ?>
 <div class="row justify-content-center m-3 p-3" style="background:#f2f2f2;box-shadow:0 1px 4px 0 rgba(12, 12, 13, 0.1);">
 <?php
if($row['type']  == 1 ){
  $op++;  
 ?>

   <div class="col-md-8" style="">
   <p class="lead"></p>
   <p class="h4"><?php echo $row['que']; ?></p>
   <div style="display:flex;flex-direction:column;text-align:left;justify-content-flex-start">
   <div class="custom-control custom-radio op<?php echo $op;?>1">
  <input type="radio" id="<?php echo $i;?>1" name="<?php echo $i;?>" class="custom-control-input " value="1">
  <label class="custom-control-label" for="<?php echo $i;?>1"><?php echo $row['ansc'] ?></label>
</div>
<div class="custom-control custom-radio op<?php echo $op;?>2">
  <input type="radio" id="<?php echo $i;?>2" name="<?php echo $i;?>" class="custom-control-input "  value="2">
  <label class="custom-control-label" for="<?php echo $i;?>2"><?php echo $row['answ1'] ?></label>
</div>
<?php  
if($row['answ2'] == ''){
  echo "</div></div>";
}else{?>
<div class="custom-control custom-radio op<?php echo $op;?>3">
  <input type="radio" id="<?php echo $i;?>3" name="<?php echo $i;?>" class="custom-control-input "  value="3">
  <label class="custom-control-label" for="<?php echo $i;?>3"><?php echo $row['answ2'] ?></label>
</div>
<div class="custom-control custom-radio op<?php echo $op;?>4">
  <input type="radio" id="<?php echo $i;?>4" name="<?php echo $i;?>" class="custom-control-input "  value="4">
  <label class="custom-control-label" for="<?php echo $i;?>4"><?php echo $row['answ3'] ?></label>
</div>
</div>
   </div>
<?php }}elseif ($row['type']  == 2 ) {
  $op++;
  ?>
   <div class="col-md-8 h-100 p-3">
   <div class="col-12 w-100 justify-content-center text-center">
   <img src="upload/<?php echo $row['img'];?>" alt="" class="img_full img-thumbnail" >  
   </div>
   <div class="col-12 text-center" style="transform:translateY(50%);">
   <a href="viewimg.php?id=<?php echo $row['img']?>" target="_blank" class="custombtn">viewimage</a>
   </div>
   <?php  
if($row['que'] == ''){
  echo "</div></div>";
}else{?>
   <p class="h4"><?php echo $row['que']; ?></p>
   <div style="display:flex;flex-direction:column;text-align:left;justify-content-flex-start">
   <div class="custom-control custom-radio op<?php echo $op;?>1">
  <input type="radio" id="<?php echo $i;?>1" name="<?php echo $i;?>" class="custom-control-input" value="1">
  <label class="custom-control-label" for="<?php echo $i;?>1"><?php echo $row['ansc'] ?></label>
</div>
<div class="custom-control custom-radio op<?php echo $op;?>2">
  <input type="radio" id="<?php echo $i;?>2" name="<?php echo $i;?>" class="custom-control-input"  value="2">
  <label class="custom-control-label" for="<?php echo $i;?>2"><?php echo $row['answ1'] ?></label>
</div>
<?php  
if($row['answ2'] == ''){
  echo "</div></div>";
}else{?>
<div class="custom-control custom-radio op<?php echo $op;?>3">
  <input type="radio" id="<?php echo $i;?>3" name="<?php echo $i;?>" class="custom-control-input"  value="3">
  <label class="custom-control-label" for="<?php echo $i;?>3"><?php echo $row['answ2'] ?></label>
</div>
<div class="custom-control custom-radio op<?php echo $op;?>4">
  <input type="radio" id="<?php echo $i;?>4" name="<?php echo $i;?>" class="custom-control-input"  value="4">
  <label class="custom-control-label" for="<?php echo $i;?>4"><?php echo $row['answ3'] ?></label>
</div>
</div>
   </div>
<?php }}}else{  ?>
    <div class="col-md-8">
    <p class="h4"><?php echo $row['que']; ?></p>
    <div class="form-group">
      <input type="text"
        class="form-control" name="<?php echo $i?>" id="" aria-describedby="helpId" placeholder="">
    </div>
    </div>
<?php } ?>

</div>
<?php
  $i++;
  }

  ?>
  <button type="submit" class="custombtn m-4" name="submit">Submit</button>
  <p class="leadop" style="display:none;"><?php echo $op;?></p>
  </form>
  
  <?php
 ?>
 </div>

</div>

</div>
   <?php
  }
   }else{
    echo "<p class='display-3'>Please check the link</p>";
   }
   ?>
   
<script src="phase2.js"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>