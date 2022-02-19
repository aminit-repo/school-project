<?php

require "generate.php";

function edit_tick1($data){
    if($data == 1){
        return 'checked';
    }else{
        return '';
    }
}


function edit_tick2($data){
    if($data == 2){
        return 'checked';
    }else{
        return '';
    }
}


function edit_tick3($data){
    if($data == 3){
        return 'checked';
    }else{
        return '';
    }
}


function edit_tick4($data){
    if($data == 4){
        return 'checked';
    }else{
        return '';
    }
}

function edit_tick5($data){
    if($data == 5){
        return 'checked';
    }else{
        return '';
    }
}


function set_heading($reg_no, $conn){
   $heading='<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome-free-5.12.0/css/all.css">
	<style type="text/css">
		.borders td, .borders th{
			border-right: 0.2px solid black;
			border-bottom: 0.2px solid black;
		}

		.borders tr{
			border: 0.2px solid black;
		}

		table.borders{
			border: 0.2px solid black;
			border-spacing: 0px !important;
            width: 100%;
            /*font-size: 14px;*/
		}
		table.borders td{
			padding: 3px;
		}

		h1, h4, h3{
			text-align: center;
			padding: 0px;
			margin: 0px;
			justify-content: center;
            letter-spacing: 2px;
		}
		h1{
			font-size: 26px;
		}
		*{
			font-size: 14px;
            font-weight: bolder !important;
		}
		h3, h4{
			font-size: 14px;
		}
		.center{
			justify-content: center;
			text-align: center;
		}
		.border-less tr{
			padding: 1px;
			margin: 0px;
		}
		.border-less td{
			font-weight: bold;
		}
        table td{
            padding: 2px;
        }
        input editable-fee{
            border: none;
            
        }

        input .editmode{

        }
	</style>
</head>
<body>
<div style="position: relative;">
    <img src="logo2.png"  style="width: 10%; position: absolute; top: 4px;">
    <h1>MC -GENIA INTERNATIONAL SCHOOLS</h1>
    <h4>Road 6, Along shell Main Pipeline behind Total</h4>
    <h4>Filling Station Rukpokwu, Port Harcourt</h4>

    <h3 style="margin-top: 10px;">ACADEMIC REPORT SHEET</h3>
     <h3>'.get_session($conn).'-  '.get_term($conn, $reg_no, "subscript").'</h3>
    <h3>'.get_class_section($reg_no).'</h3>
 </div>';
	return $heading;
}



function set_details($reg_no, $conn){
  $details_array=get_student_details($reg_no,$conn);
  $details='<table class="border-less" style="letter-spacing: 1px;">
    	<tr>
    		<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
    	</tr>
    	<tr>
    		<td colspan="6">'.strtoupper($details_array['fullname']).'</td>
    	</tr>
    	<tr>
    		<td>REG NO.</td><td colspan="2">'.modify_reg_no($reg_no).'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    	</tr>
    	<tr>
    		<td colspan="3">SCHOOL ATTENDANCE</td><td></td><td> <input type="number" name="attendance" style="display: inline-block; width: 40%;" value="'.$details_array['attendance'].'"> </td><td> OUT OF</td><td> '.get_school_days($details_array['class'],$conn).'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    	</tr>
    	<tr>
    	<tr>
    		<td colspan="2">CLASS</td><td>'.get_class_abbr_name($details_array['class']).' ['.ucfirst($details_array['classCat']).']</td><td></td><td colspan="4">TOTAL NO. IN CLASS</td><td></td><td></td><td></td><td></td><td> '.get_class_population($details_array['class'], $conn).'</td><td></td><td></td><td></td>
    	</tr>
    	 <tr>
    		<td colspan="2">GENDER</td><td>'.get_gender_string($details_array['gender']).'</td><td></td><td colspan="4">RESUMPTION DATE:</td><td></td><td></td><td></td><td></td><td>'.get_resumption_date($details_array['class'],$conn).'</td><td></td><td></td><td></td>
    	</tr>
    </table>
        <style type="text/css">
   #figure{
     display: block;
     width: 100%;
    transform:rotate(7deg);
    -ms-transform:rotate(90deg); /* IE 9 */
    -moz-transform:rotate(90deg); /* Firefox */
    -webkit-transform:rotate(90deg); /* Safari and Chrome */
    -o-transform:rotate(90deg); /* Opera */
	}
    </style>

    ';
    return $details;
}


