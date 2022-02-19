<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    
 require_once("db.php");
 require_once("generate.php");

    $sql = 'SELECT * FROM class WHERE class_id="'.$_POST['classId'].'"';
     $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $i=1;
      // output data of each row
     $row = $result->fetch_assoc();
        
      echo '{"code": "1",
      		"name": "'.$row['name'].'",
      		"total": "'.$row['total'].'",
      		"class_id": "'.$row['class_id'].'",
      		 "cat_1": "'.$row['cat_1'].'",
      		"cat_2": "'.$row['cat_2'].'",
      		"fee": "'.$row['fee'].'",
      		"resumption_date": "'.$row['resumption_date'].'",
      		"term": "'.$row['term'].'",
      		"school_days": "'.$row['school_days'].'"
  			}';  
  }
 



?>