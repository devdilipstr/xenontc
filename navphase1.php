
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
     <div class="col-7">
      <a href="/"><img src="logolight.png" alt="" style="width:30px; height:30px;margin:10px"></a>
        </div>    

    <button class="navbar-toggler d-lg-none border-0 " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
       <img src="navbar.png" alt="" style="width:20px;height:20px;">
    </button>
    <div class="collapse navbar-collapse collpase navs" id="collapsibleNavId" >
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 w-100 ">
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item dropdown">
                <button  class="nav-link bg-light border-0 p-2" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="upload/<?php echo $_SESSION['profile'];?>" alt="" style="width:40px;height:40px;border-radius:100%;"></button>
                <div class="dropdown-menu drp p-3 " aria-labelledby="dropdownId" style="" >
                    <p class="h5 m-md-0"><?php echo $_SESSION['uname']; ?></p>
                    <small class="small m-md-0 "><?php echo $_SESSION['sub']; ?></small>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <button type="submit" class="custombtn m-3 text-blue" name="submit">log-out</button>    
                    </form>
                   
                   
                </div>
            </li>
            
        </ul>
    </div>
</nav>