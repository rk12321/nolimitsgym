<?php
   include('sessionforadmin.php');
   include('php/db.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <title>ADMIN PANEL</title>
      <style>
         body{
         overflow-x:hidden;
         }
      </style>
   </head>
   <body>
      <div class="p-2 text-white" style="background:sandybrown;">
         <div class="row p-1 text-center">
            <div class="col-4">
               <h5 style="cursor:pointer;" id="viewitem"> View</h5>
            </div>
            <div class="col-4">
               <h5 style="cursor:pointer;" id="additem">   Add an Item</h5>
            </div>
            <div class="col-4">
               <h5 style="cursor:pointer;" id="updateitem"> Update an Item</h5>
            </div>
         </div>
      </div>
      <div class="" id="itemview">
         <h4 class="text-success text-center mt-3 mb-4">SUPPLEMENTS</h4>
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">S no</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Category</th>
                  <th scope="col">Stock left</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Per scoop details</th>
                  <th scope="col"> Images</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  $querry = "Select * from supplements ";
                  $result = mysqli_query($db,$querry);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          ?>
               <tr>
                  <td><?php echo $row["id"] ?></td>
                  <td><?php echo $row["name"] ?></td>
                  <td><?php echo $row["category"] ?></td>
                  <td><?php echo $row["stocks"] ?></td>
                  <td><?php echo $row["price"] ?></td>
                  <td><?php echo $row["perscoopdetails"] ?></td>
                  <td><?php echo $row["images"] ?></td>
               </tr>
               <?php }
                  }
                  ?>
            </tbody>
         </table>
      </div>
      <div class="d-none mb-5" id="itemadd">
         <h4 class="text-success text-center mt-3">SUPPLEMENTS</h4>
         <div class="alert alert-info alert-dismissible fade" role="alert" style="position: absolute; float: right; margin-left:75%; margin-top:40rem;" id="alertfornewsletter">
            <span class="" id="alertnamefornewsletter">
            </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:11px;">Close</span>
            </button>
         </div>
         <form action = "" method = "post">
            <div class="col-4">              <label>Product Name  :</label></div>
            <div class="col-8"><input type = "text" style="width:80rem;" id = "prodname" name = "prodname" class = "box"/></div>
            <br />
            <div class="col-4">                 <label>Category  :</label></div>
            <div class="col-8"><input type = "text" id = "category" style="width:80rem;" name = "category" class = "box"/></div>
            <br /><br />
            <div class="col-4">                  <label>Stock left  :</label></div>
            <div class="col-8"><input type = "text" id = "stock" style="width:80rem;" name = "stock" class = "box" /></div>
            <br/><br />
            <div class="col-4">             <label>Product Price  :</label></div>
            <div class="col-8"><input type = "text" id = "prodprice" style="width:80rem;" name = "prodprice" class = "box"/></div>
            <br /><br />
            <div class="col-4">             <label>Per scoop details  :</label></div>
            <div class="col-8"><input type = "text" id = "perscoop" style="width:80rem;" name = "perscoop" class = "box" /></div>
            <br/><br />
            <div class="col-4">             <label>Images  :</label></div>
            <div class="col-8"><input type = "text" id = "image" style="width:80rem;" name = "image" class = "box" /></div>
            <br/><br />
            <div class="text-center">
               <input type = "submit" class="bg-success text-white" id="showalert123" value = " Add Product"/><br />
            </div>
         </form>
      </div>
      <div class="d-none" id="itemupdate">
         <h4 class="text-success text-center mt-3">SUPPLEMENTS</h4>
         <div class="alert alert-info alert-dismissible fade" role="alert" style="position: absolute; float: right; margin-left:75%; margin-top:20rem;" id="alertforupdate">
            <span class="" id="alertnameforupdate">
            </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:11px;">Close</span>
            </button>
         </div>
         <form action = "" method = "post">
            <h5 class="ml-3">Write the I'd of the product you want to update and then add the updated informations.</h5>
            <div class="col-4">              <label>Product I'd  :</label></div>
            <div class="col-8"><input type = "text" style="width:80rem;" id = "prodid" name = "prodname" class = "box"/></div>
            <br />
            <div class="col-4">                  <label>Stock left  :</label></div>
            <div class="col-8"><input type = "text" id = "stockleft" style="width:80rem;" name = "stock" class = "box" /></div>
            <br/><br />
            <div class="col-4">             <label>Product Price  :</label></div>
            <div class="col-8"><input type = "text" id = "prodpricechange" style="width:80rem;" name = "prodprice" class = "box"/></div>
            <br /><br />
            <div class="text-center">
               <input type = "submit" class="bg-success text-white" id="updateprod" value = " Update Product"/><br />
            </div>
         </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="js/custom.js"></script>
      <script>
         $('#showalert123').on("click",function() {
           
            event.preventDefault();
               $.ajax({
                 url: 'insertbyadmin.php',
                 type: 'POST',
                 data: {
                     prodname: $("#prodname").val(),
                  category: $("#category").val(),
                     stock: $("#stock").val(),
                     prodprice: $("#prodprice").val(),
                     perscoop: $("#perscoop").val(),
                     image: $("#image").val(),
                     prodid: $("#prodid").val(),
                 },
                  
         
                success: function(data) {
                  console.log("done");
                  $("#alertfornewsletter").addClass("show");     
                   $("#alertnamefornewsletter").html(data);
                   
               
                }
               
             }); 
           
         });
      </script>
      <script>
         $('#updateprod').on("click",function() {
           
            event.preventDefault();
               $.ajax({
                 url: 'updatebyadmin.php',
                 type: 'POST',
                 data: {
                     prodid: $("#prodid").val(),
                     stock: $("#stockleft").val(),
                     prodprice: $("#prodpricechange").val(),
                       },
                  
         
                success: function(data) {
                  console.log("done");
                  $("#alertforupdate").addClass("show");     
                   $("#alertnameforupdate").html(data);
                   
               
                }
               
             }); 
           
         });
      </script>
   </body>
</html>