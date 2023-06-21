<?php
   include('php/db.php');   
   include('sessionforblogadmin.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="css/index.css">
   <title>ADMIN PORTAL</title>
      <style>
         body{ 
         overflow-x:hidden;
         }
      </style>
   </head>
   <body style="    background: #f1f1f1;">
   <header class="w3-container w3-center w3-padding-8"> 
  <h1><b>OUR BLOG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>

  <div class="text-right mt-lg-n5 mr-5">
         
               <h6 class="mt-lg-n5 mt-4 text-danger"><a href = "logout.php">Sign Out</a></h6>
               <h6 class="mt-lg-n5 mt-n5">Welcome <span class="text-success"><?php echo $login_session; ?></span></h6> 
               </div>
</header>
   <form action = "" class="mt-4"  method = "post">
            <div class="col-lg-4 col-12">              <label>Blog Title  :</label></div>
            <div class="col-lg-8 col-12"><input type = "text" style="width:150%;" id = "title" name = "title" class = "box"/></div>
            <br />
            <div class="col-lg-4 col-12">                 <label>Blog Description  :</label></div>
            <div class="col-lg-8 col-12"><input type = "text" id = "description" style="width:150%;" name = "description" class = "box"/></div>
            <br />
            <div class="col-lg-4 col-12">                  <label>Blog Content  :</label></div>
            <div class="col-lg-8 col-12"><input type = "text" id = "content" style="height:33rem; width:150%;" name = "content" class = "box" /></div>
            <br/>
            <div class="col-lg-4 col-12">             <label>Blog Image  :</label></div>
            <div class="col-lg-8 col-12"><input type = "text" id = "image" style="width:150%;" name = "image" class = "box"/></div>
            <br />
            <div class="text-center mb-5">
               <input type = "submit" class="bg-success text-white" id="showalert123" value = " Add Blog"/><br />
            </div>
         </form>




         <div class="alert alert-info alert-dismissible fade" role="alert" style="position: absolute; float: right; margin-left:75%; margin-top:-5rem;" id="alertfornewsletter">
            <span class="" id="alertnamefornewsletter">
            </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:11px;">Close</span>
            </button>
         </div>






         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
       <script>
         $('#showalert123').on("click",function() {
           
            event.preventDefault();
               $.ajax({
                 url: 'bloginsertbyadmin.php',
                 type: 'POST',
                 data: {
                     title: $("#title").val(),
                  description: $("#description").val(),
                     content: $("#content").val(),
                     image: $("#image").val(),
                 },
                  
         
                success: function(data) {
                  console.log("done");
                  $("#alertfornewsletter").addClass("show");     
                   $("#alertnamefornewsletter").html(data);
                   
               
                }
               
             }); 
           
         });
      </script>
   </body>
</html>