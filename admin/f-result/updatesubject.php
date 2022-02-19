<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    
 require_once("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
  //delete the old data and insert the new one if both keys are not the same. but if both keys are the same then update only

	if(substr($_POST['subject'],0,4) === substr($_POST['oldData'],0,4)){
		//then update value in the subject table only
		$sql = "UPDATE subject SET name='".$_POST['subject']."'  WHERE sub_id='".substr($_POST['subject'],0,4)."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"'.$_POST['formId'].'",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"'.$_POST['formId'].'",
                    "code":"0"}';

      }
	}else{
		//delete all in database that is tied to that subject


		//delete the specified subject from the offer table
		$sql = 'DELETE FROM offer WHERE sub_id="'.substr($_POST['oldData'],0,4).'"';
		 	if ($conn->query($sql) === TRUE){
		 							// sql to delete a record
		    $sql = 'DELETE FROM subject WHERE sub_id="'.substr($_POST['oldData'],0,4).'"';
			if ($conn->query($sql) === TRUE){

				//crate new subject
				 $sql = "INSERT INTO subject (name,sub_id,max_score,avg_score)
                VALUES ('".$_POST['subject']."','".substr($_POST['subject'],0,4)."','100','100')";
                 if ($conn->query($sql) === TRUE){
                   echo '{"formId":"'.$_POST['formId'].'",
                      "code":"1"}';   
                 }else{
                    echo '{"formId": "'.$_POST['formId'].'",
                            "code": "0"
                          }';
                    }

			  }		
			}else {
			    echo '{"formId":"'.$_POST['formId'].'",
                    "code":"0"}'; 
			}
	}
	

  

}

 $conn->close();   
?>