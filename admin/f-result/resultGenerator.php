<?php
require_once("db.php");
require "../pdfcrowd.php";
require "sheetCreator.php";
$api_key='56879585951258e7b7eb06985d10e8c2';
$username='alphonsus';


function generate_student_result($reg_no, $conn){
    //get the student details
    $result= set_heading($reg_no,$conn).''.set_details($reg_no, $conn).''.set_subject($reg_no,$conn).''.set_pshycomotor($reg_no,$conn);
    echo $result;
}


generate_student_result($_GET['regno'], $conn);
 $conn->close();
?>