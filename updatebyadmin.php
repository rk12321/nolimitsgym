<?php 
        session_start();
        // servername => localhost 
        // username => root 
        // password => empty 
        // database name => staff 
        $conn = mysqli_connect("localhost", "root", "", "nolimitsgym"); 
          
        // Check connection 
        if($conn === false){ 
            die("ERROR: Could not connect. " 
                . mysqli_connect_error()); 
        } 


        // Taking all 5 values from the form data(input) 

        $stock = $_REQUEST['stock']; 
        $prodprice = $_REQUEST['prodprice']; 
        $prodid = $_REQUEST['prodid']; 


        // Performing insert query execution 
        // here our table name is college 


$sqlforupdate = "UPDATE supplements SET stocks = '$stock', price= '$prodprice' WHERE id = '$prodid'";

        if(mysqli_query($conn, $sqlforupdate)){ 
            
 
            //echo "Thank you for Subscribing." 
              //  . " Will share everything there" 
                //. " Bye!";  
echo "Product updated!";
              // echo $email;  

        } else{ 
            echo "Try again" ;
              
        } 

        // Close connection 
        mysqli_close($conn); 
        ?> 
  