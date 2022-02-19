<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    
 require_once("db.php");
 require_once("generate.php");

 if($_SERVER["REQUEST_METHOD"]=="POST"){  

  //get datas from database

 	if($_POST['routine']=='all'){
 		//do this for all

 	if($_POST['field']==='term'){
 		$sql = "UPDATE class SET term='".$_POST['value']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"xxx",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }
 	}else if($_POST['field']==='resump_date'){
 		$sql = "UPDATE class SET resumption_date='".$_POST['value']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"xxx",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }
 	}else if($_POST['field']==='school_days'){
 		$sql = "UPDATE class SET school_days='".$_POST['value']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"xxx",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }
 	}else if($_POST['field']==='fee'){
 		$sql = "UPDATE class SET fee='".$_POST['value']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"xxx",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"xxxx",
                    "code":"0"}';
      }
 	}else{
 		//do nothing 
 	}

 
 	}else{
 		//do this for me, ie ignore any command
 	}




 }

 ?>