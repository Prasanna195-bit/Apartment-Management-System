<?php 
error_reporting(E_ALL);
      $block=$_POST['block'];
      $houseno=$_POST['houseno'];
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $phoneno=$_POST['phoneno'];
      $rrno=$_POST['rrno'];
      $previousreading=$_POST['previousreading'];
      $currentreading=$_POST['currentreading'];
      $consumptioninunits=$_POST['consumptioninunits'];
      $amountpayable=$_POST['amountpayable'];



      $profpic="s7.jpg";
// database connection



      $conn=new mysqli('localhost','root','','apartment');
      if($conn->connect_error){
      	die('Connection Failed:'-$conn->connnect_error);
      }
      else
      {
      	$stmt=$conn->prepare("insert into electricity(block,houseno,firstname,lastname,phoneno,rrno,previousreading,currentreading,consumptioninunits)values('".$block."', '". $houseno."', '".$firstname."', '".$lastname."', '".$phoneno."', '".$rrno."', '".$previousreading."', '".$currentreading."', '".$consumptioninunits."', '".$amountpayable."')");
      	
            $stmt->execute();

      	echo "entered successfully";

      	$stmt->close();
      	$conn->close();
      }














 ?>