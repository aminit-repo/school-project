<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbName = "mc_genia";
          //create connection
          $conn= new mysqli($servername,$username,$password,$dbName);
            //kill script if there is a connection error
           if ($conn->connect_error) {
            die("connection failed: " . $conn->connect_error);
          }
  ?>