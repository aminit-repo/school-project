<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");    
 require_once("db.php");
 require_once("generate.php");

 if($_SERVER["REQUEST_METHOD"]=="POST"){       
  //get datas from database
  if($_POST['name']==='student list'){
    //get the total number of student in the data table according to class
     $sql='SELECT count(reg_no) as total from student WHERE class="'.$_POST['classId'].'"';
     $result = $conn->query($sql);
     $data=$result->fetch_assoc();
      $data= '{"total" : "'.$data['total'].'"';

    $sql = 'SELECT * FROM student WHERE class="'.$_POST['classId'].'"';
    $result = $conn->query($sql);
  if ($result->num_rows > 0){
    $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $data.=',"d'.$i.'": "'.$row['surname'].' '.$row['other_name'].' '.$row['first_name'].' ['.$row['reg_no'].']" , "reg'.$i.'":"'.$row['reg_no'].'"';
          $i++;
      }

      $data.='}';
      echo $data;
  } else {
    $data= '{
      "total" : "0"
    }';

    echo $data;
    } 
  }else if($_POST['name']==='class list'){

        //get the total number of class
     $sql="SELECT count(class_id) as total from class";
     $result = $conn->query($sql);
     $data=$result->fetch_assoc();
      $data= '{"total" : "'.$data['total'].'"';

    $sql = "SELECT * FROM class";
    $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $data.=',"d'.$i.'": "'.$row['name'].' ['.$row['total'].'] ", "id'.$i.'": "'.$row['class_id'].'"';
          $i++;
      }

      $data.='}';
      echo $data;
  } else {
    $data= '{
      "total" : "0"
    }';

    echo $data;
    }

  }else if($_POST['name']==='class folder setting'){
     
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

  }else if($_POST['name']==='class_record'){
           //get the total number of class
     $sql='SELECT COUNT(reg_no) as total from student WHERE class="'.$_POST['classId'].'"';
     $result = $conn->query($sql);
     $data=$result->fetch_assoc();
     $data= '{"total" : "'.$data['total'].'"';

     $sql = 'SELECT * FROM student WHERE class="'.$_POST['classId'].'"';
     $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()){
        $data.=',"dname'.$i.'": "'.$row['surname'].' '.$row['other_name'].' '.$row['first_name'].'", "dreg'.$i.'": "'.$row['reg_no'].'"';
          $i++;
      }   
  } 

  $data.='}';
  echo $data; 

  }else if($_POST['name']==='subject list'){
             //get the total number of subject
     $sql="SELECT count(sub_id) as total from subject";
     $result = $conn->query($sql);
     $data=$result->fetch_assoc();
      $data= '{"total" : "'.$data['total'].'"';

    $sql = "SELECT * FROM subject";
    $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $data.=',"dname'.$i.'": "'.$row['name'].'" , "dId'.$i.'" : "'.$row['sub_id'].'"';
        $i++;
      }

      $data.='}';
      echo $data;
  } else {
    $data= '{
      "total" : "0"
    }';

    echo $data;
    }

  }else if( $_POST['name'] =='student score records'){

    if($_POST['sub_id']==='all-subject'){

                             //get the total number of class
     $sql='SELECT COUNT(reg_no) as total from student WHERE class="'.$_POST['classId'].'"';
     $result = $conn->query($sql);
     $data=$result->fetch_assoc();
     $data= '{"total" : "'.$data['total'].'"';
      //compute detailed result
      //get list of all offered subject
      $subjects=get_offered_subject($_POST['classId'],$conn);

      $data.=',"totalSubject" :"'.count($subjects).'"';
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
          echo $data;


    }else if($_POST['name'] =='class details record'){



          echo '{"code":"1"}';

        

    }else{
            //get the total number of class
     $sql='SELECT COUNT(reg_no) as total from student WHERE class="'.$_POST['classId'].'"';
     $result = $conn->query($sql);
     $data=$result->fetch_assoc();
     $data= '{"total" : "'.$data['total'].'"';
     $sql = 'SELECT * FROM student WHERE class="'.$_POST['classId'].'"';
     $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()){
        $data.=',"dname'.$i.'": "'.$row['surname'].' '.$row['other_name'].' '.$row['first_name'].'", "dreg'.$i.'": "'.$row['reg_no'].'"';
    
         //get the student exams data's from offer table
         $sql ="SELECT * FROM offer WHERE reg_no='".$row['reg_no']."' AND sub_id='".$_POST['sub_id']."'";
         $resultx = $conn->query($sql);
         if($resultx->num_rows > 0){
          $rowx = $resultx->fetch_assoc();
          $data.=',"record'.$i.'": "true", "test1_'.$i.'" : "'.$rowx['test1'].'", "test2_'.$i.'" : "'.$rowx['test2'].'", "exam_'.$i.'" : "'.$rowx['exam'].'", "grade'.$i.'": "'.$rowx['grade'].'", "total'.$i.'" : "'.$rowx['total'].'"';
         }else{
            //specify a false in record attribute.
             $data.=',"record'.$i.'": "false"';
         } 
          $i++;
      }   
  } 

  $data.='}';
  echo $data; 
  }

    }

 } 
 $conn->close(); 
?>