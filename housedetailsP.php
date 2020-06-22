<?php

error_reporting(E_ALL);
      $houseno=$_POST['housenumber'];
      $phonenumber=$_POST['phonenumber'];
     
      $blocknumber=$_POST['blocknumber'];
      $rstatus=$_POST['rstatus'];
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
    
      



      
// database connection



      $conn=new mysqli('localhost','root','','apartment');
      if($conn->connect_error){
      	die('Connection Failed:'-$conn->connnect_error);
      }
      else
      {
      	$stmt=$conn->prepare("insert into housedetails(houseno,phonenumber,blocknumber,rstatus,fname,lname)values('".$houseno."', '".$phonenumber."', '".$blocknumber."', '".$rstatus."', '".$fname."', '".$lname."')");
      	$stmt->execute();

      	echo "registration successfully";

      	$stmt->close();
      	$conn->close();
      }






?>