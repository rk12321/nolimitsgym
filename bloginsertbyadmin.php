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
        $title = $_REQUEST['title']; 
        $description = $_REQUEST['description']; 
        $content = $_REQUEST['content']; 
        $image = $_REQUEST['image']; 
    
        if ($title==null or $description==null or $content==null or $image==null) {
            echo "Fill all fields";
        }
else {

        // Performing insert query execution 
        // here our table name is college 

        $sql =  "INSERT INTO ourblog (title, description, content, image) VALUES ('$title','$description','$content','$image')";

        if(mysqli_query($conn, $sql)){ 
            
 
            //echo "Thank you for Subscribing." 
              //  . " Will share everything there" 
                //. " Bye!";  
echo "Product added!";
              // echo $email;  

        } else{ 
            echo "Product's Already there" ;
              
        } 
          
    }
        // Close connection 
        mysqli_close($conn); 
                    ?> 
  