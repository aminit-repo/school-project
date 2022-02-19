<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    
 require_once("db.php");
 require_once("generate.php");

 if($_SERVER["REQUEST_METHOD"]=="POST"){  

 	if($_POST['request']=='post'){
 		 	//enter all entries 
 	$sql = "UPDATE class SET session='".$_POST['session']."'";
      if ($conn->query($sql) === TRUE) {

              //delete all records from offer
         $sql='DELETE FROM offer';
         if ($conn->query($sql) === TRUE){
         	           echo '{"formId":"xxx",
                      "code":"1"}';

         } 

      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }

  }else{

  		//get any value from database
      $sql = 'SELECT * FROM class WHERE class_id="s1"';
     $result = $conn->query($sql);
     if ($result->num_rows > 0){
        $row = $result->fetch_assoc();

        if($row['session']!= ''){
        	echo '{
        		"code":"1",
        		"session": "'.$row['session'].' SESSION"
        	}';
        		
        }else{
        	echo '';
        }
        
      } 
  }

 }
//

 ?>