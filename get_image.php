<?php
   $json = file_get_contents('php://input');
    //convert json object to php associative array
   $data = json_decode($json, true);
 
   $db = mysqli_connect("localhost","root", ""); 
  
   mysqli_select_db($db, 'events'); // your database name here
   
   $query = mysqli_query($db,"select image from images");
   
   
 
   $response['result'] = mysqli_fetch_assoc($query);
  echo json_encode($response);
    
    
    ?>