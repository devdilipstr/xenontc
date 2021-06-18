<?php
include "config.php";
$tname =  $_GET['t'];
session_start();
$query2="SELECT* FROM {$tname}";
$result2  = mysqli_query($conn,$query2) or die("connection failed");
$max= mysqli_num_rows($result2);

$query="SELECT* FROM {$tname}_submit";
$result  = mysqli_query($conn,$query) or die("connection failed");
$rows= mysqli_num_rows($result);

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
           <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               
                    </form>
        </ul>
</nav>
</div>
<p class="lead text-center"><?php echo $rows;?>responses</p>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>Serial</th>
            <?php
              $counter = 0;
              while($counter<$max){
            $counter++;
            ?>
            <th><?php echo $counter;?></th>
              <?php } ?>
            <th>Marks</th>
              
        </tr>
    </thead>
    <?php
     $counter1  =0 ;
    while($data  = mysqli_fetch_assoc($result)){
        $counter1++;
        ?>
    <tbody>
        <tr>
            <td scope="row"><?php echo $counter1?></td>
            <?php
            $counter2 = 1;
            while($counter2<=$max){
                
            ?>
            <td><?php echo $data[$counter2];?></td>
            <?php $counter2++;} ?>
            <td><?php echo $data['marks'];?></td>
            
            
        </tr>
    </tbody>
    <?php } ?>
</table>
</div>
</body>

