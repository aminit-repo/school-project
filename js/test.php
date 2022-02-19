<?php
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

 //require_once("../configs/db.php");
 if($_SERVER["REQUEST_METHOD"]=="POST"){


           echo '{
            "message":"successful"
           }';
 }
 
 
?>