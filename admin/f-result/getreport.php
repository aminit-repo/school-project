<?php 
require_once("db.php");
require "generate.php";
//require "sheetCreator.php";



function getReportHead(){
return '<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		*{
			font-size: 12px;
			word-spacing: 2px;
			font-weight: bolder;
		}
		table{
			width: 100%;
			border-spacing: 0px !important;
			border:0.2px solid gray;
		}
		tr.lighter-bottom{
			border-bottom: 0.01px solid gray!important;
		}

		td, th{
			border-right: 0.2px solid gray;
			border-bottom: 0.2px solid gray;
			white-space: nowrap;
		}

		td:not(:first-child){
			text-align: center;
		}
		.container{
			padding: 2px;
			width: 100%;
		}


	.term-detail-row td, th{
		border-right: 0.01px solid gray!important;
		border-bottom: 0.01px solid gray!important;
	}

	.term-detail-row{
		position: relative;

	}

	.term-detail-data{
		position: absolute;
		width: 100%;
		text-align: center;
		border: 0px solid gray!important;
		left: 17px;
		letter-spacing: 3px;
		word-spacing: 5px;

	}

	h1{
		text-align: center;
		word-spacing: 4px;
		padding: 4px;
		font-size:24px;
		letter-spacing: 2px;
	}

	</style>
</head>
<body><div class="container">';
}



function createReportCells($subjects, $reg_no,$conn){
	$cells='';
		$scores=get_subject_scores($reg_no,$subjects, $conn);
		$cells.='<td>'.$scores['ca1'].'</td>
	  			<td>'.$scores['ca2'].'</td>
	  			<td>'. (($scores['ca1'] + 0 ) + $scores['ca2']).'</td>
	  			<td>'.$scores['exam']. '</td>
	  			<td>'.((($scores['ca1'] + 0 ) + $scores['ca2']) + $scores['exam']) .'</td>
	  			<td>'.obtain_grade(((($scores['ca1'] + 0 ) + $scores['ca2']) + $scores['exam'])).'</td>
	  			<td>'.get_subject_position($reg_no, $subjects,$conn).'</td>';
	return $cells;
}

//get the classess
function get_registeredClassiIDs($conn){
	$class[0]='x';
	$i=0;
 	$sql='SELECT class_id FROM class';
 	$result = $conn->query($sql);
 	if ($result->num_rows > 0) {
  		while($row = $result->fetch_assoc()){
  			$class[$i]=$row['class_id'];
  			$i++;
  		}
  	}

  	return $class;
}




function getReport($conn){
	//get all the classes
	$class=get_registeredClassiIDs($conn);
	if($class[0]==='x'){

	}else{
		for($i=0; $i < count($class); $i++){
			echo reportSheet($conn, $class[$i]);
		}
	}
}


function reportSheet($conn, $class){


 $subject=arrange_subject(get_offered_subject($class,$conn), $class);
 //check for the number of form to create
 $form_no= count($subject)/5;
 $form_no= ceil($form_no);

 $sheet[0]='<h1>'.get_class_full_name($class).'</h1><table><tr><td rowspan="2">Name</td>';
  
 for($i=1 ;$i< $form_no; $i++){
 	$sheet[$i]='<br><br><table><tr><td rowspan="2">Name</td>';
 }

$total=0;
for($t=0;$t < $form_no;$t++){
	$count=0;
   //generate all subject list.
    for($i=0; $i< 5; $i++){
    	if($total === count($subject)){
    		break;
    	}
       $sheet[$t].='<td colspan="7">'.get_subject_name($subject[$total],$conn).'</td>';
       $total++;
    }
 	 
 	 if( $t == $form_no - 1){
 	 	$sheet[$t].='<td colspan="3"></td></tr><tr class="lighter-bottom"></tr>';
 	 }else{
 	 	$sheet[$t].='</tr>';
 	 }
}

 

 
 
 $total=0;
for($t=0;$t< $form_no;$t++){
	//generate all subject list.

    $sheet[$t].='<tr>';
     for($i =0; $i < 5; $i++){
     	if($total === count($subject)){
     		break;
     	}
     	$sheet[$t].='<td>T<sub>1</sub></td>
	    <td>T<sub>2</sub></td>
	    <td>T<sub>M</sub></td>
	    <td>E<sub>M</sub></td>
	    <td>C<sub>M</sub></td>
	    <td>G<sub>R</sub></td>
	    <td>P<sub>ST</sub></td>';
	    $total++;
     }

      if( $t == $form_no - 1){
 	 	$sheet[$t].='<td>TOTAL</td><td>AVERAGE</td><td>POSITION</td></tr>';
 	 }else{
 	 	$sheet[$t].='</tr>';
 	 }	 
 
}
 


 $student=get_class_list($conn, $class);


 $lastindex=0;
 $total=0;
for($t=0;$t< $form_no;$t++){
	for($i=1;$i<=(count($student)/2) ;$i++){
		 $data='';
		$count=1;
			//generate all subject list.
		for($k=$lastindex; $k < count($subject); $k++){
			$data.=createReportCells($subject[$lastindex], $student["regNo".$i.''], $conn);
			if($count == 5){
     			break;
     		}
     		$count++;
     		$lastindex++;
     	}

     	//store the sheet

      if($t == $form_no - 1){
 	 	$sheet[$t].='<tr>
	  	<!-- names cell -->
	   <td>'.$student["name".$i].'</td>'.$data.' <td></td><td></td><td></td></tr>';
 	 }else{
	 	 $sheet[$t].='<tr>
		  	<!-- names cell -->
		   <td>'.$student["name".$i].'</td>'.$data.'</tr>';
 	 }

	}
			 	 
} 
  		



 /*for($i=0;$i < $form_no -1; $i++){
 	 $sheet[$i].='</table>';
 }
   $sheet[$form_no -1].='</div></body></html>'; */

  $report='';
 //create a single sheet
  for($i=0;$i< $form_no; $i++){
  	 $report.=$sheet[$i];
  }
  return $report;
}


//get the students


//getReport($conn);

 echo reportSheet($conn, 'p1');

 //for($i=0;$i< count($arr);$i++){
 	//echo $arr[$i].'  ';
 //}

 echo $GLOBALS['log'];
 ?>