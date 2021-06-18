<?php 
include "config.php";
session_start();
if(isset($_POST['out'])){
    session_unset();
}

if(isset($_SESSION['uid'])){
   
 if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $time =  $_POST['time'];
    $tname  = $title .$time;
    $query = "CREATE TABLE `{$tname}` ( `id` INT(150) NOT NULL AUTO_INCREMENT , `type` INT(4) NOT NULL , `que` VARCHAR(200) NOT NULL , `ansc` VARCHAR(200) NOT NULL , `answ1` VARCHAR(200) NOT NULL , `answ2` VARCHAR(200) NOT NULL , `answ3` VARCHAR(200) NOT NULL , `img` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; " or die("query failed");
    $result= mysqli_query($conn,$query);
    $max = $_POST['serialnum'];
    $query2 = "CREATE TABLE `{$tname}_submit` ( `id` INT(150) NOT NULL AUTO_INCREMENT ,`marks` INT(150) , PRIMARY KEY (`id`)) ENGINE = InnoDB;" or die("query failed");
    $result2= mysqli_query($conn,$query2) or die("connection2 failed" .mysqli_error($conn));

    $i= 0;
    while($i<$max){
        $i++;
        $ques =$_POST['inputq' . $i];
        $type =$_POST['type' . $i];
        $ansc =$_POST['inputc' . $i];
        $answ1 =$_POST['inputw1' . $i];
        $answ2 =$_POST['inputw2' . $i];
        $answ3 =$_POST['inputw3' . $i];
        if(isset($_FILES['img'.$i])){
            $img= $_FILES['img'.$i]['name'] or die("image not found");
            $img_tmp= $_FILES['img'.$i]['tmp_name'] or die("temp name error");
            move_uploaded_file($img_tmp,"upload/".$img) or die("image upload failed");
            $query = "INSERT INTO `{$tname}` (`type`, `que`, `ansc`, `answ1`, `answ2`, `answ3`,`img`) VALUES('{$type}', '{$ques}', '{$ansc}', '{$answ1}', '{$answ2}', '{$answ3}','{$img}')" or die("query failed");
            $result= mysqli_query($conn,$query)  or die("connection failed" .mysqli_error($conn));
            
        }else{
            $query = "INSERT INTO `{$tname}` (`type`, `que`, `ansc`, `answ1`, `answ2`, `answ3`,`img`) VALUES('{$type}', '{$ques}', '{$ansc}', '{$answ1}', '{$answ2}', '{$answ3}','')" or die("query failed");
            $result= mysqli_query($conn,$query)  or die("connection failed"  .mysqli_error($conn));
        }   
        
        
        // procedues of creating database of submit form
            if($type==3){
                $submitq1 = "ALTER TABLE `{$tname}_submit` ADD `{$i}` VARCHAR(20);" or die("submitq1 failed");
                $submitresult = mysqli_query($conn,$submitq1) or die("submitresult failed " .mysqli_error($conn));
                
            }else{
                $submitq1 = "ALTER TABLE `{$tname}_submit` ADD `{$i}` INT(20)" or die("submitq1 failed");
                $submitresult = mysqli_query($conn,$submitq1) or die("submitresult failed " .mysqli_error($conn));
                
            }

        $_SESSION['table']=$tname;
        $header1 = header("location:thanks.php");
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  
    <title>Conduct a quick test</title>
    <style>
        @media(min-width:480px){
        .dropdown-menu{
            transform:translate(-60%,80%);
        }
    }
    </style>
</head> 
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
     <div class="col-7">
    <a href="/"><img src="logolight.png" alt="" style="width:30px; height:30px;margin:10px"></a>
    </div>    
    <button class="navbar-toggler d-lg-none border-0" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <img src="navbar.png" alt="" style="width:20px;height:20px;border:0;">
    </button>
    <div class="collapse navbar-collapse collpase navs" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100 ">
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item dropdown">
                <button  class="nav-link bg-light border-0 p-2 " href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="upload/<?php echo $_SESSION['profile'];?>" alt="" style="width:40px;height:40px;border-radius:100%;"></button>
                <div class="dropdown-menu drp p-4 sticky-top" aria-labelledby="dropdownId" style="z-index:10000;">
                    <p class="h2 m-md-0"><?php echo $_SESSION['uname']?></p>
                    <small class="small m-md-0 "><?php echo $_SESSION['sub']?></small>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <button type="submit" class="custombtn m-3 text-blue" name="out">log-out</button>    
                    </form>

                </div>
            </li>
            </li>
        </ul>
    </div>
    
</nav>
<div class="row justify-content-center p-3 sticky-top bg-dark">
<div class="col-3  text-center m-md-0 m-1" >
<button class="custombtn obj">Objective</button>
</div>
<div class="col-3 text-center m-md-0 m-1">
<button class="custombtn img">Image</button>
</div>

<div class="col-3 text-center m-md-0 m-1">
<button class="custombtn comp">Com</button>
</div>
</div>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" class="main">
<div class="container main p-4 w-50">
<div class="row justify-content-center align-content-center">


<div class="col-12 p-1 w-100">
<div class="form-group">
  <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="Enter the title">

</div>
</div>
</div>
<div class="row justify-content-center align-content-center">
<div class="col-12 p-1 w-100">
<div class="form-group">
  <input type="text" class="form-control" name="time" id="" aria-describedby="helpId" placeholder="Enter the time duration">
  <small class="small">The test will expire in given time.</small>
</div>
</div>
</div>

</div>
<div class="col-3 col-1 text-center m-md-0 m-1 justify-content-center">
<button type="submit" class="custombtn2 m-2" name="submit" style="z-index:10000;">Submit</button>
</div>
</form>

</div>
   <?php 
   }else{
    header("location:logint.php");
   }?>
 <script src="app.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>