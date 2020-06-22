<?php 
error_reporting(E_ALL);
      $apartmentname=$_POST['apartmentname'];
      $block=$_POST['block'];
      $houseno=$_POST['houseno'];
      $floorno=$_POST['floorno'];
      $housetype=$_POST['housetype'];
      $parkingtype=$_POST['parkingtype'];
      $electricitybackup=$_POST['electricitybackup'];
      $furnishedstate=$_POST['furnishedstate'];
      $intercomno=$_POST['intercomno'];
      



      $profpic="s1.jpg";
// database connection



      $conn=new mysqli('localhost','root','','apartment');
      if($conn->connect_error){
      	die('Connection Failed:'-$conn->connnect_error);
      }
      else
      {
      	$stmt=$conn->prepare("insert into groupsetup(apartmentname,block,houseno,floorno,housetype,parkingtype,electricitybackup,furnishedstate,intercomno)values('".$apartmentname."','".$block."', '". $houseno."', '".$floorno."', '".$housetype."', '".$parkingtype."', '".$electricitybackup."', '".$furnishedstate."', '".$intercomno."')");
      	$stmt->execute();

      	echo "registration successfully";

      	$stmt->close();
      	$conn->close();
      }














 ?>