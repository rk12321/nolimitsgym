<?php
   include('session.php');
   include("php/db.php");
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="css/index.css">
      <title>SUPPLEMENTS</title>
      <style>
         body{
         overflow-x:hidden;
         background:#f1f1f1;
         }
      </style>
   </head>
   <body>
      <div class="card text-center">
      <div class="card-header d-lg-block d-none p-4" style="background:aliceblue; border:none;">
         <h6 class="text-right"> <span class="ml-5" style="cursor:pointer;">   HOME
            </span> <span class="ml-5" style="cursor:pointer;">GET MEMBERSHIP </span>
            <span class="ml-5" style="cursor:pointer;">SUPPLEMENTS </span>
            <span class="ml-5" style="cursor:pointer;">BLOG </span>
            <span class="ml-5" style="cursor:pointer;">CONTACT US</span>
         </h6>
      </div>
      <div class="d-lg-none d-block" style="background: darkslategrey;padding: 1rem;">
         <h4 class="text-success">NO LIMITS GYM</h4>
      </div>
         </div>
      <div class="card col-11 container" style="border:none;">
         <div class="p-2 text-white mt-3" style="background:sandybrown;">
            <div class="row text-center">
               <div class="col-4">
                  <h5 class="d-lg-block d-none" style="cursor:pointer;" id="protein">    WHEY PROTEIN</h5>
                  <h6 class="d-block d-lg-none" style="cursor:pointer;" id="proteinsmall">    WHEY PROTEIN</h6>
               </div>
               <div class="col-4">
                  <h5 class="d-lg-block d-none" style="cursor:pointer;" id="stack"> OTHER STACKS</h5>
                  <h6 class="d-block d-lg-none" style="cursor:pointer;" id="stacksmall"> OTHER STACKS</h6>
               </div>
               <div class="col-4">
                  <h5 class="d-lg-block d-none" style="cursor:pointer;" id="accessories"> OTHER ACCESSORIES</h5>
                  <h6 class="d-block d-lg-none" style="cursor:pointer;" id="accessoriessmall"> OTHER ITEMS</h6>
               </div>
            </div>
         </div>
         <div class="card mb-3" id="proteindiv" style="border:none;">
            <div class="row no-gutters">
               <?php 
                  $querry = "Select * from supplements where category='proteins'";
                  $result = mysqli_query($db,$querry);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          ?>
               <div class="col-6">
                  <div class="card mb-3 mt-4" style="max-width: 540px; border:none;">
                     <div class="row no-gutters">
                        <div class="col-md-4">
                           <img class="d-lg-block d-none" src="<?php echo $row["images"] ?>" style="height:31vh" alt="...">
                           <img class="d-block ml-5 d-lg-none" src="<?php echo $row["images"] ?>" style="height:11vh" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title d-lg-block d-none"><?php echo $row["name"] ?></h5>
                              <h6 class="card-title d-block d-lg-none"><?php echo $row["name"] ?></h6>
                              <p class="card-text d-lg-block d-none" ><?php echo $row["perscoopdetails"] ?></p>
                             <p class="card-text d-block d-lg-none" style=" font-size: 11px;"><?php echo $row["perscoopdetails"] ?></p>
                              <p class="card-text text-danger mt-n2 h5">Rs <?php echo $row["price"] ?></p>
                              <h5 class=" btn btn-success text-white"><a href="razorpayconn/checkout.php?price=<?php echo $row["price"] ?>" style="color:white; text-decoration:none;">Buy now</a> </h5>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php }
                  }
                  ?>
            </div>
         </div>
         <div class="card mb-3 d-none" id="stackdiv" style="border:none;">
            <div class="row no-gutters">
               <?php 
                  $querry = "Select * from supplements where category='stack'";
                  $result = mysqli_query($db,$querry);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          ?>
               <div class="col-6">
                  <div class="card mb-3 mt-4" style="max-width: 540px; border:none;">
                     <div class="row no-gutters">
                        <div class="col-md-4">
                           <img class="d-lg-block d-none" src="<?php echo $row["images"] ?>" style="height:31vh" alt="...">
                           <img class="d-block ml-5 d-lg-none" src="<?php echo $row["images"] ?>" style="height:11vh" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title d-lg-block d-none"><?php echo $row["name"] ?></h5>
                              <h6 class="card-title d-block d-lg-none"><?php echo $row["name"] ?></h6>
                              <p class="card-text"><?php echo $row["perscoopdetails"] ?></p>
                              <p class="card-text text-danger mt-n2 h5">Rs <?php echo $row["price"] ?></p>
                              <h5 class=" btn btn-success text-white"><a href="razorpayconn/checkout.php?price=<?php echo $row["price"] ?>" style="color:white; text-decoration:none;">Buy now</a> </h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php }
                  }
                  ?>
            </div>
         </div>
         <div class="card mb-3 d-none" id="accessdiv" style="border:none;">
            <div class="row no-gutters">
               <?php 
                  $querry = "Select * from supplements where category='accessories'";
                  $result = mysqli_query($db,$querry);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          ?>
               <div class="col-6">
                  <div class="card mb-3 mt-4" style="max-width: 540px; border:none;">
                     <div class="row no-gutters">
                        <div class="col-md-4">
                           <img src="<?php echo $row["images"] ?>" style="height:31vh" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title"><?php echo $row["name"] ?></h5>
                              <p class="card-text"><?php echo $row["perscoopdetails"] ?></p>
                              <p class="card-text text-danger mt-n2 h5">Rs <?php echo $row["price"] ?></p>
                              <h5 class=" btn btn-success text-white"><a href="razorpayconn/checkout.php?price=<?php echo $row["price"] ?>" style="color:white; text-decoration:none;">Buy now</a> </h5>
                           </div>
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
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="js/custom.js"></script>
   </body>
</html>