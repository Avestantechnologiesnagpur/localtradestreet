<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
 
    $host = "localhost";
    $username = "u570873310_local";
    $password = "Local@321";
    $dbname = "u570873310_localtrade";
   $id = $oname = $email = $subject = $message = "";
   

    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else

   
       
    
        // $id = $_REQUEST['id'];
        $oname = $_REQUEST['oname'];
        $email =  $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
       
    
        $sql = "INSERT INTO contact VALUES ('$id',
            '$name','$email','$subject','$message')";
    
    
      
        if(mysqli_query($conn, $sql)){
            echo '<script> window.alert("Data Saved Successfully")</script>';
 
            
        } else{
            echo '<script> window.alert("Data Did Not Saved")</script>';
        }
    
         
        // Close connection
        mysqli_close($conn);
        ?>