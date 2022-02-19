<?php
 require_once("db.php");
 require_once('generate.php');

 /*$class="n3";
	//creata an empty array to hold all subject ids offered
	$arr[0]='';
	$arrlength=0;
	//select all student records
	 $sql = 'SELECT * FROM student WHERE class="'.$class.'"';
     $result = $conn->query($sql);
  	if ($result->num_rows > 0) {
  		while($row = $result->fetch_assoc()){
  			//select distincts sub_id from offer table and save it in arr;
  			$sql='SELECT DISTINCT sub_id FROM offer WHERE reg_no="'.$row['reg_no'].'"';
  			$resultx = $conn->query($sql);
  			echo "<br>".$row['reg_no'];
  			while($rowx = $resultx->fetch_assoc()){
  				 $found=false;
  				 echo "<br>".$rowx['sub_id'];
  				if($arrlength===0){
  					$arr[$x]=$rowx['sub_id'];
  					$arrlength++;
  				}else{
  					//compare the last subject list with the new student subject list
  					for($i=0;$i<$arrlength; $i++){
  						if($arr[$i]==$rowx['sub_id']){
  							$found=true;
  						}
  					}

  					if($found== false){
  						$arr[$arrlength]=$rowx['sub_id'];
  						$arrlength++;
  					}
  				}
  			}
  		}
  	}



  	echo "<br><br><br>---------------------------------------------------------";
  for($i=0; $i< count($arr); $i++){
  	echo "<br>".$arr[$i];
  }  */
  

/*function get_student_details($reg_no,$conn){
	$arr['fullname']='';
	$sql = 'SELECT * FROM student WHERE reg_no="'.$reg_no.'"';
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		$row = $result->fetch_assoc();
		$arr['fullname']= $row['surname'].' '.substr($row['other_name'],0,1).' '.$row['first_name'];
		$arr['classid']=$row['class'];
	}

	return $arr;
}

$reg_no='MGIS/N/4445';
$sub_id='ther';




	  $arr[0]='';
     //get the total score of the specifed student
      $sql = 'SELECT total FROM offer WHERE reg_no="'.$reg_no.'" AND sub_id="'.$sub_id.'"';
      $result = $conn->query($sql);
  	if ($result->num_rows > 0){
      $i=0;
      // output data of each row
      $row = $result->fetch_assoc();
      $total=$row['total'];
      //get the class that the student belongs to
      $student=get_student_details($reg_no,$conn);
      //get the name of all the student in the class
      $sql = 'SELECT * FROM student WHERE class="'.$student['classid'].'"';
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()){
     	//extract all total scores and save it in an array for comparison 
      	$sql = 'SELECT total FROM offer WHERE reg_no="'.$row['reg_no'].'" AND sub_id="'.$sub_id.'"';
      	$resultx = $conn->query($sql);
      	if($resultx->num_rows >0){
      		//if this evaluates to be true then this student took this test
      		   $rowx = $resultx->fetch_assoc();
      		   $arr[$i]=$rowx['total'];
      	}else{
      		   $arr[$i]=0;
      	}
      	$i++;
      }
  	}
  	//sort the array in ascending order.
  	rsort($arr);
  	//get distinct array
  	$unique_array=array_unique($arr);
  	//get the index of the student total
  	$position=array_search($total,$unique_array,true);
  }

 /* $sql ="SELECT * FROM offer WHERE reg_no='".$reg_no."' AND sub_id='".$sub_id."'";
      $result = $conn->query($sql);
         if($result->num_rows > 0){
           $row = $result->fetch_assoc();
           echo $row['total'];
      }else{
      	echo -1;
    } */



  /*$_POST['classId']='n3';


                //get the total number of class
     $sql='SELECT COUNT(reg_no) as total from student WHERE class="'.$_POST['classId'].'"';
     $result = $conn->query($sql);
     $data=$result->fetch_assoc();
     $data= '{"total" : "'.$data['total'].'"';
      //compute detailed result
      //get list of all offered subject
      $subjects=get_offered_subject($_POST['classId'],$conn);

      $data.=',"totalSubject" :"'.count($subjects).'"}';
      $x=1;
      //get all students from the class
      $sql = 'SELECT * FROM student WHERE class="'.$_POST['classId'].'"';
      $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()){
              $data.=',"student'.$x.'name": "'.$row['surname'].' '.$row['other_name'].' '.$row['first_name'].'", "student'.$x.'regno": "'.$row['reg_no'].'"';
              //create data for the subjects and their sum total for each student
              for($i=0;$i< count($subjects); $i++){
                $data.=',"sub'.($i+1).'total_'.($x).'": "'.subject_total_score($row['reg_no'], $subjects[$i],$conn).'"';
                }
              
          $data.=',"student'.$x.'avg": "'.student_avg($row['reg_no'],$conn).'"';
          $data.=',"student'.$x.'grade": "'.getGrade($row['reg_no'],$conn).'"';
          $x++;
          }
            for($i=0;$i< count($subjects); $i++){
                $data.=',"sub'.($i+1).'": "'.$subjects[$i].'"';
            }
        }else{
              //specify a false in record attribute.
             $data.=',"total": "0"';
        }

          $data.='}';
          echo $data; */


    $sql="SELECT count(class_id) as total from class WHERE class_id LIKE 's%'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $data= '{"totals" : "'.$row['total'].'"'; 

    if($row['total'] > 0){
      //get the class name
      $sql = "SELECT * FROM class WHERE class_id LIKE 's%'";
      $result = $conn->query($sql);
       if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $data.=',"dsname": "'.$row['name'].'", "dsId": "'.$row['class_id'].'"';
      }
    }


    //select cclass id 
    $sql="SELECT count(class_id) as total from class WHERE class_id LIKE 'n%'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $data.= ',"totaln" : "'.$row['total'].'"'; 
    $sql = "SELECT * FROM class WHERE class_id LIKE 'n%'";
    $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $data.=',"dnname'.$i.'": "'.$row['name'].'", "dnId'.$i.'": "'.$row['class_id'].'"';
          $i++;
      }

  }
    
    //select all primary record 
    $sql="SELECT count(class_id) as total from class WHERE class_id LIKE 'p%'";
     $result = $conn->query($sql);
     $temp_data=$result->fetch_assoc();
      $data.=',"totalp" : "'.$temp_data['total'].'"'; 
    $sql = "SELECT * FROM class WHERE class_id LIKE 'p%'";
    $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $data.=',"dpname'.$i.'": "'.$row['name'].'", "dpId'.$i.'": "'.$row['class_id'].'"';
          $i++;
      }  
  }

   $data.='}';
   echo $data; 
  $conn->close(); 

?>