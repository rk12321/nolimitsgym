<?php
   include('php/db.php');   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="css/index.css">
      <title>BLOG</title>
      <style>
         body{
         overflow-x:hidden;
         }
      </style>
   </head>
   <body>
      <div class="card" style="border:none; background:#f1f1f1;">
         <header class="w3-container w3-center w3-padding-8">
            <h1><b>OUR BLOG</b></h1>
            <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
            <h4 class="text-right mt-lg-n5 mb-4 text-danger" style="cursor:pointer;"><a href="adminofblog.php" style=" text-decoration:none;"><b>Admin?</b></a></h4>
         </header>
         <!--
            <div class="p-3" style="    background: aliceblue;">
            <h4 class="text-center mt-1 text-success" style="cursor:pointer;">OUR BLOG</h4>
            </div>
            -->
         <div class="card  col-12" style="border:none;">
            <div class="row mt-5">
               <div class="col-12 d-lg-none d-block">
                  <div class="card" style="box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);">
                     <img src="img/bimg1.png" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Reetik Pant</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-12 mt-lg-0 mt-5 mx-4" style="">
                  <?php 
                     $querry = "Select * from ourblog";
                     $result = mysqli_query($db,$querry);
                     if($result){
                         while($row=mysqli_fetch_assoc($result)){
                             ?>
                  <div class="card col-10 mb-5 p-0" style="border:none; box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);">
                     <img src="<?php echo $row["image"] ?>" style="" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title"><?php echo $row["title"] ?></h5>
                        <h6 class="card-title mt-n2"><?php echo $row["date"] ?></h6>
                        <p class="card-text "><?php echo $row["description"] ?></p>
                        <div class="text-left ">
                           <a href="blogpage.php?id=<?php echo $row["id"] ?>" class="btn btn-success" style="color:white; text-decoration:none;">Read more</a>
                        </div>
                     </div>
                  </div>
                  <?php }
                     }
                     ?>
               </div>
               <div class="col-3 d-lg-block d-none">
                  <div class="card" style="box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);">
                     <img src="img/bimg1.png" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Reetik Pant</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                  </div>
                  <div class="card mt-5" style="box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);">
                     <div class="card-body">
                        <div class="p-3 mb-4" style="background:#f1f1f1;">
                           <h5 class="card-title text-center">Popular Posts</h5>
                        </div>
                        <?php 
                           $querry = "Select * from ourblog";
                           $result = mysqli_query($db,$querry);
                           if($result){
                               while($row=mysqli_fetch_assoc($result)){
                                   ?>
                        <div class="card mb-3" style="max-width: 540px; cursor:pointer;">
                           <div class="row no-gutters">
                              <div class="col-md-4">
                                 <img src="<?php echo $row["image"] ?>" style="width:6vw; height:100%;" alt="...">
                              </div>
                              <div class="col-md-8">
                                 <div class="card-body">
                                    <h5 class="card-title ml-n3"><?php echo $row["title"] ?></h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php }
                           }
                           ?>
                     </div>
                  </div>
               </div>
               <div class="col-12 d-lg-none d-block">
               <div class="card " style="box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);">
                     <div class="card-body">
                        <div class="p-3 mb-4" style="background:#f1f1f1;">
                           <h5 class="card-title text-center">Popular Posts</h5>
                        </div>
                        <?php 
                           $querry = "Select * from ourblog";
                           $result = mysqli_query($db,$querry);
                           if($result){
                               while($row=mysqli_fetch_assoc($result)){
                                   ?>
                        <div class="card mb-3" style="max-width: 540px; cursor:pointer; box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);">
                           <div class="row no-gutters">
                              <div class="col-md-4">
                                 <img src="<?php echo $row["image"] ?>" style="width:100%; height:100%;" alt="...">
                              </div>
                              <div class="col-md-8">
                                 <div class="card-body">
                                    <h5 class="card-title "><?php echo $row["title"] ?></h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php }
                           }
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
   </body>
</html>