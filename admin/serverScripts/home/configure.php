<?php 
//get all the features 

  $myfile = fopen("fresult.html", "r") or die("Unable to open file!");
  $page=fread($myfile,filesize("fresult.html"));
   

  //get all the required features 
  // echo $_GET['val']['f1'];


  echo $page; 
  fclose($myfile);


 ?>