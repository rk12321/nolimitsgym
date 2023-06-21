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
        $userid = $_REQUEST['userid']; 
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $address = $_REQUEST['address']; 
        $mobile = $_REQUEST['mobile']; 
        
if($username==null){
    echo "Please enter a name";
}


        // Performing insert query execution 
        // here our table name is college 

        $sql =  "INSERT INTO datas (username, userid, passcode, address, mobile) VALUES ('$username','$userid','$password','$address','$mobile')";



        if(mysqli_query($conn, $sql)){ 
            
 
            //echo "Thank you for Subscribing." 
              //  . " Will share everything there" 
                //. " Bye!";  
echo "Welcome Champ!";
              // echo $email;  

        } else{ 
            echo "I'd exists" ;
              
        } 
          
        // Close connection 
        mysqli_close($conn); 
        ?> 
  