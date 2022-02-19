<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    

 require_once("db.php");
  if($_SERVER["REQUEST_METHOD"]=="POST"){       
   //insert data into database
     if($_POST['formId']=='student_details'){
       $sql = "INSERT INTO student (reg_no,first_name,other_name,surname,grade,total_score,attendance,class,gender,class_cat)
                VALUES ('".$_POST['reg_no']."','".$_POST['first_name']."','".$_POST['other_name']."','".$_POST['surname']."','x','0','".$_POST['attendance']."','".$_POST['class']."','".$_POST['gender']."','".$_POST['classCat']."')";
         if ($conn->query($sql) === TRUE){
          echo '{"formId":"'.$_POST['formId'].'",
                "code":"1",
                "fullname": "'.$_POST['surname'].' '.$_POST['other_name'].' '.$_POST['first_name'].' ['.$_POST['reg_no'] .']",
                 "regNo": "'.$_POST['reg_no'].'"
                  }';
          }else{
            echo '{"formId":"'.$_POST['formId'].'",
             "code":"0",
             "regNo": "'.$_POST['reg_no'].'"
              }';
          } 
      }else if(stripos($_POST["formId"], "subject_") == 0){
          //insert into subject table

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

      }else{
        
      }

 } 
 $conn->close(); 
?>