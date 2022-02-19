<?php

	header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json; charset=UTF-8");    
   require_once("db.php"); 

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$input='';
	if(isset($_POST['attendance'])){
	 			//then update value in the subject table only
		$sql = "UPDATE student SET attendance='".$_POST['attendance']."'  WHERE reg_no='".$_POST['student']."'";
		$input= $_POST['attendance'];
	 }else if(isset($_POST['outfee'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET fee='".$_POST['outfee']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['tremark'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET remark='".$_POST['tremark']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['hremark'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET hremark='".$_POST['hremark']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy1'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a1='".$_POST['psy1']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy2'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a2='".$_POST['psy2']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy3'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a3='".$_POST['psy3']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy4'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a4='".$_POST['psy4']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy5'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a5='".$_POST['psy5']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy6'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a6='".$_POST['psy6']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy7'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a7='".$_POST['psy7']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy8'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a8='".$_POST['psy8']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy9'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a9='".$_POST['psy9']."'  WHERE reg_no='".$_POST['student']."'";
	 }else if(isset($_POST['psy10'])){
	 		 			//then update value in the subject table only
		$sql = "UPDATE psychomotor SET a10='".$_POST['psy10']."'  WHERE reg_no='".$_POST['student']."'";
	 }else{
	 	$sql=null;
	 }
	 if($sql!= null){
      if ($conn->query($sql) === TRUE) {
           echo '{"formId":"'.$input.'",
                      "code":"1"}'; 
      } else {
                echo '{"formId":"'.$input.'",
                    "code":"0"}';
        } 
	 }

	 else{
	 	echo '{"formId":"'.$input.'",
                    "code":"0"}';
	 }


}
?>