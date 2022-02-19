<?php
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");    
 //require_once("db.php");
 //this scripts takes clas_id and reg_no
function to_one_significant_figure($data){
  //convert to string
  $val= $data.'';
  $val=trim($data);
  //search for decimal point in string
  if($index=strpos($val,'.')){
      if(strlen($val) > ($index+2)){
        //get the previous value and
      }
  }else{
    return $data;
  }
} 




$logindex=0;
$log='';
function get_psycomotors($reg_no,$conn){
    //get all datas from psycomotor
    $sql = 'SELECT * FROM psychomotor WHERE reg_no="'.$reg_no.'"';
    $result = $conn->query($sql);
    $data[0]='';
  if ($result->num_rows > 0){
      // output data of each row
    $row = $result->fetch_assoc();

        $data[1]=$row['a1'];
        $data[2]=$row['a2'];
        $data[3]=$row['a3'];
        $data[4]=$row['a4'];
        $data[5]=$row['a5'];
        $data[6]=$row['a6'];
        $data[7]=$row['a7'];
        $data[8]=$row['a8'];
        $data[9]=$row['a9'];
        $data[10]=$row['a10'];
        $data[11]=$row['fee'];
        $data[12]=$row['remark'];
        $data[13]=$row['hremark'];
        return $data;
  }else{
    return $data[0]=1;
  }
}



function tick1($data){
    if($data == 1){
        return '<i class="fas fa-check" style="color: rgba(128,128,128,0.5);">';
    }else{
        return '';
    }
}


function tick2($data){
    if($data == 2){
        return '<i class="fa fa-check" style="color: rgba(128,128,128,0.5);">';
    }else{
        return '';
    }
}


function tick3($data){
    if($data == 3){
        return '<i class="fa fa-check" style="color: rgba(128,128,128,0.5);">';
    }else{
        return '';
    }
}


function tick4($data){
    if($data == 4){
        return '<i class="fa fa-check" style="color: rgba(128,128,128,0.5);">';
    }else{
        return '';
    }
}

function tick5($data){
    if($data == 5){
        return '<i class="fa fa-check" style="color: rgba(128,128,128,0.5);">';
    }else{
        return '';
    }
}
  function get_subject_name($subid,$conn){
    	$sql = 'SELECT name FROM subject WHERE sub_id="'.$subid.'"';
    	$result = $conn->query($sql);
        $data=$result->fetch_assoc();
        return $data['name'];
  }


function get_class_population($class, $conn){
        $sql = 'SELECT total FROM class WHERE class_id="'.$class.'"';
        $result = $conn->query($sql);
        $data=$result->fetch_assoc();
        return $data['total'];
}

function get_subject_scores($reg_no,$sub_id, $conn){
    $sql = 'SELECT * FROM offer WHERE reg_no="'.$reg_no.'" AND sub_id="'.$sub_id.'"';
    $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
        $row = $result->fetch_assoc();
        $data['ca1']= $row['test1'];
        $data['ca2']=$row['test2'];
        $data['exam']=$row['exam'];
        return $data;
  }else{
    $data['cat1']='-';
    $data['cat2']='-';
    $data['exam']='-';
    return $data;
  } 
}

function getGrade($reg_no,$conn){
	$avg= student_avg($reg_no,$conn);
        if($avg > 79){
          return 'A';
        }else if($avg > 59){
          return 'B';
        }else if($avg > 49){
          return 'C';
        }else if($avg > 39){
          return 'D';
        }else{
          return 'E';
        }
}

function obtain_grade($avg){
  if($avg > 79){
          return 'A';
        }else if($avg > 59){
          return 'B';
        }else if($avg > 49){
          return 'C';
        }else if($avg > 39){
          return 'D';
        }else{
          return 'E';
    }
}


function checkNumber($num){
	if($num == -1){
		return 0;
	}else{
		return $num;
	}
}

function subject_total_score($reg_no, $sub_id,$conn){
     $sql ="SELECT * FROM offer WHERE reg_no='".$reg_no."' AND sub_id='".$sub_id."'";
      $result = $conn->query($sql);
         if($result->num_rows > 0){
           $row = $result->fetch_assoc();
           return $row['total'];
      }else{
      	return 0;
    }
}



