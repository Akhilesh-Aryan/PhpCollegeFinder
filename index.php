<?php include_once "config/setting.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CollegeFinder</title>
        <link href="bootstrap.css" rel="stylesheet">
    </head>
    <body>
       <?php include_once "config/header.php";?>
       <div class="container mt-3">
           <div class="row">
              <?php
               $calling = callingData('college');
               foreach($calling as $col):
               ?>
               <div class="col-lg-3">
               <div class="card bg-light">
                   <img src="logo/pu.jpg" alt="" class="card-img-top w-50 mx-auto">
                   <div class="card-body">
                       <h5 class="lead"> Purnia College Purnia</h5>
                   </div>
               </div>
                <div class="card bg-light mt-1">
                   <img src="logo/pce.png" alt="" class="card-img-top w-50 mx-auto">
                   <div class="card-body">
                       <h6 class="lead">Purnia College Of Engineering Purnia</h6>
                   </div>
               </div>
               </div>
               <?php endforeach;?>
               <div class="col-lg-9">
                   
               </div>
           </div>
       </div> 
         <?php include_once  "config/footer.php";?>     
    </body>
</html>

