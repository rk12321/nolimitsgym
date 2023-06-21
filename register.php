<?php include('php/db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <title>Register</title>
    <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
</head>
<body>
<div align = "center">
         <div style = "width:500px; border: solid 1px #333333;  margin-top:11rem;" align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Signup</b></div>
				



            <div style = "margin:30px">
               
               <form action = "" method = "post">
               <label>user I'd  :</label><input type = "text" id = "userid" name = "userid" class = "box"/><br /><br />
                  <label>Name  :</label><input type = "text" id = "username" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" id = "password" name = "password" class = "box" /><br/><br />
                  <label>Address  :</label><input type = "text" id = "address" name = "address" class = "box"/><br /><br />
                  <label>Mobile  :</label><input type = "text" id = "mobile" name = "mobile" class = "box" /><br/><br />
                  <input type = "submit" id="showalert123" value = " Signup "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>


      <div class="alert alert-info alert-dismissible fade" role="alert" style="position: absolute; float: right; margin-left:75%; margin-top:-11rem;" id="alertfornewsletter">
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
        url: 'insert.php',
        type: 'POST',
        data: {
         userid: $("#userid").val(),
            username: $("#username").val(),
            password: $("#password").val(),
            address: $("#address").val(),
            mobile: $("#mobile").val(),
            
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