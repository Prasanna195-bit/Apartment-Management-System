<!DOCTYPE html>
<html>
<head >
	<link rel="stylesheet" type="text/css" href="adminnextC.css">
	<title></title>
</head>
<body style="background: #F6B46F;">
	<header >


	<!-- back button -->
	<div class="btn">
		
			<br><a href="adminH.html"><button style="height: 30px; width: 70px;">Back</button></a>
		
		

	</div>



<div class="main">
	<table border="1", width="100%" ,top="20%">
		<br><br>
		
		<h1 style="background-color: #000; color: #fff;"width="100%" align="center" >User  Data </h1>
	





		<tr bgcolor="#000">
			<th><font color="#fff">Firstname</th>
			<th><font color="#fff">Lastname</th>
			<th><font color="#fff">Phoneno</th>
			<th><font color="#fff">Dob</th>
			<th><font color="#fff">Mailid</th>
			<th><font color="#fff">City</th>
			<th><font color="#fff">Username</th>
			<th><font color="#fff">Password</th>
            



		</tr>



		
		<?php
		$conn=mysqli_connect("localhost","root","","apartment");

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}


		$sql="SELECT firstname,lastname,phoneno,dob,mailid,city,username,password from register";
		$result=$conn->query($sql);




		if($result-> num_rows > 0)
		{
			while($row=$result->fetch_assoc())
			{
				echo "<br> ";
				
				echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["phoneno"]."</td><td>".$row["dob"]."</td><td>".$row["mailid"]."</td><td>".$row["city"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
			}

			echo "</table>";
		}


		else
		{
			echo "0 results";
		}





$conn->close();//closing database connection
?>





	</table>
</div>

</header>
</body>
</html>