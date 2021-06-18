<?php
include "config.php";
session_start();
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
$table =$_SESSION['table'];
$query="SELECT* FROM {$table}_submit WHERE id = {$id}";
$result  = mysqli_query($conn,$query) or die("connection failed");

$num = 1;
$marks=0;
$query2="SELECT* FROM {$table}";
$result2  = mysqli_query($conn,$query2) or die("connection failed");
$rows= mysqli_num_rows($result2);
$number= 0;
while($fetch  = mysqli_fetch_assoc($result2)){
    if($fetch['type']==1 or $fetch['type']==2){
      $number++;
   }else{
     
   }
}
$row = mysqli_fetch_assoc($result);
$max =$_SESSION['max'] ;
while($num<=$max){
    $serial  =  $row[$num];
    if($serial==1){
        $marks++;
    }else{
        
    }
    $num++;
}
$query3 = "UPDATE `{$table}_submit` SET `marks` = {$marks} WHERE `id` = $id";
mysqli_query($conn,$query3) or die("query failed"  . mysqli_error($conn));

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
<body>
  <div class="layer">
<nav class="navbar navbar-expand-sm navbar-light bg-light ">
     <div class="col-7">
     <img src="PNG.png" alt=""  style="width:20px;height:15px;">
     <small>XenonTC</small>
    
    </div>    

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        
    </button>
    <div class="collapse navbar-collapse collpase navs" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100 ">
           <li class="nav-item">
           <a href="about.php" class="nav-link custombtn" style="">About</a>
           </li>  
           
        </ul>
</nav>
</div>

<div class="container">

<div class="row showcase">

<div class="col-md-12 text-center m-0 p-0">
<img src="result.jpg" alt="" style="border-radius:100%;width:120px;height:120px;border-left:14px solid #00a2e8;border-top:14px solid #00a2e8;">
</div>
<div class="col-md-12 col-12 text-md-center text-center showcase2">
<p class="display-4 m-0">Your Result</p>
<p class="lead">Your response is yet received scroll down for detail.</p>

</div>

<div class="row justify-content-center  p-4 w-100">
<div class="col-md-3 col-9 text-center justify-content-center">
<p class="lead" style="opacity:.5;">Your Score</p>
<div class="box text-light bg-dark p-1 align-items-center text-center" style="height:40px; border-radius:5px ;">
<p class="lead"><?php echo $marks ."/".$number?></p>


</div>
</div>
</div>

<div class="row justify-content-center w-100 p-4 m-4" >
<div class="col-12 text-center align-items-center " style="align-items:center;opacity:.5;">
<p class="lead m-0 " style="font-size:100%">Developed by Dilip suthar</p>
<small class="p-0 m-0">Xenon &copy; 2020</small>
</div>
</div>
</div>
</body>
<?php
}else{
 echo "please fill the form.";
}
?>
