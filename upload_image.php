<?php


   $json = file_get_contents('php://input');

    //convert json object to php associative array
   $data = json_decode($json, true);

  $image = $data['image'];



   $db = mysqli_connect("localhost","root", ""); 


  
   mysqli_select_db($db, 'events'); // your database name here

   
   $query = mysqli_query($db,"insert into images (image ) values ( '$image') ");
   
   if($query){
 
   $response['result'] = "done";
  echo json_encode($response);

    }
	
	else {
		
		 $response['result'] = "not done";
  echo json_encode($response);
		
	}
    
    ?>
   
    