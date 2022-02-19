<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    

 require_once("db.php");
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 	if(true){

          //create class ID
        //trim all white spaces before comparison
         $classID=trim($_POST['class_name']);
         $classID=strtolower($classID);

         // check for pre nursery
         if(substr($classID,0,3) =="pre"){
          //create a class id
          $classID='s1';
         }else{
                  // check name 
                if($classID[0] == 'p' || $classID[0] == 'P'){
                  $length= strlen($classID);
                  $classID= 'p'.$classID[$length-1];
                }else{
                  //else is for nursery section
                  $length= strlen($classID);
                  $classID= 'n'.$classID[$length-1];
                }
         }

        //ensure class name is on sentence case
        $_POST['class_name']= ucfirst($_POST['class_name']);
        //upload class details
          $sql = "INSERT INTO class (name,total,class_id,cat_1,cat_2)
                  VALUES ('".$_POST['class_name']."','".$_POST['total_student']."','".$classID."','".$_POST['cat_one']."','".$_POST['cat_two']."')";
         if ($conn->query($sql) === TRUE){
          echo '{"formId":"'.$_POST['formId'].'",
                "code":"1",
                "name": "'.$_POST['class_name'].' ['.$_POST['total_student'].']"
                 }';
          }else{
            echo '{"formId":"'.$_POST['formId'].'",
            		"name": "'.$_POST['class_name'].' ",
                   "code":"0"
                  }';
          }
 	}
 }
?>