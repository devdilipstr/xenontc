<?php 
include "config.php";
session_start();
if(isset($_POST['submit'])){
    session_unset();
    
}
if(isset($_SESSION['uid'])){
    $img = $_SESSION['profile'];
    
    
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
    
<body>
<?php
include "navphase1.php";
?>
<div class="container-fluid">
<div class="row showcase">

<div class="col-md-6 text-center m-0 p-0">
<img src="PNG.png" alt="">
</div>
<div class="col-md-6 col-12 text-md-left  text-center showcase2">
<p class="h1">Welcome!</p>
<p class="lead">Click the button below to conduct a quick test</p>
<a href="conductphase1.php" class="custombtn">Conduct</a>
</div>

<div class="row justify-content-center  p-4 w-100">
<div class="col-9">
<img src="options.png" alt="" style="width:100%;">
</div>
</div>

<div class="row justify-content-center w-100" >
<div class="col-12 text-center align-items-center " style="align-items:center;opacity:.5;">
<p class="lead m-0 " style="font-size:100%">Developed by Dilip suthar</p>
<small class="p-0 m-0">Xenon &copy; 2020</small>
</div>
</div>
</div>

</div>

   <?php 
   }else{
    header("location:logint.php");
   }?>
<script>
const toggler = document.querySelector('.navbar-toggler');
toggler.addEventListner("click" , ()=>{
    console.log("hello");
})
</script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>