<?php
   include('php/db.php');   
   ?>
   <?php
 $id = isset($_GET['id']) ? $_GET['id'] : "";
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
    <div class="card " style="border:none; background:#f1f1f1;">
    <header class="w3-container w3-center w3-padding-8"> 
  <h1><b>OUR BLOG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
</header>
    <div class="card  col-12" style="border:none;">

    <?php 
                  $querry = "Select * from ourblog where id = '$id'";
                  $result = mysqli_query($db,$querry);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          ?>
    <div class="card " style="border:none;">
    <div class="row">
    <div class="col-lg-7 col-8">
    <h3 class="card-title mt-4 ml-3 mb-4 "><?php echo $row["title"] ?></h3>
    <h5 class="card-title mt-n3 ml-3 mb-4 "><?php echo $row["date"] ?></h5>
    </div>
   <div class="col-lg-5 col-4 mt-4 text-right">
   <?php include "share.php" ?>
   </div>
   </div>
  <img src="<?php echo $row["image"] ?>" class="mt-lg-0 mt-4 card-img-top" alt="...">
  <div class="card-body">
    
    <p class="card-text text-justify"><?php echo $row["content"] ?></p>
  </div>
</div>

<?php }
                  }
                  ?>
<h3 class="ml-5 text-success">Related Articles</h3>
<div class="row mb-4 mt-4 ml-3">

<?php 
                  $querry = "Select * from ourblog where id< 5";
                  $result = mysqli_query($db,$querry);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          ?>
<div class="col-lg-3 col-12 mb-lg-0 mb-4" style="">
<div class="card" style="box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%); width: 18rem;">
  <img src="<?php echo $row["image"] ?>" class="card-img-top" style="height:25vh;" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["title"] ?></h5>
    <p class="card-text"><?php echo $row["description"] ?></p>
    <a href="blogpage.php?id=<?php echo $row["id"] ?>" class="btn btn-success" style="color:white; text-decoration:none;">Read more</a>
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
   </body>
</html>