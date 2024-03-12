
<?php
include('Userheader.php');
include_once("config.php");  
?>


<div align="center">

<br>
<br>
<br>
<br>
<br>

<form action="" name="register"  id="register" method="post">

	<br>


	

<h1>Employee Details</h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #79A202;" align="center">
	<tr>
	    <th bgcolor=Black><font color=white size=2>Employee id</font></th>
			
			<th bgcolor=Black><font color=white size=2>Name</font></th>
			<th bgcolor=Black><font color=white size=2>Department</font></th>
			<th bgcolor=Black><font color=white size=2>Qualification</font></th>
			<th bgcolor=Black><font color=white size=2>Designation</font></th>
			<th bgcolor=Black><font color=white size=2>Mobile</font></th>
			<th bgcolor=Black><font color=white size=2>Email</font></th>
			
	</tr>
	
	<?php
	
	$query = "select * from employee";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Empid']; ?></font></td>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Empname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Dept']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Quali']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Design']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Mobile']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Email']; ?></font></td>
			
		
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `employee`"; 
	$query .= " VALUES ('".$_POST['t1']."', '".$_POST['t3']."', '".$_POST['s1']."', '";
	$query .=  $_POST['t4']."', '";
	$query .= $_POST['t5']."','".$_POST['t6']."','".$_POST['t7']."')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Addemployee.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from employee where Empid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Addemployee.php");
	exit;
	}
include('footer.php');
?>
 