function get_offered_subject($class,$conn){
		//creat an empty array to hold all subject ids offered
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
  			while($rowx = $resultx->fetch_assoc()){
  				 $found=false;
  				if($arrlength===0){
  					$arr[0]=$rowx['sub_id'];
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

  	return $arr;
}



function get_student_details($reg_no,$conn){
	$arr['fullname']='';
	$sql = 'SELECT * FROM student WHERE reg_no="'.$reg_no.'"';
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		$row = $result->fetch_assoc();
		$arr['fullname']= $row['surname'].' '.substr($row['other_name'],0,1).' '.$row['first_name'];
		$arr['classid']=$row['class'];
    $arr['attendance']=$row['attendance'];
    $arr['class']=$row['class'];
    $arr['gender']=$row['gender'];
    if($row['class_cat']=='' || $row['class_cat']=='x'){
      $arr['classCat']= $row['class_cat'];
    }else{
      $arr['classCat']= $row['class_cat'];
    }
	}
	return $arr;
}


function format_position($pos){
   if($pos==1){
     return '1<sup>st</sup>';
   }else if($pos==2){
    return '2<sup>nd</sup>';
   }else if($pos==3){
    return '3<sup>rd</sup>';
   }else if( $pos==4){
    return '4<sup>th</sup>';
   }else if($pos==5){
    return '5<sup>th</sup>';
   }else{
    return $pos.'<sup>th</sup>';
   }
}

function get_subject_position($reg_no, $sub_id,$conn){
	  $arr[0]='';
     //get the total score of the specifed student
      $sql = 'SELECT * FROM offer WHERE reg_no="'.$reg_no.'" AND sub_id="'.$sub_id.'"';
      $result = $conn->query($sql);
  	if ($result->num_rows > 0){
      $i=0;
      // output data of each row
      $row = $result->fetch_assoc();
      $total=(double)$row['test1'] + (double)$row['test2']+(double)$row['exam'];
      //get the class that the student belongs to
      $student=get_student_details($reg_no,$conn);

      //get the name of all the student in the class
      $sql = 'SELECT * FROM student WHERE class="'.$student['classid'].'"';
      $result = $conn->query($sql);
      if ($result->num_rows > 0){
      // output data of each row
      while($row = $result->fetch_assoc()){
     	//extract all total scores and save it in an array for comparison 
      	$sql = 'SELECT * FROM offer WHERE reg_no="'.$row['reg_no'].'" AND sub_id="'.$sub_id.'"';
      	$resultx = $conn->query($sql);
      	if($resultx->num_rows >0){
      		//if this evaluates to be true then this student took this test
      		   $rowx = $resultx->fetch_assoc();
      		   $arr[$i]= (double)$rowx['test1']+ (double)$rowx['test2']+ (double)$rowx['exam'];
      	}else{
      		   $arr[$i]=0;
      	}
      	$i++;
      }
  	}
  	//sort the array in ascending order.
  	rsort($arr);

    $GLOBALS['log'].='<br><br>call details - (reg_no'.$reg_no.' sub_id='.$sub_id.') origianal array length='.count($arr);
  	$unique_array=get_unique_array($arr);
    $GLOBALS['log'].='   unque array length='.count($unique_array);
  
  	//get the index of the student total
  	$position=array_search($total,$unique_array,true);
     	//return ($position+1);
      return format_position($position+1);
  }
}


function student_position($reg_no, $conn){
  //get the student details
  $details=get_student_details($reg_no,$conn);

  //get the class list if students
  $list=get_class_list($conn, $details['classid']);
  // get all sum total scores of each student.
  $scores[0]=0;
  for($i=1;$i<=count($list)/2 ; $i++){
     $scores[$i-1]= sum_total($list["regNo".$i],$conn); 
  }

  //sort the array in ascending order.
  rsort($scores);
  //get the student total score
  $total= sum_total($reg_no,$conn);
  //get the unique array
  $unique_array= get_unique_array($scores);
      //get the index of the student total
  $position=array_search($total,$unique_array,true);
  return ($position+1);
}




function get_unique_array($arr){
  for($i=0; $i < count($arr); $i++){
     for($x= $i+1; $x < count($arr); $x++){
        if($arr[$i]=== $arr[$x]){
           $arr[$x]= -1;
        }
     }
  }

  //filter all negative values
 $new_arr[0]=0;
 $x=0;
 for($i=0;$i <count($arr);$i++){
    if($arr[$i] == -1){

    }else{
      $new_arr[$x++]=$arr[$i];
    }
 }
  return $new_arr;
}





function sum_total($reg_no,$conn){
	//get the student details
	$student=get_student_details($reg_no,$conn); 
	//get all the offered subject of this student
	$sub_arr= get_offered_subject($student['classid'], $conn);
	$total=0;
	for($i=0;$i< count($sub_arr); $i++){
		$total=$total+ subject_total_score($reg_no,$sub_arr[$i],$conn);
	}
	return $total;
}


function student_avg($reg_no,$conn){
	$student=get_student_details($reg_no,$conn);
	//use the formula, sumtotal/Number of subject taken
	$avg= sum_total($reg_no,$conn)/count(get_offered_subject($student['classid'],$conn));
	return $avg;
}

function get_class_avg_score($class,$sub_id,$conn){
	$total=0;
	$class_population=0;
	//get all student from the class that offered the examination
	 $sql = 'SELECT * FROM student WHERE class="'.$class.'"';
     $result = $conn->query($sql);
  	if ($result->num_rows > 0) {
  		while($row = $result->fetch_assoc()){
  			$total=$total + subject_total_score($row['reg_no'],$sub_id,$conn);
  			$class_population++;
  		}

  	}
   return $total/$class_population; 
}


 function get_class_sum_total($classID, $conn){
  //get all the subject offerd
  $data=get_offered_subject($classID,$conn);
  return count($data)*100;
}


function class_highest_score($classID, $sub_id,$conn){
  $arr[0]=0;
  //get all the students in the class that wrote the exam
    $sql = 'SELECT * FROM student WHERE class="'.$classID.'"';
    $result = $conn->query($sql);
  if ($result->num_rows > 0){
    $i=0;
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $arr[$i]= subject_total_score($row['reg_no'], $sub_id,$conn);
          $i++;
      }

      //find the higest score in the array;
      $higest_score= max($arr);
      return $higest_score;
  }
}

