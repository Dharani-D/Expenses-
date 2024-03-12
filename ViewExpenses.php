
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


	

<h1>Expense Master</h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #79A202;" align="center">
	<tr>
	    <th bgcolor=Black><font color=white size=2>id</font></th>
			<th bgcolor=Black><font color=white size=2>Date</font></th>
				<th bgcolor=Black><font color=white size=2>Expense</font></th>
				<th bgcolor=Black><font color=white size=2>Description</font></th>
			<th bgcolor=Black><font color=white size=2>Amount</font></th>
			<th bgcolor=Black><font color=white size=2>mode of Pay</font></th>
		
			  
	</tr>
	
	<?php
	
	$query = "select * from expense";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Dt']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Expense']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Descr']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Amt']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Modeofpay']; ?></font></td>
		
		
	</tr>
	<?php }  ?>
	
	</table>
	<b>Total Expenses:<?php $query = "Select sum(Amt) amt from expense";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
	 $row = mysql_fetch_assoc($result);
	echo $row['amt'];
		}
	
	?></b>
	<br>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `expense`"; 
	$query .= " VALUES (null,'".$_POST['datepicker']."','".$_POST['eid']."','".$_POST['t1']."','".$_POST['t2']."','".$_POST['s1']."')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Addexpensedet.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from expense where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Addexpensedet.php");
	exit;
	}
include('footer.php');
?>
 

