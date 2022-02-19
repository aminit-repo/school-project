<?php
    require_once("db.php");
    $sql = 'SELECT * FROM student WHERE class="'.$_GET['class'].'"';
    $result = $conn->query($sql);
  if ($result->num_rows > 0){
    $i=1;
      // output data of each row
      while($row = $result->fetch_assoc()) {
      	echo '<script> 
            window.open( 
              "resultGenerator.php?regno='.$row['reg_no'].'", "_blank"); 
      </script>';
      }

  }


?>