function class_lowest_score($classID, $sub_id,$conn){
  $arr[0]=0;
  //get all the students in the class that wrote the exam
    $sql = 'SELECT * FROM student WHERE class="'.$classID.'"';
    $result = $conn->query($sql);
  if ($result->num_rows > 0){
    $i=0;
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $arr[$i]= subject_total_score($row['reg_no'], $sub_id,$conn);
          $i++;
      }

      //find the higest score in the array;
      $higest_score= min($arr);
      return $higest_score;
  }
}
//echo sum_total("MGIS/P/0001", $conn).'<br>';
//echo student_avg("MGIS/P/0001", $conn).'<br>';
//echo get_class_avg_score('n3','agri',$conn);
//$conn->close(); 






function get_class_list($conn, $classID){
    $sql = 'SELECT * FROM student WHERE class="'.$classID.'"';
    $result = $conn->query($sql);
    $details["name1"]='';
  if ($result->num_rows > 0){
    $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $details["name".$i]= $row['surname'].' '.$row['first_name'].' '.$row['other_name'];
        $details["regNo".$i]= $row['reg_no'];
        $i++;
      }
  }

  return $details;
}








function get_class_abbr_name($classID){
  if($classID[0]=='N' || $classID[0]=='n' ){
	if($classID[1]=='3'){
		return 'Trans';
	}
    	return 'Nur. '.$classID[1];
  }else if($classID[0]=='S' || $classID[0]=='s'){
    return "Pre Nur";
  }else{
    return "Pri ".$classID[1];
  }
}


function get_class_full_name($classID){
    if($classID[0]=='N' || $classID[0]=='n' ){
    return 'Nursery. '.$classID[1];
  }else if($classID[0]=='S' || $classID[0]=='s'){
    return "Pre Nursery";
  }else{
    return "Primary ".$classID[1];
  }
}

function modify_reg_no($reg_no){
  if($reg_no[5] ==='n' || $reg_no[5] === 'N'){
    return 'MGIS/NUR/'.substr($reg_no,7,4);
  }else if($reg_no[5] ==='p' || $reg_no[5] === 'P'){
    return 'MGIS/PRI/'.substr($reg_no,7,4);
  }else{
    return 'MGIS/TRA/'.substr($reg_no,7,4);
 }

}


function get_gender_string($gender){
  if($gender=='f'){
    return 'Female';
  }else{
    return 'Male';
  }
}

function get_term($conn, $reg_no, $format){
 
  //get the class
  $sql = 'SELECT * FROM student WHERE reg_no="'.$reg_no.'"';
  $result = $conn->query($sql);
  if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
  //get the term from data base
      //get the class
     $sql = 'SELECT * FROM class WHERE class_id="'.$row['class'].'"';
     $resultn = $conn->query($sql);
     if ($resultn->num_rows > 0){
        $rowx = $resultn->fetch_assoc();
        if($format=='straight'){

          if($rowx['term'] == 1){
             return $rowx['term'].'ST TERM';
          }else if($rowx['term'] == 2){
            return $rowx['term'].'ND TERM';
          }else{
            return $rowx['term'].'RD TERM';
          }    

      }else{

        if($rowx['term'] == 1){
          return $rowx['term'].'<sup>ST</sup> TERM';
        }else if($rowx['term'] == 2){
          return $rowx['term'].'<sup>ND</sup> TERM';
        }else{
          return $rowx['term'].'<sup>RD</sup> TERM';
        }
          
      }
     
   }
  }
  
}


