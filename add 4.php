<?php
   $servername = "shepurebeauty-server.mysql.database.azure.com";
 $username = "fravpuuhiz";
 $password = "2143K785O44BY288$";
 $dbname = "shpurebeauty-database"; 
      
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        // collect value of input field
        
        $Name = $_REQUEST['Name'];
        $Price = $_REQUEST['Price'];
        
        
        $sqlquery = "INSERT INTO products (PName, PPrice) VALUES ('$Name','$Price')";
        
        if ($conn->query($sqlquery) == TRUE) {
            echo "Product inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }  

   }

?>