function set_subject($reg_no,$conn){
	$student_details=get_student_details($reg_no,$conn);
    $subjects_array= get_offered_subject($student_details['classid'],$conn);
    $subjects_array=arrange_subject($subjects_array, $student_details['class']);
    $subjects='<table class="borders">
    	<tr class="light">
    		<th style="font-weight: bold; width: 30%; text-indent: 3px;" class="center">PART A- COGNITIVE</th><th style="width: 7%;" class="center">1<sup>st</sup> CA</th><th style="width: 7%;" class="center">2<sup>nd</sup> CA</th><th style="width: 7%;" class="center">Exam</th><th style="width: 7%;" class="center">TOTAL</th><th style="width: 7%;" class="center">Grade</th><th style="width: 7%;" class="center">Subject Position</th><th style="width: 7%;" class="center">Class Highest Score</th><th style="width: 7%;" class="center">Class Lowest Score</th><th style="width: 7%;" class="center">Class Avg Score</th><th rowspan="'.(count($subjects_array)+1).'" style="width: 7%;" class="center"><span id="figure">'.get_term($conn, $reg_no, 'straight').'</span></th>
    	</tr>';
      
          //$subjects_array= arrange_subject_array($subjects_array);
    	for($i=0; $i< count($subjects_array); $i++){
    		$scores= get_subject_scores($reg_no, $subjects_array[$i],$conn);
    		$subjects.='<tr>
    		<td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">'.get_subject_name($subjects_array[$i],$conn).'</td> <td class="center">'.check_val($scores['ca1']).'</td> <td class="center">'.check_val($scores['ca2']).'</td> <td class="center">'.check_val($scores['exam']).'</td> <td class="center">'.check_val(subject_total_score($reg_no,$subjects_array[$i],$conn)).'</td>   <td class="center">'.obtain_grade(subject_total_score($reg_no,$subjects_array[$i],$conn)).'</td> <td class="center">'.get_subject_position($reg_no,$subjects_array[$i],$conn).'</td> <td class="center">'.class_highest_score($student_details['classid'], $subjects_array[$i],$conn).'</td><td class="center">'.class_lowest_score($student_details['classid'], $subjects_array[$i],$conn).'</td><td class="center">'.round(get_class_avg_score($student_details['classid'],$subjects_array[$i],$conn),2).'</td></tr>';
    	}

    	$subjects.='<tr>
    					<td colspan="11" style="height: 12px;"></td>
    				</tr>';

    	$subjects.='    	 <tr>
    		<td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">TOTAL SCORE</td><td class="center">'.sum_total($reg_no,$conn).'</td><td colspan="2" class="center">OUT OF</td><td class="center">'.get_class_sum_total($student_details['classid'],$conn).'</td><td></td> <td colspan="5" style="font-weight: bolder;" class="center">GRADING</td>
    	</tr>
    	<tr>
    		<td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">AVERAGE PERCENTAGE</td><td id="savg" class="center">'.round(student_avg($reg_no,$conn),2).'</td>
            <td colspan="2" class="center">OUT OF</td><td class="center">100</td><td></td><td colspan="2" style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">80 - 100%</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;" class="center">A</td><td colspan="2" style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Excellent</td>
    	</tr>
    	<tr >
    		<td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">GRADE</td><td class="center">'.getGrade($reg_no,$conn).'</td><td></td><td></td><td></td><td></td><td colspan="2" style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">60 - 79%</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;" class="center">B</td><td colspan="2" style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Very Good</td>
    	</tr>
    	 <tr style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">
    		<td></td><td></td><td></td><td></td><td></td><td></td><td colspan="2">50 - 59%</td><td class="center">C</td><td colspan="2">Average</td>
    	</tr>
    	 <tr style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">
    		<td></td><td></td><td></td><td></td><td></td><td></td><td colspan="2">40 - 39%</td><td class="center">D</td><td colspan="2">Below Aveg.</td>
    	</tr>
    	<tr>
    		<td></td><td></td><td></td><td></td><td></td><td></td><td colspan="2" style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">0 - 38%</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;" class="center">E</td><td colspan="2" style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Fail</td>
    	</tr>
     </table>';

     return $subjects;
}


