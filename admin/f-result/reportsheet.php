<?php
require_once("db.php");
require "generate.php";


$log='';
function get_head(){
	return '
<head>
	<title></title>
	<style type="text/css">

		*{
			font-size: 14px;
			word-spacing: 2px;
			font-weight: bolder;
		}
		table{
			width: 100%;
			border-spacing: 0px !important;
			border:0.3px solid black;
		}
		tr.lighter-bottom{
			border-bottom: 0.01px solid gray!important;
		}

		td, th{
			border-right: 0.3px solid black;
			border-bottom: 0.3px solid black;
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
		border-right: 0.01px solid black!important;
		border-bottom: 0.01px solid black!important;
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
</head>';
}


function createReportCells($subject, $reg_no,$conn){
	$cells='';
		$scores=get_subject_scores($reg_no,$subject, $conn);
		$cells.='<td>'.$scores['ca1'].'</td>
	  			<td>'.$scores['ca2'].'</td>
	  			<td>'. (($scores['ca1'] + 0 ) + $scores['ca2']).'</td>
	  			<td>'.$scores['exam']. '</td>
	  			<td>'.((($scores['ca1'] + 0 ) + $scores['ca2']) + $scores['exam']) .'</td>
	  			<td>'.obtain_grade(((($scores['ca1'] + 0 ) + $scores['ca2']) + $scores['exam'])).'</td>
	  			<td>'.get_subject_position($reg_no, $subject,$conn).'</td>';
	return $cells;
}



function get_score_rows($sub_arr, $classid, $islast, $conn){
	$data='';
	//get all students in the $classid
    $list=get_class_list($conn, $classid);
    for($i=0; $i < count($list)/2; $i++){
    	$data.='<tr><!-- names cell --><td>'.$list['name'.($i+1)].'</td>';
    	//prepare student data row
    	for($j=0; $j < count($sub_arr); $j++){
    		$data.= createReportCells($sub_arr[$j], $list['regNo'.($i+1)],$conn);
    	}

    	if($islast===true){
    		$data.='<td>'.sum_total($list['regNo'.($i+1)],$conn).'</td><td>'.round(student_avg($list['regNo'.($i+1)],$conn),2).'</td><td>'.student_position($list['regNo'.($i+1)], $conn).'</td></tr>';
    	}else{
    		$data.='</tr>';
    	}
    	
    }
    return $data;
}


function get_table_title($classid, $course_arr, $islast, $conn){
	$course_arr= chop($course_arr,'/');
	$arr= explode('/',$course_arr);
   //get the offered curses in that class
	 $course='<table><tr><td rowspan="2">Name</td>';
	 $GLOBALS['log'].='<br> get_table_title : islast= '.$islast.' count= '.count($arr);
	 $title='';
	 //create the course
	 for($i=0; $i< count($arr); $i++){
	 	$course.='<td colspan="7">'.get_subject_name($arr[$i],$conn).'</td>';
	 	$title.='	    <td>T<sub>1</sub></td>
					    <td>T<sub>2</sub></td>
					    <td>T<sub>M</sub></td>
					    <td>E<sub>M</sub></td>
					    <td>C<sub>M</sub></td>
					    <td>G<sub>R</sub></td>
					    <td>P<sub>ST</sub></td>';
	 }
	 $course.='</tr>';



	if($islast=== true){
	 return $course.'<tr class="lighter-bottom">'.$title.'<td>TOTAL</td><td>AVERAGE</td><td>POSITION</td></tr>'.get_score_rows($arr,$classid,$islast,$conn).'</tr><table>';
	 }else{
		return $course.'<tr class="lighter-bottom">'.$title.'<tr>'.get_score_rows($arr,$classid,$islast,$conn).'</tr></table>';
	 }
}




function create_tables($conn ,$classid){
	$subject=arrange_subject(get_offered_subject($classid,$conn), $classid);
	//get number of offered subjects
	$GLOBALS['log'].='class ID subject number = '.count($subject).'<br>';
    $count=0;
    $i=0;
    //get the subject details to create title for
    $islast=false;
    //perform mathematical arithmatics
    $loop= (int)(count($subject)/ 5);
    //loop the total number of times 5 times,
    $k=0;
    $title[$k]='';
    if($loop > 0){
   	   for($i=0; $i< $loop; $i++){
   	   	  $sub='';
   	   	  $oldcount= $count;
    		for($j=$count; $j < 5 +$oldcount; $j++){
    			$sub.= $subject[$j].'/';
    			$count++;
    		}

    	if($count === count($subject)){
    		$islast=true;
         //create the table title
    	}
    	$title[$k++]=get_table_title($classid, $sub, $islast, $conn);
    	}

    	//check if the division results in a remender
    	if(count($subject)%5 > 0){
    		$sub='';
    		for($i=$count ; $i< count($subject); $i++){
    			$sub.= $subject[$i].'/';
    			$count++;
    		}
    	$islast=true;
    		  //create the table title
    	$title[$k++]=get_table_title($classid, $sub, $islast, $conn);
    	}

    }else{
    	$sub='';
    		for($i=0 ; $i< count($subject); $i++){
    			$sub.= $subject[$i].'/';
    			$count++;
    		}
    		  $islast=true;
    		  //create the table title
    	     $title[$k++]=get_table_title($classid, $sub, $islast, $conn);
    }

    return $title;

}



function create_report_sheet($classid,$conn){	
	$tables=create_tables($conn ,$classid);
	$html='';
	for($i=0;$i< count($tables);$i++){
		$html.='</br>'.$tables[$i].'</br>'; 
	}
	return get_head().'<div class="container"><h1>'.get_class_full_name($classid).'</h1>'.$html.'</div></body></html>';
}



echo create_report_sheet('n1', $conn);

?>