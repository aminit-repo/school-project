<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    
require_once("db.php");
   $count=0;
    $sql = 'SELECT cat_1, cat_2 FROM class WHERE class_id="'.$_POST['classId'].'"';
    $result = $conn->query($sql);

  if ($result->num_rows > 0){
  	   $data='{"code": "1"';
      // output data of each row
       $row = $result->fetch_assoc();
      	if($row['cat_1']=='x' || $row['cat_1']==''){

      	}else{
      		$count++;
      		$data.=',"cat1": "'.$row['cat_1'].'"';
      	}

     	if($row['cat_2']=='x' || $row['cat_2']==''){

      	}else{
      		$count++;
      		$data.=',"cat2": "'.$row['cat_2'].'"';
      	}
      $data.=', "count": "'.$count.'"}';
      echo $data;
  }else{
  	//return code 0
  	$data='{"code" : 0}';
  } 

?>