function set_pshycomotor($reg_no,$conn){
    $arr= get_psycomotors($reg_no,$conn);
    $detail=get_student_details($reg_no,$conn);
    if(count($arr) > 2){
            $pshycomotor=' <div style="margin-top: 20px;">
        <div style="display: inline-block; width: 70%; vertical-align: top;"> <table class="borders" >
            <tr><th colspan="2" style="width: 60%; text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;" class="center">AFFECTIVE PSYCHOMOTOR</th><th style="width: 8%;" class="center">5</th><th style="width: 8%;" class="center">4</th><th style="width: 8%;" class="center">3</th><th style="width: 8%;" class="center">2</th><th style="width: 8%;" class="center">1</th>
            </tr>
             <tr><td class="center">1</td><td style="width: 60%; text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Works Independently</td><td class="center"><input type="radio" name="psy1" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[1]).'> </td><td class="center"> <input type="radio" name="psy1" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[2]).'></td><td class="center"><input type="radio" name="psy1" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[1]).'></td><td class="center"> <input type="radio" name="psy1" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[1]).'></td><td class="center"><input type="radio" name="psy1" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[1]).'></td></tr>


            <tr><td class="center">2</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Neat in School work & apperance</td><td class="center"><input type="radio" name="psy2" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[2]).'></td><td class="center"><input type="radio" name="psy2" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[2]).'></td><td class="center"> <input type="radio" name="psy2" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[2]).'></td><td class="center"><input type="radio" name="psy2" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[2]).'></td><td class="center"><input type="radio" name="psy2" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[2]).'></td></tr>

            <tr><td class="center">3</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Follows directives & is attentive</td><td class="center"><input type="radio" name="psy3" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[3]).'></td><td class="center"><input type="radio" name="psy3" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[3]).'></td><td class="center"> <input type="radio" name="psy3" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[3]).'></td><td class="center"><input type="radio" name="psy3" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[3]).'></td><td class="center"><input type="radio" name="psy3" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[3]).'></td></tr>

            <tr><td class="center">4</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Does Assignment</td><td class="center"><input type="radio" name="psy4" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[4]).'></td><td class="center"><input type="radio" name="psy4" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[4]).'></td><td class="center"><input type="radio" name="psy4" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[4]).'></td><td class="center"><input type="radio" name="psy4" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[4]).'></td><td class="center"><input type="radio" name="psy4" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[4]).'></td></tr>

            <tr><td class="center">5</td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;"><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Display Self Confidence</td><td class="center"><input type="radio" name="psy5" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[5]).'></td><td class="center"><input type="radio" name="psy5" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[5]).'></td><td class="center"><input type="radio" name="psy5" style="display: inline-block; width: 100%; margin: auto;" value="3"'.edit_tick3($arr[5]).'></td><td class="center"> <input type="radio" name="psy5" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[5]).'></td><td class="center"><input type="radio" name="psy5" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[5]).'></td></tr>

            <tr><td class="center">6</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Accepts Guidance in Courteous way</td><td class="center"><input type="radio" name="psy6" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[6]).'></td><td class="center"><input type="radio" name="psy6" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[6]).'></td><td class="center"><input type="radio" name="psy6" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[6]).'></td><td class="center"><input type="radio" name="psy6" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[6]).'></td><td class="center"><input type="radio" name="psy6" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[6]).'></td></tr>

            <tr><td class="center">7</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Enjoy the company of Others</td><td class="center"><input type="radio" name="psy7" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[7]).'></td><td class="center"><input type="radio" name="psy7" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[7]).'></td><td class="center"><input type="radio" name="psy7" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[7]).'></td><td class="center"><input type="radio" name="psy7" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[7]).'></td><td class="center"><input type="radio" name="psy7" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[7]).'></td></tr>

            <tr><td class="center">8</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Respect School properties / materials</td><td class="center"><input type="radio" name="psy8" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[8]).'></td><td class="center"><input type="radio" name="psy8" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[8]).'></td><td class="center"><input type="radio" name="psy8" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[8]).'></td><td class="center"><input type="radio" name="psy8" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[8]).'></td><td class="center"><input type="radio" name="psy8" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[8]).'></td></tr>

            <tr><td class="center">9</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Participates in games & sport activities</td><td class="center"><input type="radio" name="psy9" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[9]).'></td><td class="center"><input type="radio" name="psy9" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[9]).'></td><td class="center"><input type="radio" name="psy9" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[9]).'></td><td class="center"><input type="radio" name="psy9" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[9]).'></td><td class="center"><input type="radio" name="psy9" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[9]).'></td></tr>

            <tr><td class="center">10</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Respect Authority</td><td class="center"><input type="radio" name="psy10" style="display: inline-block; width: 100%; margin: auto;" value="5" '.edit_tick5($arr[10]).'></td><td class="center"><input type="radio" name="psy10" style="display: inline-block; width: 100%; margin: auto;" value="4" '.edit_tick4($arr[10]).'></td><td class="center"><input type="radio" name="psy10" style="display: inline-block; width: 100%; margin: auto;" value="3" '.edit_tick3($arr[10]).'></td><td class="center"><input type="radio" name="psy10" style="display: inline-block; width: 100%; margin: auto;" value="2" '.edit_tick2($arr[10]).'></td><td class="center"><input type="radio" name="psy10" style="display: inline-block; width: 100%; margin: auto;" value="1" '.edit_tick1($arr[10]).'></td></tr>
        </table>

        </div>
    <div style="display: inline-block; width: 29%; vertical-align: top;">
        <table class="borders" style="width: 100%;">
            <tr><th colspan="2" style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;" class="center">RATING</th></tr>
            <tr><td class="center">1</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Always</td></tr>
            <tr><td class="center">2</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Sometimes</td></tr>
            <tr><td class="center">3</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">With Guidance</td></tr>
            <tr><td class="center">4</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Not yet</td></tr>
            <tr><td class="center">5</td><td style="text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Never</td></tr>
        </table>
        <div style="margin-top: 30px;">
            <span style="display: inline-block; width: 46%; text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Next Term Fee:</span> <span style="width: 40%; display: inline-block;"> '.getfee($detail['class'],$conn).'</span>
        </div>
        <div style="margin-top: 30px;">
            <span style="display: inline-block; width: 46%; text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Outstanding Fee:</span><input type="number" name="outfee" style="width: 50%; border-bottom: 0.5px solid gray; display: inline-block;" value="'.$arr[11].'">
        </div>
    </div>
    </div>
    <div style="margin-top: 24px;">
        <div style="display: inline-block; width: 70%;">
            <span style="display: inline-block; width: 29%; text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Teacher&#8242s Remark:</span><input type="text" name="tremark" style="width: 78%; display: inline-block;" value="'.$arr[12].'"> 
        </div>

    </div>

    <div style="margin-top: 24px;">
        <div style="display: inline-block; width: 70%;">
            <span style="display: inline-block; width: 29%; text-indent: 3px; letter-spacing: 1px; word-spacing: 2.5px;">Head Teacher&#8242s Remark:</span><input type="text" name="hremark" style="width: 78%; display: inline-block;" value="'.$arr[13].'"> 
        </div>
        <div style="display: inline-block; width: 28%;">
            <p style="text-align: center;">Signature/Stamp</p>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../assets/js/vendor/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/vendor/jquery-1.10.2.min.js"></script>
    <!--<script type="text/javascript" src="../js/vendor/jquery-slim.min.js"></script> -->
    <script type="text/javascript" src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="form.js"></script>
    <script type="text/javascript" src="../assets/js/core.js"></script> 
    <script type="text/javascript">
        $(document).ready(function(){
            $("input").change(function(){
            var myObj={
                student: ""
            }
            myObj[""+$(this).attr("name")]=""+$(this).val();
            parent.updateRecord(myObj);
            })
        })
    </script>
</html>';

        return $pshycomotor;
    }else{
        return '</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../assets/js/vendor/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/vendor/jquery-1.10.2.min.js"></script>
    <!--<script type="text/javascript" src="../js/vendor/jquery-slim.min.js"></script>-->
    <script type="text/javascript" src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="form.js"></script>
    <script type="text/javascript" src="../assets/js/core.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("input").change(function(){
            $("input").change(function(){
            var myObj={
                student: ""
            }
            myObj[""+$(this).attr("name")]=""+$(this).val();
            parent.updateRecord(myObj);
            })
            })
        })
    </script>
</html>';
    }
 }
?>