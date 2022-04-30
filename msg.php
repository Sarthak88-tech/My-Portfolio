<?php

   $Name=$_POST['name'];
   $Email=$_POST['email'];
   $sub=$_POST['subject'];
   $msg=$_POST['message'];
  

   $servername = "localhost"; 
   $username = "root";
   $password = "";
   $db="portfolio"; //database name
  

   $conn = new mysqli($servername, $username, $password,$db);

   
    //Insert query
    $sql= "INSERT INTO `portfolio_request` (`Name`,`Email`,`Subject`,`Message`) 
    VALUES ('$Name','$Email','$sub','$msg')";
      
      
   	if($conn->query($sql))
    {
        include('success_modal.html');
    }
   	
    else
    {
        echo "Error: ".$sql."<br>".$conn->error;
    }

   	$conn->close();

?>