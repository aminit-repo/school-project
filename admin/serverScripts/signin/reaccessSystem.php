<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");


$myfile = fopen("sample.txt", "r") or die("Unable to open file!");
$page=fread($myfile,filesize("sample.txt")); 

echo '{
         "configuration": {
         	 "feature": {
         	  "f1": {
               "name" : "activities",
                "status" : "true"
               },
         	  "f2": {
               "name" : "resetpass",
                "status" : "true"
               },
         	  "f3": {
               "name" : "message",
               "status" : "false"
               },
            "f4": {
               "name" : "desk",
               "status" : "false"
               },
            "f5": {
               "name" : "added",
               "status" : "false"
               }
         	 },

         	 "themecolor": "default",
         	 "isComposite": "true",
             "compositionqtn": "2",
         	 "composition": {
         	 	"f1" : "Teacher",
         	 	"f2" : "Director" 
         	 }
         }, 

         "details": {
         	"firstname":"Gift",
         	"middlename":"John",
         	"lastname": "Inisaziba"
         },
         "school": {
         	"name": "ruzi international school",
 	        "address": "default",
 	 		     "color": "blue"
         },
         "id": "32jf44",
 	      "message": "is this your mail"
        }';  
        fclose($myfile);
 
?>