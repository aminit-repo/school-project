<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    
 require_once("db.php");

 function checkNumber($var) {
    if($var==''){
      return '-1';
    }else{
      return $var;
    }
}

function checkWord($var){
  if($var ==''){
    return 'x';
  }else{
    return $var;
  }
}


function getTotal(){
  $total=0;
   if($_POST['test1']==''){
   }else{
    $total= $total + $_POST['test1'];
   }

   if($_POST['test2']==''){
   }else{
    $total= $total + $_POST['test2'];
   }

  if($_POST['exam']==''){
   }else{
    $total= $total + $_POST['exam'];
   }
   return $total;
}


function getGrade(){
        if(getTotal() > 79){
          return 'A';
        }else if(getTotal() > 59){
          return 'B';
        }else if(getTotal() > 49){
          return 'C';
        }else if(getTotal() > 39){
          return 'D';
        }else{
          return 'E';
        }
}

 //hanndle empty value
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  		 if($_POST['status']==='insert'){
  		 	 $sql = "INSERT INTO offer (reg_no,sub_id,test1,test2,exam,grade,position,total)
                VALUES ('".$_POST['reg_no']."','".$_POST['sub_id']."','".checkNumber($_POST['test1'])."','".checkNumber($_POST['test2'])."','".checkNumber($_POST['exam'])."','".getGrade()."','-1','".getTotal()."')";
                 if ($conn->query($sql) === TRUE){
                   echo '{"sn":"'.$_POST['sn'].'",
                      "code":"1"}';   
                 }else{
                    echo '{"sn": "'.$_POST['sn'].'",
                            "code": "0"
                          }';
                    }
  		 }else{
        $sql = "UPDATE offer SET test1='".checkNumber($_POST['test1'])."', test2='".checkNumber($_POST['test2'])."', exam='".checkNumber($_POST['exam'])."', total='".getTotal()."', grade='".getGrade()."' WHERE reg_no='".$_POST['reg_no']."' AND sub_id='".$_POST['sub_id']."'";
      if ($conn->query($sql) === TRUE) {
           echo '{"sn":"'.$_POST['sn'].'",
                      "code":"1"}'; 
      } else {
          echo "Error updating record: " . $conn->error;
      }

    }
  } 
   $conn->close();    
?>