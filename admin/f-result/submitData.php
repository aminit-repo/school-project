<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    
 require_once("db.php");


 if($_SERVER["REQUEST_METHOD"]=="POST"){ 

 	if(isset($_POST['term'])){
 		   $sql = "UPDATE class SET term='".$_POST['term']."' WHERE class_id='".$_POST['classId']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"xxx",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }
 	}
 	else if(isset($_POST['resump_date'])){
 		$sql = "UPDATE class SET resumption_date='".$_POST['resump_date']."' WHERE class_id='".$_POST['classId']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"xxx",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }
 	}
 	else if(isset($_POST['school_days'])){
 		$sql = "UPDATE class SET school_days='".$_POST['school_days']."' WHERE class_id='".$_POST['classId']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"xxx",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }
 	}else{
 		$sql = "UPDATE class SET fee='".$_POST['fee']."' WHERE class_id='".$_POST['classId']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"xxx",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }
 	} 


 }

?>