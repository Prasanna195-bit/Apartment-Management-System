
<!-- design and buttons -->

<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" href="admPHPc.css"> <!-- this page is linked with admin page's css file -->
      <title></title>
</head>
<body>


      <form >
            
      <header>




            <h1>Press &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp to continue</h1>









<div class="main">

<!-- related to database -->
<?php 
error_reporting(E_ALL);
      $hblock=$_POST['hblock'];
      $amount=$_POST['amount'];
      $bname=$_POST['bname'];
      $accountid=$_POST['accountid'];
      $pmode=$_POST['pmode'];
      $date=$_POST['date'];
     



// database connection



      $conn=new mysqli('localhost','root','','apartment');



      if($conn->connect_error)
       {
      	die('Connection Failed:'-$conn->connnect_error);
       }




      elseif (empty($_POST['hblock']) || empty($_POST['amount']) || empty($_POST['bname']) || empty($_POST['accountid']) || empty($_POST['pmode']) || empty($_POST['date']))
          {
               
                echo "Please enter all attributes !!!!...";
           }



      else
      {
      	$stmt=$conn->prepare("insert into upayment(hblock,amount,bname,accountid,pmode,date)values('".$hblock."', '".$amount."', '".$bname."', '".$accountid."', '".$pmode."', '".$date."')");
      	$stmt->execute();

                echo '<script type="text/javascript">';
                echo'alert("Entered successfully");';
                echo 'window.location.href="dashboard.html";';
                echo'</script>';
            
               

      	$stmt->close();
      	$conn->close();
      }



 ?>
</div>

 <div class="back">

             <ul>
                    <li><a href="upayment.html">HERE</a></li>
            </ul>
</div>


</header>   
</form>
      
</body>
</html>
