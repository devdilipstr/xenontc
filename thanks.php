<?php 
include "config.php";
session_start();
if(isset($_POST['out'])){
    session_unset();
}

if(isset($_SESSION['table'])){
    $link= $_SESSION['table'];
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
    </head>  <style>
        @media(min-width:480px){
        .dropdown-menu{
            transform:translateY(80%);
        }
    }
    </style>
</head> 
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
     <div class="col-7 m-2">
 <img src="logolight.png" alt="" style="width:90px; height:25px;">
    </div>    
    <button class="navbar-toggler d-lg-none border-0" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <img src="navbar.png" alt="" style="width:20px;height:20px;border:0;">
    </button>
    <div class="collapse navbar-collapse collpase navs" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100 ">
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            <li class="nav-item dropdown">
                <button  class="nav-link bg-light border-0 p-2 " href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="upload/<?php echo $_SESSION['profile'];?>" alt="" style="width:40px;height:40px;border-radius:100%;"></button>
                <div class="dropdown-menu drp p-4 sticky-top" aria-labelledby="dropdownId" style="z-index:10000;">
                    <p class="h2 m-md-0"><?php echo $_SESSION['uname']?></p>
                    form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <button type="submit" class="custombtn m-3 text-blue" name="submit">log-out</button>    
                    </form>                    
                </div>
            </li>
            
        </ul>
    </div>
    
</nav>
<div class="container">

<div class="row showcase">

<div class="col-md-12 text-center m-0 p-0">
<img src="girl.jpg" alt="" style="border-radius:100%;width:120px;height:120px;border-left:14px solid #00a2e8;border-top:14px solid #00a2e8;">
</div>
<div class="col-md-12 col-12 text-md-center text-center showcase2">
<p class="display-4 m-0">Thank you!</p>
<p class="lead">for using Xenon Test Conductor</p>

</div>

<div class="row justify-content-center  p-4 w-100">
<div class="col-9 text-center justify-content-center">
<p class="lead" style="opacity:.5;">This is your test link</p>
<div class="box text-light bg-dark p-1 align-items-center text-center" style="height:40px; border-radius:5px ;">
<input type="text" value="https://xenontc.000webhostapp.com/testphase2.php?id=<?php echo $link?>" class="bg-dark border-0 w-100 text-light copytext1" style="overflow:hidden;">
<button class=" custombtn m-3 copybtn1 " data-toggle="modal" data-target="#exampleModal">copy</button>
<div class="box text-light bg-dark p-1 align-items-center text-center" style="height:40px; border-radius:5px ;">
<input type="text" value="https://xenontc.000webhostapp.com/resulttab.php?t=<?php echo $link?>" class="bg-dark border-0 w-100 text-light copytext2" style="overflow:hidden;">
<button class=" custombtn m-3 copybtn2 " data-toggle="modal" data-target="#exampleModal">copy</button>
</div>
</div>
</div>

<div class="row justify-content-center w-100 p-4 m-4" style="transform:translateY(140%);">
<div class="col-12 text-center align-items-center " style="align-items:center;opacity:.5;">
<p class="lead m-0 " style="font-size:100%">Developed by Dilip suthar</p>
<small class="p-0 m-0">Xenon &copy; 2020</small>
</div>
</div>
</div>
<!-- modal box of copy -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">XenonTC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="lead m-0">Link is copied</p>
        <p class="small">Send the link to your students.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>

<?php
}else{
header("location:logint.php");
}
?>
<script>
  var copyP= document.querySelector('.copytext1');
  var copyP1= document.querySelector('.copytext2');
  const copybtn= document.querySelector('.copybtn1');
  const copybtn1= document.querySelector('.copybtn2');
  var copyText = copyP.textContent;
  var copyText2 = copyP1.textContent;

  copybtn.addEventListener('click', ()=>{
  copyP.select();
  copyP.setSelectionRange(0,99999);
  document.execCommand("copy");
  })
  copybtn1.addEventListener('click', ()=>{
  copyP1.select();
  copyP1.setSelectionRange(0,99999);
  document.execCommand("copy");
  })

</script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>