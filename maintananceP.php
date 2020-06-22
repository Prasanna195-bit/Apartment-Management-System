<?php 
error_reporting(E_ALL);
      
      $block=$_POST['block'];
      $houseblock=$_POST['houseblock'];
      $housetype=$_POST['housetype'];
      $amount=$_POST['amount'];
 
      



    
// database connection



      $conn=new mysqli('localhost','root','','apartment');
      if($conn->connect_error){
      	die('Connection Failed:'-$conn->connnect_error);
      }
      else
      {
      	$stmt=$conn->prepare("insert into maintanance(block,houseblock,housetype,amount)values('".$block."', '". $houseblock."', '".$housetype."', '".$amount."')");
      	$stmt->execute();

      	echo "registration successfully";

      	$stmt->close();
      	$conn->close();
      }
