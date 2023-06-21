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
        $prodname = $_REQUEST['prodname']; 
        $category = $_REQUEST['category']; 
        $stock = $_REQUEST['stock']; 
        $prodprice = $_REQUEST['prodprice']; 
        $perscoop = $_REQUEST['perscoop']; 
        $image = $_REQUEST['image']; 
    


        // Performing insert query execution 
        // here our table name is college 

        $sql =  "INSERT INTO supplements (name, category, stocks, price, perscoopdetails, images) VALUES ('$prodname','$category','$stock','$prodprice','$perscoop','$image')";

        if(mysqli_query($conn, $sql)){ 
            
 
            //echo "Thank you for Subscribing." 
              //  . " Will share everything there" 
                //. " Bye!";  
echo "Product added!";
              // echo $email;  

        } else{ 
            echo "Product's Already there" ;
              
        } 
          
    
        // Close connection 
        mysqli_close($conn); 
        ?> 
  