function get_session($conn){
  //get any value from database
       $sql = 'SELECT * FROM class WHERE class_id="s1"';
     $result = $conn->query($sql);
     if ($result->num_rows > 0){
        $row = $result->fetch_assoc();
        return $row['session'].' SESSION';
      }
}

function get_class_section($reg_no){
  if($reg_no[5] ==='n' || $reg_no[5] === 'N'){
    return 'NURSERY SECTION';
  }else if($reg_no[5] ==='p' || $reg_no[5] === 'P'){
    return 'PRIMARY SECTION';
  }else{
    return 'TRANSITION SECTION';
 }
}

function check_val($val){
    if($val==0 || $val == -1){
        return '-';
    }else{
        return $val;
    }
}


function arrange_subject($arr, $classID){
        $new_arr[0]='';
        $index=0;
    if($classID == 'n1' || $classID == 's1'){
        $solid= array("lang","nume","writ","heal","soci","scie","mora","shap","rhym");
        for($i=0; $i< count($solid); $i++){
            //if is inside the other array. create a new array
            if(in_array($solid[$i], $arr)){
                $location=array_search($solid[$i],$arr);
                $new_arr[$index++]= $solid[$i];
                //remove the value from the array.
                $arr[$location]='x';
             }

        }


           //add all the other values into new array
             if(count($arr) > count($new_arr)){
                for($i=0; $i < count($arr); $i++){
                    //get the data involved
                    if($arr[$i] ==='x'){

                    }else{
                        $new_arr[$index++]=$arr[$i];
                    }
                }
             }

    

    }else  if($classID== 'n2'){
        $solid= array("lang","nume","writ","read","phon","heal","soci","scie","bibl","shap","rhym");
        for($i=0; $i< count($solid); $i++){
            //if is inside the other array. create a new array
            if(in_array($solid[$i], $arr)){
                $location=array_search($solid[$i],$arr);
                $new_arr[$index++]= $solid[$i];
                //remove the value from the array.
                $arr[$location]='x';
             }

        }


           //add all the other values into new array
             if(count($arr) > count($new_arr)){
                for($i=0; $i < count($arr); $i++){
                    //get the data involved
                    if($arr[$i] ==='x'){

                    }else{
                        $new_arr[$index++]=$arr[$i];
                    }
                }
             }


    }else{
        $solid= array("engl","math","hand","read","spel","phon","verb","quan","voca","sost","basi","home","heed","agri","bibl","crea","com","civi","lite","hist");
        for($i=0; $i< count($solid); $i++){
            //if is inside the other array. create a new array
            if(in_array($solid[$i], $arr)){
                $location=array_search($solid[$i],$arr);
                $new_arr[$index++]= $solid[$i];
                //remove the value from the array.
                $arr[$location]='x';
             }

        }


           //add all the other values into new array
             if(count($arr) > count($new_arr)){
                for($i=0; $i < count($arr); $i++){
                    //get the data involved
                    if($arr[$i] ==='x'){

                    }else{
                        $new_arr[$index++]=$arr[$i];
                    }
                }
             }


    }
    return $new_arr;
}

function getfee($classID, $conn){
  $fee='';
      //get all the students in the class that wrote the exam
    $sql = 'SELECT * FROM class WHERE class_id="'.$classID.'"';
    $result = $conn->query($sql);
  if ($result->num_rows > 0){
    
      // output data of each row
     $row = $result->fetch_assoc();
      $fee=$row['fee'];
       
  
  }
    if($classID=='s1'){
        return '&#x20A6 '.$fee;
    }else if($classID=='n1'){
        return '&#x20A6 '.$fee;
    }else if($classID=='n2'){
        return '&#x20A6 '.$fee;
    }else if($classID=='p5'){
      return '&#x20A6 '.$fee;
    }else{
      return '&#x20A6 '.$fee;
    }
}
function get_resumption_date($classID, $conn){
      //get all the students in the class that wrote the exam
    $sql = 'SELECT * FROM class WHERE class_id="'.$classID.'"';
    $result = $conn->query($sql);
  if ($result->num_rows > 0){
    
      // output data of each row
     $row = $result->fetch_assoc();
      return $row['resumption_date'];
  }
}


function get_school_days($classID,$conn){
       //get all the students in the class that wrote the exam
    $sql = 'SELECT * FROM class WHERE class_id="'.$classID.'"';
    $result = $conn->query($sql);
  if ($result->num_rows > 0){
    
      // output data of each row
     $row = $result->fetch_assoc();
      return $row['school_days'];
  }
}



function checkcash($val){
    if($val == 0 || $val < 3 || $val ==''){
        return '';
    }else{
        return '&#x20A6 '.$val;
    }
}

?>